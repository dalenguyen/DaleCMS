<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;
use App\Repositories\Posts;
use App\Category;
use App\Tag;

class BlogController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('blogger', ['except' => ['index', 'show']]);
    }

    public function index(Posts $posts, Request $request){
      // /blog

      // Check if this is a search request
      $search = $request->get('search');
      if(!is_null($search)){
        $message = "";
        $posts = Post::where('body','like','%'.$search.'%')
        ->orderBy('title')
        ->simplePaginate(4);

        if(count($posts) > 0){ // posts found
          $message = "We found ". count($posts). " results:";
        }else{
          $message = "Sorry, no matches found! Please search again.";
        }

        return view('blog.index', compact('posts', 'message'));
      }else{
        // Post filter for archives and author from Posts Repositories
        $posts = $posts->getPosts();

        return view('blog.index', compact('posts'));
      }
    }

    public function show($slug){
      // GET /blog/id

      $post = Post::where('slug', $slug)->first();

      if(is_null($post)){
          abort(404, 'Page not found');
      }else{
          return view('blog.index', compact('post'));
      }
    }

    public function create(){
      // /blog/create

      $categories = Category::get()->pluck('name')->toArray();

      if(!empty($categories)){
        // Array start at 1 instead of 0
        $categories = array_combine(range(1, count($categories)), $categories);
      }

      $tags = Tag::get()->pluck('name')->toArray();

      if(!empty($tags)){
        // Array start at 1 instead of 0
        $tags = array_combine(range(1, count($tags)), $tags);
      }

      return view('admin.posts.create', compact('categories', 'tags'));
    }

    public function store(){
      // POST /blog

      $this->validate(request(), [
        'title' => 'required|min: 3',
        'body' => 'required'
      ]);

      // Add slug to request
      request()->merge(['slug' => str_slug(request('title'))]);

      $post = new Post(request(['title', 'body', 'slug', 'thumbnail']));

      auth()->user()->publish($post);

      $post->categories()->attach(request('categories'));
      $post->tags()->attach(request('tags'));

      return redirect('/admin/post');
    }

    public function edit($slug){
      // GET /blog/id/edit
      $post = Post::where('slug', $slug)->first();

      $categories = Category::get()->pluck('name')->toArray();

      // Array start at 1 instead of 0
      array_unshift($categories,"");
      unset($categories[0]);

      $categorySelectedArray = $post->categories->pluck('id')->toArray();

      $tags = Tag::get()->pluck('name')->toArray();

      // Array start at 1 instead of 0
      array_unshift($tags,"");
      unset($tags[0]);

      $tagSelectedArray = $post->tags->pluck('id')->toArray();

      return view('admin.posts.edit', compact('post', 'categories', 'tags', 'categorySelectedArray', 'tagSelectedArray'));

    }

    public function update($id){
      // PATCH /blog/id

      $this->validate(request(), [
        'title' => 'required|min: 3',
        'body' => 'required'
      ]);

      $post = Post::findOrFail($id);

      // Sync Categories to post

        if(request('categories') !== null){
            $this->syncCategories(request('categories'), $post);
        }else{
            $this->syncCategories([], $post);
        }

      // Sync Tags to post

        if(request('tags') !== null){
            $this->syncTags(request('tags'), $post);
        }else{
            $this->syncTags([], $post);
        }

      $post->update(request()->all());

      return redirect()->back();

    }

    public function destroy($id){
      // DELETE /blog/id
      $post = Post::findOrFail($id);

      $post->delete();

      return redirect('/admin/post');
    }

    /**
     * Sync Categories to post update method
     *
     * @param $categories array
     * @param $post
     */
    private function syncCategories(array $categories, $post)
    {
        $post->categories()->sync($categories);
    }

    /**
     * Sync Tags to post update method
     *
     * @param $tags array
     * @param $post
     */
    private function syncTags(array $tags, $post)
    {
        $post->tags()->sync($tags);
    }
}

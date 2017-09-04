<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;
use App\Repositories\Posts;
use App\Category;

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

      // Array start at 1 instead of 0
      $categories = array_combine(range(1, count($categories)), $categories);


      return view('admin.posts.create', compact('categories'));
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

      return redirect('/admin/post');
    }

    public function edit($slug){
      // GET /blog/id/edit
      $post = Post::where('slug', $slug)->first();

      $categories = Category::get()->pluck('name')->toArray();

      // Array start at 1 instead of 0
      array_unshift($categories,"");
      unset($categories[0]);

      $selectedArray = $post->categories->pluck('id')->toArray();

      // dd(in_array(2, $selectedArray));


      return view('admin.posts.edit', compact('post', 'categories', 'selectedArray'));

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
            $this->syncCategoriess(request('categories'), $post);
        }else{
            $this->syncCategoriess([], $post);
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
    private function syncCategoriess(array $categories, $post)
    {
        $post->categories()->sync($categories);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;
use App\Repositories\Posts;

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

    public function index(Posts $posts){
      // /blog

      // Post filter for archives and author from Posts Repositories
      $posts = $posts->getPosts();

      return view('blog.index', compact('posts'));
    }

    public function show(Post $post){
      // GET /blog/id

      return view('blog.show', compact('post'));
    }

    public function create(){
      // /blog/create

      return view('admin.posts.create');
    }

    public function store(){
      // POST /blog

      $this->validate(request(), [
        'title' => 'required|min: 3',
        'body' => 'required'
      ]);

      // Add slug to request
      request()->merge(['slug' => str_slug(request('title'))]);

      auth()->user()->publish(new Post(request(['title', 'body', 'slug'])));

      return redirect('/admin/post');
    }

    public function edit($id){
      // GET /blog/id/edit
      $post = Post::findOrFail($id);

      return view('admin.posts.edit', compact('post'));

    }

    public function update($id){
      // PATCH /blog/id

      $this->validate(request(), [
        'title' => 'required|min: 3',
        'body' => 'required'
      ]);

      $post = Post::findOrFail($id);

      $post->update(request()->all());

      return redirect()->back();

    }

    public function destroy($id){
      // DELETE /blog/id
      $post = Post::findOrFail($id);

      $post->delete();

      return redirect('/admin/post');
    }
}

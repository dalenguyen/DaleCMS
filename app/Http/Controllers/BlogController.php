<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;

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

    public function index(){
      // /blog
      
      // Post filter for archives and author
      $posts = Post::latest()
                ->filter(request(['month', 'year', 'author']))
                ->get();

      return view('blog.index', compact('posts'));
    }

    public function show(Post $post){
      // GET /blog/id

      return view('blog.show', compact('post'));
    }

    public function create(){
      // /blog/create

      return view('blog.create');
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

      return redirect('/blog');
    }

    public function edit(){
      // GET /blog/id/edit


    }

    public function update(Request $request, $id){
      // PATCH /blog/id


    }

    public function destroy($id){
      // DELETE /blog/id


    }
}

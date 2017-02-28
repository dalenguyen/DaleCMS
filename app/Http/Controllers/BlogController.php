<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

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
      $posts = Post::latest()->get();

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
      // Only allow certain fields to the database
      Post::create(request(['title', 'body']));

      return redirect('/');

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

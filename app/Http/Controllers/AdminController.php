<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Repositories\Posts;

class AdminController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('blogger');
  }

  public function index(){
    return view('admin.dashboard');
  }

  public function post(Posts $posts){

    // Post filter for archives and author from Posts Repositories
    $posts = $posts->getPosts();

    return view('admin.posts.index', compact('posts'));
  }
}

<?php

namespace App\Repositories;

use App\Post;
use App\Redis;
use App\Category;

class Posts {

  public function __construct(Redis $redis){
    $this->redis = $redis;
  }

  public function all(){
      return Post::all();
  }

  public function getPosts(){

    if(!empty(request('category'))){
      $category = Category::where('name', request('category'))->first();
      $posts = $category->posts()->simplePaginate(4);;
      return $posts;      
    }else{
      return Post::latest()
                ->filter(request(['month', 'year', 'author']))
                ->simplePaginate(4);
    }

  }
}

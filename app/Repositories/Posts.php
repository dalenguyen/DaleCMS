<?php

namespace App\Repositories;

use App\Post;
use App\Redis;

class Posts {

  public function __construct(Redis $redis){
    $this->redis = $redis;
  }

  public function all(){
      return Post::all();
  }

  public function getPosts(){
    return Post::latest()
              ->filter(request(['month', 'year', 'author']))
              ->get();
  }
}

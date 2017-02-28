<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\User;

class Post extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'title', 'body', 'slug'
  ];

  public function categories(){
    return $this->belongsToMany(Category::class);
  }

  public function user(){
    return $this->belongsTo(User::class);
  }
}

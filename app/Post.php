<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\User;
use Carbon\Carbon;

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
  /**
   * Filter month, year and author scope for post archives
   *
   * @param  [type] $query   [description]
   * @param  [type] $filters [description]
   * @return [type]          [description]
   */
  public function scopeFilter($query, $filters){
    if($month = $filters['month']){
      $query->whereMonth('created_at', Carbon::parse($month)->month);
    }

    if($year = $filters['year']){
      $query->whereYear('created_at', $year);
    }

    if($author = $filters['author']){
      $query->where('user_id', $author);
    }
  }

  /**
   * Return Archives for all the view in AppServiceProvider
   *
   * @return [Array] [description]
   */
  public static function archives(){
    return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
                ->groupBy('year','month')
                ->orderByRaw('min(created_at) desc')
                ->get()->toArray();
  }

  /**
   * Return category of a post
   */

  public function getCategory(){
    return ($this->categories->first()) ? $this->categories->first()->name : "Uncategorized";
  }
}

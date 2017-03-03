<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Post;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'username', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function posts(){
      return $this->hasMany(Post::class);
    }

    /**
     * Check if the user is allow to write blog
     * @return boolean [description]
     */
    public function isAuthorized(){
      return $this->is_blogger === 1 || $this->is_admin === 1 ? true : false;
    }

    /**
     * Publish a new post with user_id and slug
     * @param  Post   $post [description]
     * @return [type]       [description]
     */
    public function publish(Post $post){
      $this->posts()->save($post);
    }

    /**
     * Get full name of a user
     * @return [string] [description]
     */
    public function getFullName(){
      return $this->first_name ." ". $this->last_name;
    }
}

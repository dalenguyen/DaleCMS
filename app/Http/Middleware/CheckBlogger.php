<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckBlogger
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check() && Auth::user()->isAuthorized()){
          return $next($request);
          // return redirect('/admin');
        }else{
          return redirect('/login');
        }
    }
}

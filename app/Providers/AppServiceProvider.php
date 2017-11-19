<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Call post archives, categories everytime sidebar is loaded in view
        view()->composer('layouts.sidebar', function($view){
          $archives = \App\Post::getArchives();
          $categories = \App\Post::getCategories();
          $tags = \App\Post::getTags();
          $view->with(['archives' => $archives, 'categories' => $categories, 'tags' => $tags]);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Post;

class ExampleTest extends TestCase
{
    use DatabaseTransactions; // testing will not be saved to the database

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
      // Doesn't work with Vue component

      $first = factory(Post::class)->create();

      $second = factory(Post::class)->create([
        'created_at' => \Carbon\Carbon::now()->subMonth()
      ]);

      // When I fetch archives
      $posts = Post::archives();

      // dd($posts);

      $this->assertEquals([
        [
        "year"  => $first->created_at->format('Y'),
        "month" => $first->created_at->format('F'),
        "published" => 1
        ],
        [
        "year"  => $second->created_at->format('Y'),
        "month" => $second->created_at->format('F'),
        "published" => 1
        ],
      ], $posts);
    }
}

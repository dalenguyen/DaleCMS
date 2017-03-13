{{-- blog/index.blade.php --}}

@extends('layouts.master')

@section('title', 'Blog')

@section('content')
  <div class="col-sm-8 blog-main">

    <nav class="breadcrumb hidden-md-down">
      <a class="breadcrumb-item" href="/"><i class="fa fa-home" aria-hidden="true"></i></a>
      <a class="breadcrumb-item" href="http://dalenguyen.me/blog">Blog</a>
      <a class="breadcrumb-item" href="#">All</a>
    </nav>

    @foreach ($posts as $post)
      @include('blog.post', [
        "postContent" => str_limit($post->body, 300),
        "readmore"  => true
      ])
    @endforeach

    <nav class="blog-pagination">
      <a class="btn btn-outline-primary" href="#">Older</a>
      <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
    </nav>
  </div>
@endsection

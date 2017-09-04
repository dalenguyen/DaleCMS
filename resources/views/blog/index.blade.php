{{-- blog/index.blade.php --}}

@extends('layouts.master')

@section('title', 'Blog')

@section('content')
  <div class="row container" style="margin-top: 35px;">
    <div class="col-sm-8 blog-main">
      <nav class="breadcrumb ">
        <a class="breadcrumb-item" href="/"><i class="fa fa-home" aria-hidden="true"></i></a>
        <a class="breadcrumb-item" href="http://dalenguyen.me/blog">Blog</a>
        <a class="breadcrumb-item" href="/blog">All</a>
      </nav>

      @if(isset($message))
        <div class="alert alert-info">
          <strong>{{$message}}</strong>
        </div>
      @endif

      @if(count($posts) > 0)
        @foreach ($posts as $post)
          @include('blog.post', [
            "postContent" => str_limit($post->body, 300),
            "readmore"  => true
          ])
        @endforeach
      @endif

      <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
      </nav>
    </div>
    <!-- sidebar -->
    <div id="sidebar" class="blog-sidebar col-sm-4">
      @include('layouts.sidebar')
    </div>
  </div>
@endsection

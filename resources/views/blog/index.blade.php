{{-- blog/index.blade.php --}}

@extends('layouts.master')

@section('title', 'Blog')

@section('content')
  <div class="row container" style="margin-top: 35px;">
    <div class="col-sm-8 blog-main">
      <nav class="breadcrumb ">
        <a class="breadcrumb-item" href="/"><i class="fa fa-home" aria-hidden="true"></i></a>
        <a class="breadcrumb-item" href="http://dalenguyen.me/blog">Blog</a>
        @if(isset($posts))
          <a class="breadcrumb-item" href="/blog">All</a>
        @elseif(isset($post))
          <a class="breadcrumb-item">{{ str_limit(ucfirst($post->title),30) }}</a>
        @endif
      </nav>

      <!-- Search on mobile -->
      <div class="hidden-sm-up">
        <form action="/blog" method="get" class="navbar-form navbar-left" role="search">
          <div class="input-group custom-search-form">
              <input type="text" class="form-control" name="search" placeholder="Search...">
              <span class="input-group-btn">
                  <button class="btn btn-default-sm" type="submit">
                      <i class="fa fa-search"></i>
                  </button>
              </span>
          </div>
        </form>
      </div>

      @if(isset($posts))
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

          {{ $posts->links() }} //page pagination
        @endif
      @elseif(isset($post))
        @include('blog.post', [
          "postContent" => $post->body,
          "readmore"  => false
        ])
      @endif

    </div>
    <!-- sidebar -->
    <div id="sidebar" class="blog-sidebar col-sm-4">
      @include('layouts.sidebar')
    </div>
  </div>
@endsection

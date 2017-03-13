{{-- blog/show.blade.php --}}

@extends('layouts.master')

@section('title', $post->title)

@section('content')
  <div class="col-sm-8 blog-main">

    <nav class="breadcrumb hidden-md-down">
      <a class="breadcrumb-item" href="/"><i class="fa fa-home" aria-hidden="true"></i></a>
      <a class="breadcrumb-item" href="http://dalenguyen.me/blog">Blog</a>
      <a class="breadcrumb-item" href="#">Post</a>
    </nav>
    {{-- blog/post.blade.php --}}

    @include('blog.post', [
      "postContent" => $post->body,
      "readmore"  => false
    ])

  </div>
@endsection

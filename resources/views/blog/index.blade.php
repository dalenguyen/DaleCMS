{{-- blog/index.blade.php --}}

@extends('layouts.master')

@section('title', 'Blog')

@section('content')
  <div class="col-sm-8 blog-main">
    @foreach ($posts as $post)
      @include('blog.post')
    @endforeach

    <nav class="blog-pagination">
      <a class="btn btn-outline-primary" href="#">Older</a>
      <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
    </nav>
  </div>
@endsection

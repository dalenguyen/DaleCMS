{{-- blog/show.blade.php --}}

@extends('layouts.master')

@section('title', 'Blog')

@section('content')
  <div class="col-sm-8 blog-main">
    <h1>{{$post->title}}</h1>
    {!! $post->body !!}
  </div>
@endsection

@extends('layouts.master')

@section('content')
  <div class="col-sm-8 blog-main">
    <div class="error-page">
        <h2 class="headline text-info"> 404</h2>
        <div class="error-content">
            <h3><i class="fa fa-warning text-yellow"></i> Oops! Page not found.</h3>
            <p>
                We could not find the page you were looking for.
                Meanwhile, you may <a href="/blog">return to blog</a> or try using the search form.
            </p>
        </div>
    </div>
  </div>
@endsection

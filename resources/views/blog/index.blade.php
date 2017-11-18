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

          {{ $posts->links() }}
        @endif
      @elseif(isset($post))

        @include('blog.post', [
          "postContent" => $post->body,
          "readmore"  => false
        ])

        <!-- Disqus integration -->

        <div id="disqus_thread"></div>
        <script>

          var disqus_config = function () {
            this.page.url = 'http://dalenguyen.me/blog/{{$post->slug}}';
            this.page.identifier = {{$post->id}};
          };

          (function() { // DON'T EDIT BELOW THIS LINE
          var d = document, s = d.createElement('script');
          s.src = 'https://dalenguyen-me.disqus.com/embed.js';
          s.setAttribute('data-timestamp', +new Date());
          (d.head || d.body).appendChild(s);
          })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>                            

      @endif

    </div>
    <!-- sidebar -->
    <div id="sidebar" class="blog-sidebar col-sm-4">
      @include('layouts.sidebar')
    </div>
  </div>
@endsection

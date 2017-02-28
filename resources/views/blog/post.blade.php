{{-- blog/post.blade.php --}}

<div class="blog-post">
  <a href="/blog/{{$post->id}}">
    <h2 class="blog-post-title">{{$post->title}}</h2>
  </a>
  <p class="blog-post-meta">
    <a href="#">{{$post->user->getFullName()}}</a> on
    {{$post->created_at->toFormattedDateString()}}
  </p>
  {{$post->body}}
</div><!-- /.blog-post -->

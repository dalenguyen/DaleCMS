<div class="blog-post">
  <a href="/blog/{{$post->id}}">
    <h2 class="blog-post-title">{{$post->title}}</h2>
  </a>
  <p class="blog-post-meta">{{$post->created_at->toFormattedDateString()}} by <a href="#">Mark</a></p>
  {{$post->body}}
</div><!-- /.blog-post -->

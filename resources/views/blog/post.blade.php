{{-- blog/post.blade.php --}}
<article>
  <div class="blog-post clearfix">
    <div class="post-title-container">

      <a href="/blog/{{$post->slug}}"><h1>{{$post->title}}</h1></a>

      @if(Auth::check() && Auth::user()->is_blogger)
        <a href="/admin/post/{{$post->slug}}/edit" class="tooltip-success" data-rel="tooltip">
            <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
        </a>
      @endif

      <div class="post-materials clearfix">
        <span class="hidden-xs-down">
          <i class="fa fa-user"></i>
          <span class="material-font"> by</span>
          <span class="author-name">
          <a href="/blog/?author={{$post->user->id}}" rel="author" title="author profile">
            {{$post->user->getFullName()}}
          </a>
          </span>
        </span>
        <span>
          <i class="fa fa-calendar-o"></i>
          <a href="#"><abbr class="published">  {{$post->created_at->toFormattedDateString()}}</abbr></a>
        </span>
        <span class="post-cat">
          <i class="fa fa-tags"></i>
          <a href="#">{{$post->getCategory()}}</a>
        </span>
      </div>
    </div>
    <div class="post-type-icon hidden-md-down">
      <i class="fa fa-file-text-o" title="Standart Post Format"></i>
    </div>
    {{-- <div class="media-materials">
      <img src="http://3.bp.blogspot.com/-CZORl3BLNNE/VngyL5o8vcI/AAAAAAAAHYY/gxB7zYZ8ZTg/s1600/background-1-750x360.jpg" width="100%">
    </div> --}}
    <div class="post-content clearfix">
      <div class="post-content-blog">
        <div style="display: block;"> {!! $postContent !!}</div>
        {{-- <script type="text/javascript">createThumb("4633291745960409272");</script> --}}
      </div>
      @if($readmore)
        <div class="continue-reading pull-left">
          <a href="/blog/{{$post->slug}}">READ MORE</a>
        </div>
      @endif
      <div class="blog-classic-share pull-right clearfix">
        <div class="pull-left"><a class="open-share" href=""></a></div>
        <div class="pull-left share-wrapper">
          <span class="tag-title-post pull-left cshare-text">SHARE : </span>
          <div class="share-tools pull-left">
            <ul>
              <li>
                <a href="https://www.facebook.com/sharer.php?u=http://dalenguyen.me/blog/{{$post->slug}}" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Facebook">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li><a href="https://twitter.com/share?url=http://dalenguyen.me/blog/{{$post->slug}}" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Twitter"><i class="fa fa-twitter"></i></a></li>
              <li><a href="https://pinterest.com/pin/create/button/?source_url=http://dalenguyen.me/blog/{{$post->slug}}" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Pinterest"><i class="fa fa-pinterest"></i></a></li>
              <li><a href="https://plus.google.com/share?url=http://dalenguyen.me/blog/{{$post->slug}}" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Google Plus"><i class="fa fa-google-plus"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</article>

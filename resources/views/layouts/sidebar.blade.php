<div id="sidebar" class="col-sm-3 offset-sm-1 blog-sidebar">
  <sidebar></sidebar>
  <div class="sidebar-module">
    <h4>Archives</h4>
    <ol class="list-unstyled">
      @foreach ($archives as $stats)
        <li>
          <a href="/blog/?month={{$stats['month']}}&year={{$stats['year']}}">{{$stats['month']}} {{$stats['year']}}</a>
        </li>
      @endforeach
    </ol>
  </div>
</div>

<!-- blog/sidebar.blade.php -->
<div class="sidebar-module search hidden-xs-down">
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

<div class="sidebar-module archive">
  <h4>Archives</h4>
  <ol class="list-unstyled">
    @foreach ($archives as $stats)
      <li>
        <a href="/blog/?month={{$stats['month']}}&year={{$stats['year']}}">{{$stats['month']}} {{$stats['year']}}</a>
      </li>
    @endforeach
  </ol>
</div>

<div class="category-module">
  <h4>Categories</h4>
  <ol class="list-unstyled">
    @foreach ($categories as $category)
      <li>
        <a href="/blog/?category={{$category}}">{{$category}}</a>
      </li>
    @endforeach
  </ol>
</div>

<div class="category-module">
  <h4>Tags</h4>
  <p>
    @foreach ($tags as $tag)
      <span>
        <a href="/blog/?tag={{$tag}}">{{$tag}}</a>
      </span>
    @endforeach
  </p>
</div>

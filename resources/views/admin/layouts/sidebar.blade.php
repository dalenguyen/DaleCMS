<div id="sidebar" class="sidebar responsive ace-save-state">
  <script type="text/javascript">
    try{ace.settings.loadState('sidebar')}catch(e){}
  </script>

  <div class="sidebar-shortcuts" id="sidebar-shortcuts">
    <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
      <button class="btn btn-success">
        <i class="ace-icon fa fa-signal"></i>
      </button>

      <button class="btn btn-info">
        <i class="ace-icon fa fa-pencil"></i>
      </button>

      <button class="btn btn-warning">
        <i class="ace-icon fa fa-users"></i>
      </button>

      <button class="btn btn-danger">
        <i class="ace-icon fa fa-cogs"></i>
      </button>
    </div>

    <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
      <span class="btn btn-success"></span>

      <span class="btn btn-info"></span>

      <span class="btn btn-warning"></span>

      <span class="btn btn-danger"></span>
    </div>
  </div><!-- /.sidebar-shortcuts -->

  <ul class="nav nav-list">
    <li class="active">
      <a href="/admin">
        <i class="menu-icon fa fa-tachometer"></i>
        <span class="menu-text"> Dashboard </span>
      </a>

      <b class="arrow"></b>
    </li>

    <li class="">
      <a href="#" class="dropdown-toggle">
        <i class="menu-icon fa fa-desktop"></i>
        <span class="menu-text">
          Posts
        </span>

        <b class="arrow fa fa-angle-down"></b>
      </a>

      <b class="arrow"></b>

      <ul class="submenu">
        <li class="">
          <a href="/admin/post">
            <i class="menu-icon fa fa-caret-right"></i>
            All Posts
          </a>
        </li>

        <li class="">
          <a href="/admin/post/create">
            <i class="menu-icon fa fa-leaf green"></i>
            Add New
          </a>
        </li>

        <li class="">
          <a href="/admin/category">
            <i class="menu-icon fa fa-caret-right"></i>
            Categories
          </a>
        </li>
      </ul>
    </li> <!-- Posts  -->

    <li class="">
      <a href="#" class="dropdown-toggle">
        <i class="menu-icon fa fa-tag"></i>
        <span class="menu-text"> Pages </span>

        <b class="arrow fa fa-angle-down"></b>
      </a>

      <b class="arrow"></b>

      <ul class="submenu">
        <li class="">
          <a href="profile.html">
            <i class="menu-icon fa fa-caret-right"></i>
            All Pages
          </a>

          <b class="arrow"></b>
        </li>

        <li class="">
          <a href="profile.html">
            <i class="menu-icon fa fa-caret-right"></i>
            Add New
          </a>

          <b class="arrow"></b>
        </li>
      </ul>
    </li>

    <li class="">
      <a href="#" class="dropdown-toggle">
        <i class="menu-icon fa fa-tag"></i>
        <span class="menu-text"> Media </span>

        <b class="arrow fa fa-angle-down"></b>
      </a>

      <b class="arrow"></b>

      <ul class="submenu">
        <li class="">
          <a href="/laravel-filemanager?type=Images">
            <i class="menu-icon fa fa-caret-right"></i>
            Library
          </a>

          <b class="arrow"></b>
        </li>
      </ul>
    </li>

    <li class="">
      <a href="#" class="dropdown-toggle">
        <i class="menu-icon fa fa-file-o"></i>

        <span class="menu-text">
          Users

          <span class="badge badge-primary">{{count(App\User::get())}}</span>
        </span>

        <b class="arrow fa fa-angle-down"></b>
      </a>

      <b class="arrow"></b>

      <ul class="submenu">
        <li class="">
          <a href="/admin/user">
            <i class="menu-icon fa fa-caret-right"></i>
            All Users
          </a>

          <b class="arrow"></b>
        </li>
        <li class="">
          <a href="/admin/user/create">
            <i class="menu-icon fa fa-caret-right"></i>
            Add New
          </a>

          <b class="arrow"></b>
        </li>
        <li class="">
          <a href="/admin/user/{{Auth::user()->id}}/edit">
            <i class="menu-icon fa fa-caret-right"></i>
            Your Profile
          </a>

          <b class="arrow"></b>
        </li>
      </ul>
    </li>
  </ul><!-- /.nav-list -->

  <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
    <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
  </div>
</div>

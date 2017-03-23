
  <script type="text/javascript">
    try{ace.settings.loadState('main-container')}catch(e){}
  </script>

  @include('admin.layouts.sidebar')

  <div class="main-content">
    <div class="main-content-inner">
      @include('admin.layouts.breadcrumb')

      <div class="page-content">
        @include('admin.layouts.pagesettings')

        @yield('content')


      </div><!-- /.page-content -->
    </div>
  </div><!-- /.main-content -->

@include('admin.layouts.footer')

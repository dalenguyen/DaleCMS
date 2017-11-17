@extends('admin.layouts.master')

@section('header_script')
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
@endsection

@section('content')
  <div class="page-header">
    <h1>
      Add New Post
    </h1>
  </div><!-- /.page-header -->

  <div class="row">
    <div class="col-xs-12">
      <!-- PAGE CONTENT BEGINS -->
      <form method="post" action="/admin/post">
          @include('admin.posts._form', [
            'title' => '',
            'body'  => '',
            'categorySelectedArray' => [],
            'tagSelectedArray' => [],
            'thumbnail' => ''
          ])
      </form>
      <!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
  </div><!-- /.row -->
@endsection

@section('scripts')
  <script>
     var route_prefix = "{{ url(config('lfm.prefix')) }}";
     console.log(route_prefix);
  </script>

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>

    <!-- TinyMCE init -->
  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>
    var editor_config = {
      path_absolute : "",
      selector: "textarea[name=body]",
      plugins: [
        "code",
        "image link"
      ],
      relative_urls: false,
      height: 400,
      file_browser_callback : function(field_name, url, type, win) {
        var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
        var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

        var cmsURL = editor_config.path_absolute + route_prefix + '?field_name=' + field_name;
        if (type == 'image') {
          cmsURL = cmsURL + "&type=Images";
        } else {
          cmsURL = cmsURL + "&type=Files";
        }

        tinyMCE.activeEditor.windowManager.open({
          file : cmsURL,
          title : 'Filemanager',
          width : x * 0.8,
          height : y * 0.8,
          resizable : "yes",
          close_previous : "no"
        });
      }
    };

    tinymce.init(editor_config);
  </script>

  <script>
    {!! \File::get(base_path('vendor/unisharp/laravel-filemanager/public/js/lfm.js')) !!}
  </script>
  <script>
    $('#lfm').filemanager('image', {prefix: route_prefix});
  </script>
@endsection

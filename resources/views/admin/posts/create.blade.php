@extends('admin.layouts.master')

@section('header_script')
  <link rel="shortcut icon" type="image/png" href="{{ asset('/public/vendor/laravel-filemanager/img/folder.png') }}">
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
        {{ csrf_field() }}
        <div class="form-group">
          <label for="title">Title:</label>
          <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <div class="form-group">
          <label for="body">Body:</label>
          <textarea name="body" id="body" class="form-control" required>
              {!! old('content', "Enter your text") !!}
          </textarea>
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-primary">Publish</button>
        </div>

        @include('partials.errors')

          <div class="input-group">
            <span class="input-group-btn">
              <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                <i class="fa fa-picture-o"></i> Choose
              </a>
            </span>
            <input id="thumbnail" class="form-control" type="text" name="filepath">
          </div>
          <img id="holder" style="margin-top:15px;max-height:100px;">
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
      height: 200,
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

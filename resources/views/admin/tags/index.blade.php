{{-- admin/tags/index.blade.php --}}

@extends('admin.layouts.master')

@section('content')
  <div class="row">
    <h1>List of Tags</h1>

    <div class="col-xs-4">
      <h2>Add New Tag</h2>
      <form method="post" action="/admin/tag">
        {{ csrf_field() }}

        @include('admin.tags._form', [
          'title' => '',
          'description' => null,
          'tag'  => false
        ])
      </form>
    </div>
    {{-- Show tags --}}
    <div class="col-xs-8">
      <h2>Table of Tags</h2>
      <table id="dynamic-table" class="table table-striped table-bordered table-hover">
        <thead>
          <tr>
            <th class="center">
              <label class="pos-rel">
                <input type="checkbox" class="ace" />
                <span class="lbl"></span>
              </label>
            </th>
            <th>Title</th>
            <th>Slug</th>
            <th>Description</th>
            <th>Count</th>
          </tr>
        </thead>

        <tbody>
          @foreach ($tags as $tag)
            <tr>
              <td class="center">
                <label class="pos-rel">
                  <input type="checkbox" class="ace" />
                  <span class="lbl"></span>
                </label>
              </td>

              <td>
                <a href="javascript:void(0)" onclick="editTag({{$tag->id}})" target="_blank">{{$tag->name}}</a>
              </td>
              <td>{{$tag->slug}}</td>
              <td>{{$tag->description}}</td>
              <td></td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
	</div>

  {{-- Edit Tag Modal --}}
  <div id = "myModal" class = "modal fade" tabindex = "-1" role = "dialog" style = "display: none;">
    <div class = "modal-dialog">
        <div class = "modal-content">
        </div>
    </div>
  </div>
@endsection

@section('scripts')
  <script type="text/javascript">
  // Edit a Organization
    function editTag(id) {
        var url = '/admin/tag/0/edit';
        url = url.replace(0, id);
        $.ajax({
            url: url,
            type: "GET",
            success: function (content) {
                $(".modal-content").html(content);
                $(' #myModal').modal('show');
            },
            error: function (e) {
            }
        });
    }

    // Delete post function
    function deleteTag() {
            document.deleteForm.submit();
    }
  </script>
@endsection

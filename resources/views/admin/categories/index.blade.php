{{-- admin/categories/index.blade.php --}}

@extends('admin.layouts.master')

@section('content')
  <div class="row">
    <h1>List of Categories</h1>

    <div class="col-xs-4">
      <h2>Add New Category</h2>
      <form method="post" action="/admin/category">
        {{ csrf_field() }}

        @include('admin.categories._form', [
          'title' => '',
          'description' => null,
          'category'  => false
        ])
      </form>
    </div>
    {{-- Show categories --}}
    <div class="col-xs-8">
      <h2>Table of Categories</h2>
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
          @foreach ($categories as $category)
            <tr>
              <td class="center">
                <label class="pos-rel">
                  <input type="checkbox" class="ace" />
                  <span class="lbl"></span>
                </label>
              </td>

              <td>
                <a href="javascript:void(0)" onclick="editCategory({{$category->id}})" target="_blank">{{$category->name}}</a>
              </td>
              <td>{{$category->slug}}</td>
              <td>{{$category->description}}</td>
              <td></td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
	</div>

  {{-- Edit Category Modal --}}
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
    function editCategory(id) {
        var url = '/admin/category/0/edit';
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
    function deleteCategory() {
            document.deleteForm.submit();
    }
  </script>
@endsection

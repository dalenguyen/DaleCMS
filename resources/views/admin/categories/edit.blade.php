<div style="padding: 30px;">
    <h1>Edit: {{$category->name}}</h1>
    <hr style="width: 100%; color: black; height: 1px; background-color:black;"/>
    <form method="post" action="/admin/category/{{$category->id}}">
        <input type="hidden" name="_method" value="PUT">
        {{ csrf_field() }}
        @include('admin.categories._form', [
          'title' => $category->name,
          'description' => $category->description
        ])
    </form>

  {{--Delete Category Form    --}}
  <form style="display: none;" action="{{ url('/admin/category/'.$category->id) }}" method="POST" name="deleteForm">
      {!! csrf_field() !!}
      {!! method_field('DELETE') !!}

      <button type="submit" class="btn btn-danger">
          <i class="fa fa-btn fa-trash"></i> Delete
      </button>
  </form> <!-- Delete Form -->
</div>

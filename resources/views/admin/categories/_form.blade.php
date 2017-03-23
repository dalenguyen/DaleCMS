{{-- admin/categories/_form.blade.php --}}

<div class="form-group">
  <label for="name">Name:</label>
  <input type="text" class="form-control" id="name" name="name" required value="{{$title}}">
  <p>The name is how it appears on your site.</p>
</div>

<div class="form-group">
  <label for="description">Description:</label>
  <textarea class="form-control" id="description" name="description">
    {{$description}}
    </textarea>
  <p>The description is not prominent by default; however, some themes may show it.</p>
</div>

<div class="form-group">
  <button type="submit" class="btn btn-primary">Save</button>
  @if ($category)
    <a href="javascript: deleteCategory()"><div class="btn btn-danger"><i class="fa fa-btn fa-trash"></i> Delete</div></a>
  @endif
</div>

@include('partials.errors')

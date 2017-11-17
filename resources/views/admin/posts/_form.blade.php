{{-- admin/posts/_form.blade.php --}}

{{ csrf_field() }}

<div class="col-xs-9">

  <div class="form-group">
    <label for="title">Title:</label>
    <input type="text" class="form-control" id="title" name="title" required value="{{$title}}">
  </div>

  <div class="form-group">
    <label for="body">Body:</label>
    <textarea name="body" id="body" class="form-control" required>
        {!! $body !!}
    </textarea>
  </div>

  @include('partials.errors')
</div>

<div class="col-xs-3">

  <div class="form-group">
    <label for="category">Category:</label>
    <select id="categories" name="categories[]" multiple class="selectpicker" data-live-search="true">
      @foreach ($categories as $key => $value)
        <option value="{{$key}}" {{ in_array($key, $categorySelectedArray) ? "selected" : ""}}>{{$value}}</option>
      @endforeach
    </select>
  </div>

  <div class="form-group">
    <label for="tag">Tag:</label>
    <select id="tags" name="tags[]" multiple class="selectpicker" data-live-search="true">
      @foreach ($tags as $key => $value)
        <option value="{{$key}}" {{ in_array($key, $tagSelectedArray) ? "selected" : ""}}>{{$value}}</option>
      @endforeach
    </select>
  </div>

  <div class="input-group">
    <span class="input-group-btn">
      <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
        <i class="fa fa-picture-o"></i> Featured Image
      </a>
    </span>
    <input id="thumbnail" class="form-control" type="text" name="thumbnail">
  </div>

  <img id="holder" style="margin-top:15px;max-height:100px;" src="{{$thumbnail}}">
  <br>

  <div class="form-group">
    <button type="submit" class="btn btn-primary"><i class="fa fa-btn fa-pencil"></i> Save</button>
    @if (! empty($post['id']))
      <a href="javascript: deletePost()"><div class="btn btn-danger"><i class="fa fa-btn fa-trash"></i> Delete</div></a>
    @endif
  </div>

</div>

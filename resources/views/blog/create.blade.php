{{-- blog/create.blade.php --}}

@extends('layouts.master')

@section('content')
  <div class="col-sm-8">
    <h2>Publish a Post</h2>
    <hr>

    <form method="post" action="/blog">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" class="form-control" id="title" name="title" required>
      </div>

      <div class="form-group">
        <label for="body">Body:</label>
        <textarea name="body" id="body" class="form-control" required></textarea>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>

      @include('partials.errors')

    </form>

  </div>



@endsection

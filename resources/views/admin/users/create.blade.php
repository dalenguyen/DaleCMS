@extends('admin.layouts.master')

@section('header_script')
  <!-- Latest compiled and minified CSS -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css"> -->
@endsection

@section('content')
  <div class="page-header">
    <h1>
      Add New User
    </h1>
  </div><!-- /.page-header -->

  <div class="row">
    <div class="col-xs-8">
      <!-- PAGE CONTENT BEGINS -->
      <form method="post" action="/admin/user">
          @include('admin.users._form', [
            'user'  => false,
            'button'  => 'Create'
          ])
      </form>
      <!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
  </div><!-- /.row -->
@endsection

@section('scripts')
  <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/js/bootstrap-select.min.js"></script> -->
@endsection

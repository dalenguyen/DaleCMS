@extends('admin.layouts.master')

@section('content')
  <div class="page-header">
    <h1>
      Dashboard
      <small>
        <i class="ace-icon fa fa-angle-double-right"></i>
        Overview &amp; Stats
      </small>
    </h1>
  </div><!-- /.page-header -->

  <div class="row">
    <div class="col-xs-12">
      <!-- PAGE CONTENT BEGINS -->
      <div class="alert alert-block alert-success">
        <button type="button" class="close" data-dismiss="alert">
          <i class="ace-icon fa fa-times"></i>
        </button>

        <i class="ace-icon fa fa-check green"></i>

        Welcome to
        <strong class="green">
          DaleCMS
          <small>(V1.2.0)</small>
        </strong> Framework
      </div>
      <!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
  </div><!-- /.row -->
@endsection

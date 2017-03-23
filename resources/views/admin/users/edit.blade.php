@extends('admin.layouts.master')

@section('header_script')
  <!-- Latest compiled and minified CSS -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css"> -->
@endsection

@section('content')
  <div class="page-header">
    <h1>
      Edit User: {{$user->getFullName()}}
    </h1>
  </div><!-- /.page-header -->

  <div class="row">
    <div class="col-xs-12">
      <!-- PAGE CONTENT BEGINS -->
      <form method="post" action="/admin/user/{{$user->id}}">
        <input type="hidden" name="_method" value="PUT">
        @include('admin.users._form', [
          'button'  => 'Update'
        ])
      </form>

      <!-- Delete form -->

      {{--Delete User Form    --}}
    <form style="display: none;" action="{{ url('/admin/user/'.$user->id) }}" method="POST" name="deleteForm">
        {!! csrf_field() !!}
        {!! method_field('DELETE') !!}

        <button type="submit" class="btn btn-danger">
            <i class="fa fa-btn fa-trash"></i> Delete
        </button>
    </form> <!-- Delete Form -->
      <!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
  </div><!-- /.row -->
@endsection

@section('scripts')
  <script>
      // Delete user function
      function deleteUser() {
            document.deleteForm.submit();
      }

      // Change password
      $('#password').hide();
      $('#password').attr('disabled', true);

      $('#changePassword').click(function(){
        $('#password').toggle();

        if($('#password').css('display') === "none"){
          $('#password').attr('disabled', true);
        }else{
          $('#password').attr('disabled', false);
        }
      })
  </script>
@endsection

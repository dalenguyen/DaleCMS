{{-- admin/posts/index.blade.php --}}

@extends('admin.layouts.master')

@section('content')
  <div class="row">
    <div class="col-xs-12">
      <h3 class="header smaller lighter blue">All Users</h3>

      <div class="clearfix">
        <div class="pull-right tableTools-container"></div>
      </div>
      <div class="table-header">
        List of Users <a href="/admin/user/create" class="label label-sm label-success">Add New</a>
      </div>

      <!-- div.table-responsive -->

      <!-- div.dataTables_borderWrap -->
      <div>
        <table id="dynamic-table" class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th class="center">
                <label class="pos-rel">
                  <input type="checkbox" class="ace" />
                  <span class="lbl"></span>
                </label>
              </th>
              <th>Username</th>
              <th>Name</th>
              <th>Email</th>
              <th>Role</th>
              <th>Posts</th>
              <th># Of Logins</th>
              <th>Last Login Time</th>
            </tr>
          </thead>

          <tbody>
            @foreach ($users as $user)
              <tr>
                <td class="center">
                  <label class="pos-rel">
                    <input type="checkbox" class="ace" />
                    <span class="lbl"></span>
                  </label>
                </td>

                <td>
                  <a href="/admin/user/{{$user->id}}/edit" target="_blank">{{$user->username}}</a>
                </td>
                <td>{{$user->getFullName()}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->getRole()}}</td>
                <td>{{count($user->posts)}}</td>
                <td>#</td>
                <td></td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

@endsection

@section('scripts')

  <script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='http://ace.jeka.by/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
	</script>


@endsection

{{ csrf_field() }}

<div class="form-group col-md-6 col-lg-6 col-sm-6">
    <label for="first_name" class="control-label">First Name</label>
    <input id="first_name" type="text" class="form-control" name="first_name" value="{{ $user ? $user->first_name : "" }}" required autofocus>
</div>

<div class="form-group col-md-6 col-log-6 col-sm-6">
    <label for="last_name" class="control-label">Last Name</label>
    <input id="last_name" type="text" class="form-control" name="last_name" value="{{ $user ? $user->last_name : "" }}" required autofocus>
</div>

<div class="form-group col-md-6 col-lg-6 col-sm-6">
    <label for="username" class="control-label">User Name</label>
    <input id="username" type="text" class="form-control" name="username" value="{{ $user ? $user->username : "" }}" required autofocus>
</div>

<div class="form-group col-md-6 col-lg-6 col-sm-6">
    <label for="email" class="control-label">E-Mail Address</label>
    <input id="email" type="email" class="form-control" name="email" value="{{ $user ? $user->email : "" }}" required>
</div>

<div class="form-group col-md-6 col-lg-6 col-sm-6">
  <label for="role" class="control-label">Role</label>
  <div class="form-group">
    <select class="form-group" id="role" name="role" class="selectpicker">
      <option value="Subscriber">Subscriber</option>
      <option value="Blogger" {{ $user ? ($user->is_blogger ? "selected" : "") : ""}}>Blogger</option>
      <option value="Admin" {{ $user ? ($user->is_admin ? "selected" : "") : ""}}>Admin</option>
    </select>
  </div>
</div>

<div class="form-group col-md-6 col-lg-6 col-sm-6">
  @if($user)
    <a class="btn btn-default" id="changePassword">Change Password</a>
  @else
    <label for="password" class="control-label">Password</label>
  @endif
    <input id="password" type="password" class="form-control" name="password" required>
</div>

<div class="form-group col-sm-12">
        <button type="submit" class="btn btn-primary">
            <i class="fa fa-btn fa-pencil"></i> {{$button}}
        </button>
        @if ($user)
          <a href="javascript: deleteUser()"><div class="btn btn-danger"><i class="fa fa-btn fa-trash"></i> Delete</div></a>
        @endif
</div>

@include('partials.errors')

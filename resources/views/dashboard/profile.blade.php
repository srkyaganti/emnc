@extends('layouts.dashboard')

@section('title')
Profile
@endsection

@section('content-header')
<h1>
	Profile
</h1>
@endsection

@section('content')
		<div class="row">
		<div class="col-lg-10 col-lg-offset-1">
			<div class="box box-primary">
	            <div class="box-header with-border">
	              <h3 class="box-title">Update Profile</h3>
				  <a href="{{ url('signout-all') }}" class="btn btn-danger pull-right">SignOut of all devices</a>
			    </div>
	            <!-- /.box-header -->
	            <div class="box-body">
	              <form class="form-horizontal" action="{{ url('updateprofile') }}" method="POST">
	              		{{ csrf_field() }}
		              <div class="form-group">
		                <label for="inputEmail" class="col-sm-2 control-label">Email</label>

		                <div class="col-sm-10">
		                  <input type="email" class="form-control" name="email" id="inputEmail" value="{{$user->email}}" disabled>
		                </div>
		              </div>
		              
		              <div class="form-group">
						<label for="inputName" class="col-sm-2 control-label">Organization</label>

		                <div class="col-sm-10">
		                  <input type="text" class="form-control" name="name" id="inputName" value="{{$user->organization}}" required>
		                </div>
		              </div>
		              
		              <div class="form-group">
		                <label for="inputMobile" class="col-sm-2 control-label">Mobile</label>

		                <div class="col-sm-10">
		                  <input type="text" class="form-control" id="inputMobile" name="mobile" value="{{$user->mobile}}" minlength="10" maxlength="10" required>
		                </div>
		              </div>

		              <div class="form-group">
		                <label for="inputExperience" class="col-sm-2 control-label">Address</label>

		                <div class="col-sm-10">
		                  <textarea class="form-control" id="inputExperience" name="address" required> {{ $user->address }}</textarea>
		                </div>
		              </div>
		              
		              <div class="form-group">
		                <div class="col-sm-offset-2 col-sm-10">
		                  <button type="submit" class="btn btn-primary">Update Profile</button>
		                </div>
		              </div>
		            </form>
	            </div>
	            <!-- /.box-body -->
          	</div>
	          <!-- /.box -->
		</div>
	</div>

	<div class="row">
		<div class="col-lg-10 col-lg-offset-1">
			<div class="box box-primary">
	            <div class="box-header with-border">
	              <h3 class="box-title">Update Password</h3>
	            </div>
	            <!-- /.box-header -->
	            <div class="box-body">
	            	<p style="color:red">*Password must contain atleast 8 character</p>
	              <form class="form-horizontal" action="{{ url('updatepassword') }}" method="POST"> 
	              	{{ csrf_field() }}
              		<div class="form-group">
		                <label for="old" class="col-sm-2 control-label">Current Password</label>

		                <div class="col-sm-10">
		                  <input type="password" class="form-control" id="old" name="old_password" required>
		                </div>
		              </div>

		              <div class="form-group">
		              	<label for="new" class="col-sm-2 control-label">New Password</label>

		                <div class="col-sm-10">
		                  <input type="password" class="form-control" id="new" name="password" required>
		                </div>
		              </div>

		              <div class="form-group">
		                <label for="newconfirm" class="col-sm-2 control-label">Password Confirmation</label>

		                <div class="col-sm-10">
		                  <input type="password" class="form-control" id="newconfirm" name="password_confirmation" required>
		                </div>
		              </div>

		              <div class="form-group">
		                <div class="col-sm-offset-2 col-sm-10">
		                  <button type="submit" class="btn btn-primary">Update Password</button>
		                </div>
		              </div>
		            </form>
	            </div>
	            <!-- /.box-body -->
          	</div>
	          <!-- /.box -->
		</div>
	</div>
@endsection
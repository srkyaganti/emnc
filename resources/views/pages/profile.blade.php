@extends('layouts.dashboard')

@section('title')
Profile
@endsection

@section('content-header')
<h1>
	{{ $user->organization }}
</h1>
@endsection

@section('content')
		<div class="row">
		<div class="col-lg-10 col-lg-offset-1">
			<div class="box box-success">
	            <div class="box-header with-border">
	              <h3 class="box-title">Profile</h3>
				</div>
	            <!-- /.box-header -->
	            <div class="box-body">
	              <form class="form-horizontal">
	              	<div class="form-group">
		                <label class="col-sm-2 control-label">Email</label>

		                <div class="col-sm-10">
		                	<p class="form-control">{{ $user->email }}</p>
		                </div>
		              </div>
		              
		              <div class="form-group">
						<label class="col-sm-2 control-label">Organization</label>

		                <div class="col-sm-10">
		                	<p class="form-control">{{ $user->organization }}</p>
		                </div>
		              </div>
		              
		              <div class="form-group">
		                <label class="col-sm-2 control-label">Mobile</label>

		                <div class="col-sm-10">
		                	<p class="form-control"> {{ $user->mobile }} </p>
		                </div>
		              </div>

		              <div class="form-group">
		                <label class="col-sm-2 control-label">Address</label>

		                <div class="col-sm-10">
		                	<p class="form-control"> {{ $user->address }} </p>
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
	  <div class="box box-success">
	    <div class="box-header">
	      <h3 class="box-title">Devices</h3>
	      <a href="#" class="btn btn-primary pull-right">Add devices</a>
	    </div>
	    <!-- /.box-header -->
	    <div class="box-body table-responsive no-padding">
	      <table class="table table-hover">
	      	<thead>
	      		<tr>
	      		<th>Device ID</th>
	        	<th>Name</th>
	        	<th>Status</th>
	        	<th>Action</th>
		        </tr>	
	      	</thead>
	        <tbody>

	        	@foreach ($devices as $device)
					<tr>
						<td>{{ $device->device_id }}</td>
						<td>{{ $device->name }}</td>
						<td>
							@if($device->status)
								ON
							@else
								OFF
							@endif
						</td>
						<td><a href="" class="btn btn-danger">Remove</a></td>
					</tr>
				@endforeach
	        </tbody>
		  </table>
	    </div>
	  </div>
	</div>
	</div>
@endsection
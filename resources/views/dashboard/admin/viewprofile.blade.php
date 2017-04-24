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
	      <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#addDevices">Add devices</button>
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
						<td>
							<form action="{{ url('remove-device') }}" method="POST">
									{{ csrf_field() }}
									<input type="hidden" name="id" value="{{ $device->id }}">
								<input type="submit" value="Remove" class="btn btn-danger">
							</form>
						</td>
					</tr>
				@endforeach
	        </tbody>
		  </table>
	    </div>
	  </div>
	</div>
	</div>
@endsection

@section('modals')
<div id="addDevices" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Devices to {{ $user->organization }}</h4>
      </div>
      <div class="modal-body">
        <form action="{{ url('add-devices') }}" method="POST">
        	{{ csrf_field() }}
        	<input type="hidden" name="email" value="{{$user->email}}">
        	<div class="form-group">
			    <label for="d1">Device Id 1:</label>
			    <input type="text" class="form-control" id="d1" name="d1">
		  	</div>
		  	<div class="form-group">
			    <label for="d2">Device Id 2:</label>
			    <input type="text" class="form-control" id="d2" name="d2">
		  	</div>
		  	<div class="form-group">
			    <label for="d3">Device Id 3:</label>
			    <input type="text" class="form-control" id="d3" name="d3">
		  	</div>
		  	<div class="form-group">
			    <label for="d4">Device Id 4:</label>
			    <input type="text" class="form-control" id="d4" name="d4">
		  	</div>
		  	<div class="form-group">
			    <label for="d5">Device Id 5:</label>
			    <input type="text" class="form-control" id="d5" name="d5">
		  	</div>
		  	<div class="form-group">
		  		<input type="submit" value="Add Devices" class="btn btn-success btn-block">
		  	</div>	
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
@endsection
<div class="row">
	<div class="col-xs-12">
	  <div class="box">
	    <div class="box-header">
	      <h3 class="box-title">Users</h3>
	      <a href="#" data-toggle="modal" data-target="#newUser"><i class="fa fa-2x fa-user-plus pull-right" aria-hidden="true"></i></a>
		</div>
	    <!-- /.box-header -->
	    <div class="box-body table-responsive no-padding">
	      <table class="table table-hover">
	      	<thead>
	      		<tr>
	      		<th>Email</th>
	        	<th>Name</th>
				<th>Contact #</th>
				<th>Location</th>
				<th>Sessions</th>
				<th>Last logged</th>
				<th>Action</th>
		        </tr>	
	      	</thead>
	        <tbody>

	        	@foreach ($users as $user)

	        		
					<tr>
						<td><a href="{{ url('view')}}/{{ $user->email }}">{{ $user->email }}</a></td>
						@if (!Activation::completed($user))
							<td>Inactive</td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
							<td>
								<a href="#">Activate</a>
							</td>
						@else
							<td>{{ $user->organization }}</td>
							<td>{{ $user->mobile }}</td>
							<td>{{ $user->address }}</td>
							<td>{{ $user->persistences()->count() }}</td>
							<td>{{ Carbon\Carbon::parse($user->last_login)->diffForHumans() }}</td>
							<td> - </td>
						@endif
					</tr>
				@endforeach
	        </tbody>
		  </table>
	    </div>
	  </div>
	</div>
</div>
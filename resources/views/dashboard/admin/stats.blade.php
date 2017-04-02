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
	        <tr>
        	<th>Name</th>
			<th>Contact #</th>
			<th>Location</th>
			<th>Sessions</th>
			<th>Last logged</th>
			<th>Action</th>
	        </tr>
	      </table>
	    </div>
	  </div>
	</div>
</div>

<!--Modal to add User -->
<div id="newUser" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add User</h4>
      </div>
      <div class="modal-body">
      	<form class="form-horizontal" action="" method="POST">
		  <div class="form-group">
		    <label class="control-label col-sm-2" for="email">Email:</label>
		    <div class="col-sm-10">
		      <input type="email" class="form-control" id="email" placeholder="Enter email">
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" class="btn btn-success">Submit</button>
		    </div>
		  </div>
		</form>
      </div>
      <div class="modal-footer">
      	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
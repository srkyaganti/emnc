<div id="changeDeviceName" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <form action="{{ url('change-name') }}" method="POST">
          {{ csrf_field() }}
          <input type="hidden" id="deviceid" name="id">
          <div class="form-group">
            <label for="devicename">Device Name:</label>
            <input type="text" class="form-control" id="devicename" name="name" required>
          </div>
          <button type="submit" class="btn btn-success">Update Name</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
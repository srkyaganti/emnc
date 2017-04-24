<div class="row">
  <div class="col-md-10 col-md-offset-1">
  <div class="box box-success">
      <div class="box-header">
        <h3 class="box-title">Devices</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
          <thead>
            <tr>
            <th>Name</th>
            <th>Status</th>
            <th>Action</th>
            </tr> 
          </thead>
          <tbody>
            @foreach ($devices as $device)
              <tr>
                <td>
                  {{ $device->name }}
                  <a data-toggle="modal" data-name="{{ $device->name }}" data-id="{{ $device->id }}" href="#changeDeviceName" class="open-changeDeviceName fa fa-pencil-square-o">{{ ($device->name == "")?"add":"edit" }}</a></i></a>
                </td>
                
                <td>{{ ($device->status)?"ON":"OFF" }}</td>
                
                <td>
                  <form action="{{ url('toggle-power') }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $device->id }}">
                    <input type="submit" value="Turn {{ ($device->status)?'OFF':'ON' }}" class="btn btn-primary">
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
<div class="row">
  <div class="col-md-6">
    <!-- AREA CHART -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Area Chart</h3>
      </div>
      <div class="box-body">
        
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
  <!-- /.col (LEFT) -->
  <div class="col-md-6">
    <!-- DONUT CHART -->
    <div class="box box-danger">
      <div class="box-header with-border">
        <h3 class="box-title">Donut Chart</h3>
      </div>
      <div class="box-body">
        
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
  <!-- /.col (RIGHT) -->
</div>

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
<div class="row">
  <div class="col-md-6">
    <!-- AREA CHART -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Area Chart</h3>
      </div>
      <div class="box-body">
        <div class="chart">
          <canvas id="myChart" style="height:250px"></canvas>
        </div>
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
        <canvas id="pieChart" style="height:250px"></canvas>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
  <!-- /.col (RIGHT) -->
</div>

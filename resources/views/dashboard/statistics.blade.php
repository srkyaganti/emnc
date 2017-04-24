@extends('layouts.dashboard')

@section('title')
Statistics
@endsection

@section('content-header')
<h1>
	Statistics
</h1>
@endsection

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ url('css/daterangepicker.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/datepicker3.css') }}">
@endsection

@section('content')
<div class="row">
	<div class="col-md-6 col-md-offset-3">
      <div class="box box-danger">
        <div class="box-header">
          <h3 class="box-title">Date picker</h3>
        </div>
        <div class="box-body">
        <form action="{{ url('test') }}" method="GET" id="statisticsform">
        	{{ csrf_field() }}
        	<div class="form-group">
	            <label>Date and time range:</label>
				<div class="input-group">
	              <div class="input-group-addon">
	                <i class="fa fa-clock-o"></i>
	              </div>
	              <input type="text" name="daterange" class="form-control">
	            </div>
	        </div>
	        <div class="form-group">
	        	<input type="submit" value="Get Data" class="btn btn-success pull-right">
	        </div>
		</form>
		<div id="result"></div>
        </div>
      </div>
    </div>
</div>
@endsection


@section('scripts')
<script src="{{ url('js/moment.min.js') }}"></script>
<script src="{{ url('js/daterangepicker.js') }}"></script>
<script src="{{ url('js/bootstrap-datepicker.js') }}"></script>
<script type="text/javascript">
$(function() {
    $('input[name="daterange"]').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        locale: {
            format: 'DD/MM/YYYY h:mm A'
        }
    });
});

$( "#statisticsform" ).submit(function( e ) {
	e.preventDefault();
	var $form = $( this ),
    url = $form.attr( "action" );
 
 	$.get(url,$(this).serializeArray(),function(data){
 		$("#result").empty().append(data.content+"<br>");
 		$("#result").append(data.field);
 	});
});
</script>
@endsection

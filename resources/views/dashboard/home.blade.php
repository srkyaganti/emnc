@extends('layouts.dashboard')

@section('title')
Home
@endsection

@section('content-header')
	<h1>
    Dashboard
    <small>Control panel</small>
  </h1>
@endsection

@section('content')
	@if (Sentinel::check()->inRole('admin'))
		@include('dashboard.admin.stats')
	@else
		@include('dashboard.stats')
	@endif
@endsection

@section('scripts')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
@endsection
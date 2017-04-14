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

@if (Sentinel::check()->inRole('admin'))
	@section('content')
		@include('dashboard.admin.stats')
	@endsection
	@section('modals')
		@include('dashboard.admin.modal');
	@endsection
@else
	@section('content')
		@include('dashboard.stats')
	@endsection
	@section('scripts')
		@include('dashboard.charts')
	@endsection
@endif
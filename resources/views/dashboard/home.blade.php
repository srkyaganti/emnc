@extends('layouts.dashboard')

@section('title')
Home
@endsection

@section('content')
	@if (Sentinel::check()->inRole('admin'))
		@include('dashboard.admin.stats')
	@else
		@include('dashboard.stats')
	@endif
@endsection
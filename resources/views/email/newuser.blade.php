@extends('layouts.email')

@section('heading')
Welcome to Energy MNC
@endsection

@section('green_content')
	We are happy to meet you and hope you have an amazing time with us.
@endsection

@section('white_content')
	Please click the button below to register.
@endsection

@section('url')
{{ url('activate') }}/{{ $email }}/{{ $code }}
@endsection

@section('button','Sign Up')
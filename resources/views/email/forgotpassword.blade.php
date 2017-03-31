@extends('layouts.email')

@section('heading')
Energy MNC
@endsection

@section('green_content')
	You have sent a request to reset password for you account
@endsection

@section('white_content')
	Please click the button below to reset your password
@endsection

@section('url','{{ url()->full() }}/password/reset/{{ $code }}')

@section('button','Reset Password')
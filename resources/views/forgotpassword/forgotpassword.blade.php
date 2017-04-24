@extends('layouts.index')

@section('title')
Reset Password
@endsection

@section('header')
<div class="row">
    <div class="col-lg-6 col-lg-offset-3 col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h2>Password Reset</h2>
          </div>
          <div class="panel-body black-text">
            @include('partials.errors')
            @include('partials.success')
            <form class="form" role="form" method="POST" action="{{ url('password/reset') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group" align="left">
                    <label class="col-md-12">E-Mail Address :</label>
                    <div>
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                    </div>
                </div>

                <div class="form-group" align="right">
                    <div>
                        <button type="submit" class="btn btn-success">Reset password</button>
                    </div>
                </div>
            </form>
          </div>
        </div>
    </div>
</div>
@endsection

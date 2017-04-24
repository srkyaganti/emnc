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
            <form class="form-horizontal" role="form" method="POST" action="{{ url()->full() }}">
                {{ csrf_field() }}
                
                <div class="form-group">
                    <label class="col-md-4 control-label">E-Mail Address</label>
                    <div class="col-md-6">
                        <input type="email" class="form-control" name="email" required value="{{ $email }}" readonly>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">Password</label>
                    <div class="col-md-6">
                        <input type="password" class="form-control" name="password" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">Confirm Password</label>
                    <div class="col-md-6">
                        <input type="password" class="form-control" name="password_confirmation" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Reset Password
                        </button>
                    </div>
                </div>
            </form>
          </div>
        </div>
    </div>
</div>
@endsection
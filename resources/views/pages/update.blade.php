@extends('layouts.index')

@section('title')
Complete Registration
@endsection

@section('header')
<div class="row">
    <div class="col-lg-6 col-md-6 col-lg-offset-6">
        <div class="panel panel-default">
          <div class="panel-heading">
            <br>
            <h1 class="panel-title">Register</h1> 
            <br>
          </div>
          <div class="panel-body black-text">
            <p style="color:red">*Please don't refesh the page or go back</p>
            @include('partials.errors')
            <form class="form" role="form" method="POST" action="{{ url('registation-complete') }}">
                {{csrf_field()}}
                <input type="hidden" name="email" value="{{ $email }}">
                <div class="row">
                    <div class="form-group">
                        <label class="col-md-12">E-Mail Address</label>
                        <div class="col-md-12">
                            <input type="email" class="form-control" value="{{ $email }}">
                        </div>
                    </div>    
                </div>
                
                <div class="row">
                    <div class="form-group">
                        <label class="col-md-12 control-label">Password</label>
                        <div class="col-md-12">
                            <input type="password" class="form-control" name="password" required>
                        </div>
                    </div>    
                </div>
                
                <div class="row">
                    <div class="form-group">
                        <label class="col-md-12 control-label">Password Confirmation</label>
                        <div class="col-md-12">
                            <input type="password" class="form-control" name="password_confirmation" required>
                        </div>
                    </div>    
                </div>
                
                <div class="row">
                    <div class="form-group">
                        <label class="col-md-12 control-label">Organization Name</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="name" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <label class="col-md-12 control-label">Mobile</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="mobile" required minlength="10" maxlength="10">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <label class="col-md-12 control-label">Address</label>
                        <div class="col-md-12">
                            <textarea class="form-control" name="address" rows="6" required maxlength="500"></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <br>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>    
                </div>
                
            </form>
          </div>
        </div>
    </div>
</div>
@endsection
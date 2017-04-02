<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Energy MNC</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="{{ url('css/creative.min.css') }}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        textarea{resize: none;}
    </style>
</head>
<body id="page-top">
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand page-scroll" href="{{ url('/') }}">Energy MNC</a>
            </div>
        </div>
    </nav>
    
    <header>
        <div class="header-content">
            <div class="header-content-inner">
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
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <div class="row">
                                    <div class="form-group">
                                        <label class="col-md-12">E-Mail Address</label>
                                        <div class="col-md-12">
                                            <input type="email" class="form-control" name="email" value="{{ $email }}" disabled>
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
            </div>
        </div>
    </header>
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha256-/SIrNqv8h6QGKDuNoLGA4iret+kyesCkHGzVUUV0shc=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="{{ url('js/creative.min.js') }}"></script>
</body>
</html>

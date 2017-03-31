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

</head>
<body id="page-top">
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Energy MNC</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <br>
                            <h1 class="panel-title">Sign In</h1>
                            <br>
                          </div>
                          <div class="panel-body black-text">
                            @include('partials.errors')
                            @include('partials.success')
                            <form class="form" role="form" method="POST" action="{{ url('signin') }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <div class="form-group">
                                    <label class="col-md-12">E-Mail Address</label>
                                    <div class="col-md-12">
                                        <input type="email" class="form-control validate" name="email" value="{{ old('email') }}" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12 control-label">Password</label>
                                    <div class="col-md-12">
                                        <input type="password" class="form-control" name="password" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-10 col-md-offset-1">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember"> Remember Me
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary">Login</button>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="{{ url('password/reset') }}">Forgot Password?</a>
                                    </div>
                                </div>
                            </form>
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-m4-12">
                        <h1 id="homeHeading">Join the era of smart power management</h1>
                        <hr>
                        <p>Monitor and Manage power consumption with a click!</p>
                        <a href="#about" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">About Us</h2>
                    <hr class="light">
                    <p class="text-faded">"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>
                    <a href="#contact" class="page-scroll btn btn-default btn-xl sr-button">Get Started!</a>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Our Service</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-diamond text-primary sr-icons"></i>
                        <h3>Robust Service</h3>
                        <p class="text-muted">Lorem ipsum dolor sit amet, delectus definitiones ex cum. Elitr sanctus conclusionemque at vis. Quo id tation populo feugait, prompta meliore ad pri. Ea admodum repudiandae neglegentur vim.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-users text-primary sr-icons"></i>
                        <h3>24x7 Support</h3>
                        <p class="text-muted">Lorem ipsum dolor sit amet, delectus definitiones ex cum. Elitr sanctus conclusionemque at vis. Quo id tation populo feugait, prompta meliore ad pri. Ea admodum repudiandae neglegentur vim.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-newspaper-o text-primary sr-icons"></i>
                        <h3>Easy to Use</h3>
                        <p class="text-muted">Lorem ipsum dolor sit amet, delectus definitiones ex cum. Elitr sanctus conclusionemque at vis. Quo id tation populo feugait, prompta meliore ad pri. Ea admodum repudiandae neglegentur vim.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="no-padding">
        <div class="container-fluid">
            <div class="row no-gutter popup-gallery">
                <div class="col-lg-4 col-sm-6">
                    <div class="portfolio-box">
                        <img src="{{ url('img/index/4.jpg') }}" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Live power usage tracking
                                </div>
                                <div class="project-name">
                                    Real Time Monitoring
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="portfolio-box">
                        <img src="{{ url('img/index/5.jpg') }}" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Control devices with a click
                                </div>
                                <div class="project-name">
                                    Device Control
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="portfolio-box">
                        <img src="{{ url('img/index/4.jpg') }}" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Check your usage History
                                </div>
                                <div class="project-name">
                                    Statistics
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Let's Get In Touch!</h2>
                    <hr class="primary">
                    <ep>Ready to start your project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x sr-contact"></i>
                    <p>(+91) 898-559-1361<br>(+91) 944-061-1554</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p>srkyaganti@gmail.com<br>admin@emnc.com</p>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha256-/SIrNqv8h6QGKDuNoLGA4iret+kyesCkHGzVUUV0shc=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="{{ url('js/creative.min.js') }}"></script>
</body>
</html>

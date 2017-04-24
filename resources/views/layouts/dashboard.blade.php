<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> @yield('title') | Energy MNC</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="{{ url('css/dashboard/AdminLTE.min.css') }}">
  <link rel="stylesheet" href="{{ url('css/dashboard/skin-green.min.css') }}">
  <link rel="stylesheet" href="cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  @yield('styles')

</head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <a href="{{ url('/dashboard') }}" class="logo">
      <span class="logo-mini"><b>E</b>MNC</span>
      <span class="logo-lg"><b>Energy</b>MNC</span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li>
            <a href="{{ url('signout') }}">
              <i class="fa fa-sign-out" aria-hidden="true"></i>
              <span>Sign out</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <aside class="main-sidebar">
    <section class="sidebar">
      <ul class="sidebar-menu">
        <li class="treeview {!! Request::is('dashboard') ? 'active' : '' !!}" >
          <a href="{{ url('dashboard') }}">
            <i class="fa fa-dashboard"></i><span>Dashboard</span>
          </a>
        </li>
        <li class="treeview {!! Request::is('profile') ? 'active' : '' !!}">
          <a href="{{ url('profile') }}" > 
            <i class="fa fa-user-circle"></i>
            <span>Profile</span>
          </a>
        </li>
        @if(Sentinel::inRole('user'))
          <li class="treeview {!! Request::is('statistics') ? 'active' : '' !!}">
            <a href="{{ url('statistics') }}">
              <i class="fa fa-area-chart"></i>
              <span>Statistics</span>
            </a>
          </li>
        @endif
      </ul>
    </section>
  </aside>
  <div class="content-wrapper">
    <section class="content-header">
      @yield('content-header')
    </section>
    <section class="content">
      @include('partials.errors')
      @include('partials.success')
      @yield('content')        
    </section>
    @yield('modals')
  </div>
  <footer class="main-footer">
    <strong>Copyright &copy; {{ date('Y') }} Parna Solutions.</strong> All rights
    reserved.
  </footer>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="{{ url('js/dashboard/app.min.js') }}"></script>
<script src="{{ url('js/dashboard/demo.js') }}"></script>
<script src="http://cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
@yield('scripts')
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    <link rel="stylesheet" href="/css/font-awesome.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/css/_all-skins.min.css">

    <link rel="stylesheet" type="text/css" href="/css/toastr.min.css">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/toastr.min.js"></script>

    <!-- ChartJS 1.0.1 -->
    <script src="/js/Chart.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="/js/dashboard2.js"></script>
    <script src="/js/app2.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <style>
    .main-sidebar{
      margin-top: 22px;
      background: #222D32;
      padding-left: 10px;
      padding-right: 10px;
      position: fixed;
    }
    body{
      padding-top: 100px;
    }
    .content-header{
      margin-top: -50px;
    }
    </style>




</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guard('admin_user')->user())
                          @include('layouts.admin-dropdown')
                        @elseif(! Auth::guest())
                          @include('layouts.dropdown')
                        @else
                          <li><a href="{{ url('/') }}">Home</a></li>
                          <li><a href="{{ url('/login') }}">Login</a></li>
                          <li><a href="{{ url('/register') }}">Register</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    @if (Auth::guard('admin_user')->user())
      @include('layouts.admin-left-nav')
    @endif

    @yield('content')


    <!-- Scripts -->

    <script src="/js/app.js"></script>
    @include('layouts.notification')
</body>
</html>

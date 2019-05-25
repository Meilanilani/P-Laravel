<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<style>
.checked {
  color: orange;
}
</style>
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Ecommerce</title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <!-- Bootstrap 3.3.7 -->
      <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
      <!-- Ionicons -->
      <link rel="stylesheet" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css')}}">
      <!-- Theme style -->
      <link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css')}}">
      <!-- AdminLTE Skins. Choose a skin from the css/skins
           folder instead of downloading all of them to reduce the load. -->
      <link rel="stylesheet" href="{{ asset ('css/skins/_all-skins.min.css')}} ">
    <!-- datatable-->
      <link rel="stylesheet" href="{{ asset ('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">

      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

      <!-- Google Font -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <meta content="width=device-width, initial-scale=1.0" name="viewport">
          <meta content="" name="keywords">
          <meta content="" name="description">
          <!-- Main Stylesheet File --> 
          <link rel="stylesheet" type="text/css" href="{{asset('/css/style.css') }}">

          <!-- Favicons -->
          <link rel="icon" href="{{ asset('/img/favicon.png')}}" >
          <link rel="apple-touch-icon" href="{{ asset('/img/apple-touch-icon.png')}}">

          <!-- Google Fonts -->
          <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

          <!-- Bootstrap CSS File -->
          <link rel="stylesheet" href="{{asset('/lib/bootstrap/css/bootstrap.min.css')}}">

          <!-- Libraries CSS Files -->
          <link rel="stylesheet" href="{{ asset('/lib/font-awesome/css/font-awesome.min.css')}}">
          <link rel="stylesheet" href="{{asset('/lib/animate/animate.min.css')}}">
          <!--===============================================================================================-->
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
          <!--===============================================================================================-->
            <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
          <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="{{asset('/vendor/bootstrap/css/bootstrap.min.css')}}">
          <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="{{asset('/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
          <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="{{asset('/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
          <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="{{asset('/vendor/animate/animate.css')}}">
          <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="{{asset('/vendor/css-hamburgers/hamburgers.min.css')}}">
          <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="{{asset('/vendor/animsition/css/animsition.min.css')}}">
          <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="{{asset('/vendor/select2/select2.min.css')}}">
          <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="{{asset('/vendor/daterangepicker/daterangepicker.css')}}">
          <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="{{asset('/css/util.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('/css/main.css')}}">
          <!--===============================================================================================-->
</head>
<body class="hold-transition skin-blue layout-top-nav">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                    
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        @if (Auth::check())
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle fa fa-tags" href="#" id="navbarDropdown"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Product
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('admin.products.index')
                                }}">List</a>
                                    <a class="dropdown-item" href="{{ route('admin.products.create')
                                }}">Tambah</a>
                                </div>
                            </li>
                        
                        <!-- carts -->
                            <li class="nav-item">
                                <a href="{{ route('carts.index') }}">
                                @if (session('cart'))
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">{{ count(session('cart')) }}</span>
                                @else
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>Cart <span class="badge badge-pill badge-danger">0</span>
                                @endif
                                </a>
                            </li>
                        <!-- carts -->

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle fa fa-archive" aria-hidden="true" href="#" id="navbarDropdown"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Order
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('admin.orders.index')
                                }}">list</a>
                                </div>
                            </li>
                        @endif

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item " >
                           <a class="nav-link fa fa-sign-in" aria-hidden="true" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item " >
                                    <a class="nav-link fa fa-check-square-o " aria-hidden="true" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item fa fa-sign-out" aria-hidden="true" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>

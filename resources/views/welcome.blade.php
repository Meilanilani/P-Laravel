<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

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
            <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}"> 
            
            <script src="{{asset('/js/bootstrap.min.js')}}" ></script>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    <!--==========================Header============================-->
            <header id="header">
                <div class="container">
                    <div id="logo" class="pull-left">
                        <font face="Priscillia Script" color="White" size="7px">ByteBase.com</font>
                    </div>
                       <nav id="nav-menu-container">
                            <ul class="nav-menu">
                            @if (Route::has('login'))
                                    @auth
                                        <li><a href="{{ url('/home') }}">Home</a></li>
                                    @else
                                        <li><a href="{{ route('login') }}">Login</a></li>

                                        @if (Route::has('register'))
                                            <li><a href="{{ route('register') }}">Register</a></li>
                                        @endif
                                    @endauth
                                </li>
                                </div>
                            @endif
                            </ul>
                        </nav><!-- #nav-menu-container -->
                    </div>
            </header><!-- #header -->
                <!--==========================Hero Section============================-->
                <section id="hero">
                    <div class="hero-container">
                        <br/>
                            <a href="{{ route('products.index')}}" class="btn btn-lg btn-primary">Klik Disini Untuk Melihat Produk</a>
                                <ul class="nav-menu">
                </div>
            </div>
        </div>
    </body>
</html>

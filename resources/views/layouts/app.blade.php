<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
        #app-login{
            background:url('{{ "img/bg.jpg" }}') no-repeat center center fixed;
            background-size:cover;
        }

        #login_left_text{
            color:white;
        }

        .navbar-brand > .fa-code{
            color:green;
        }

        .navbar{
            background:#1d3b4f;
        }
    </style>
</head>
<?php
    if(Auth::user()){
        echo '<body id="app-layout">';
    }
    else{
        echo '<body id="app-login">';
    }
?>
    <nav class="navbar navbar-default navbar-static-top">
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
                <a style="color:white" class="navbar-brand" href="{{ url('/') }}">
                    <span class="fa fa-code"></span>
                    Codetech
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a style="color:white" href="{{ url('/home') }}">Home</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}" style="color:white">Login</a></li>
                        <li><a href="{{ url('/register') }}" style="color:white">Register</a></li>
                    @else
                        <li><a href="/articles/create" style="color:white">New Article</a></li>
                        <li><a href="/tutorials" style="color:white">Tutorials</a></li>
                        <li class="dropdown">
                            <a href="#" style="color:white" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
  <div class="container">
    <div class="row">
        <div class="col-md-5">
              @include('flash::message')
        </div>
    </div>
  </div>
    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    <!--<script src="js/bootstrap.min.js"></script>-->
    <script src="js/like.js"></script>
    <script src="{{ URL::asset('js/vendor/tinymce/js/tinymce/tinymce.min.js') }}"></script>
    <!--/*<script src="{{ URL::asset('js/vendor/tinymce/js/tinymce/themes/modern/theme.min.js' )}}"></script>*/-->
    <script src="{{ URL::asset('js/tinymce_config.js') }}"></script>
    <script>
        tinymce.init({
            selector: "textarea",
            height:"380",
            plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        });
    </script>
    
</body>
</html>

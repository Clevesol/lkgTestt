<!DOCTYPE html>
<html lan="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="_token" content="{!! csrf_token() !!}"/>
        
        <title> @yield('title')</title>

        <!-- Bootstrap -->
        <link href="{{ asset('bootstrap-3.3.6-dist/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"> </link>       
        <!--Style Sheet-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css"> </link>
        {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
        
        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
     
    </head>

     <body>
         
        <!--navigation bar**********************************************************************************-->
        <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
            <div class="container topnav">
                
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#id_nav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>                   
                </div>
                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/tour') }}" style="border: 0px ; padding: 2px 0px;"> 
                 {{--    <img alt="Brand" src="{{ asset('img/Icon.png') }}" > --}}
                </a>
                
                 <div class="collapse navbar-collapse" id="id_nav">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        @if (Auth::guest())
                            <li> <a href="#home">Home</a> </li>
                            <li> <a href="#about">About</a> </li>
                            <li> <a href="#services">Services</a> </li>
                            <li> <a href="#features">Features</a> </li>
                        @else                           
                            
                        @endif
                    </ul>
                    
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}"><span class="glyphicon glyphicon-log-in" style="padding: 0px 6px"></span> Login</a></li>
                            <li><a href="{{ url('/register') }}"><span class="glyphicon glyphicon-user" style="padding: 0px 6px"></span> Sign Up</a></li>
                        @else
                            <li><a href="{{ url('/tour') }}"><span class="glyphicon glyphicon-home" style="padding: 0px 6px"></span></a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <span class="glyphicon glyphicon-user" style="padding: 0px 6px"></span>
                                    {{ Auth::user()->firstname }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu"> 
                                    <li><a href="{{ url('/tour') }}"><span class="glyphicon glyphicon-home" style="padding: 0px 6px"></span>My Home</a></li>
                                    <li><a href="{{ url('/logout') }}"><i class="glyphicon glyphicon-log-out" style="padding: 0px 6px"></i>Logout</a></li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>      
            </div>                
        </nav>
        <div class="page-content">
            @yield('content')
        </div>
        <!-- Footer -->
        <footer class="page-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                    <center>
                        <p class="copyright text-muted small">Copyright &copy; Lanka-Guide 2017. All Rights Reserved</p>
                    </center>
                    </div>
                </div>
            </div>
        </footer>
    
        <!--Bootstrap Config->
        <!-jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{ asset('bootstrap-3.3.6-dist/js/jquery-2.1.4.min.js') }}" type="text/javascript"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset('bootstrap-3.3.6-dist/js/bootstrap.min.js') }}" type="text/javascript"></script>
        
        <script type="text/javascript">
            $.ajaxSetup({
             headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
            });
        </script>
       
    </body>
</html>
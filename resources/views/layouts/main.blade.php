<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Lanka Guide - Sri Lankan Tours </title>

    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="themes/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="assets/custom/css/flexslider.css" type="text/css" media="screen">      
    <link rel="stylesheet" href="assets/custom/css/parallax-slider.css" type="text/css">
    <link rel="stylesheet" href="assets/font-awesome-4.0.3/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="assets/custom/css/custom.css" type="text/css">
    <link rel="stylesheet" href="assets/custom/css/news.css" type="text/css">
    <!-- Custom styles for this template -->
    
    <link href="assets/custom/css/business-plate.css" rel="stylesheet">
    <link href="css/layouts/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/custom/ico/favicon.ico">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <header class="site-header">
        <div class="top">
            
                <div class="row">
                    <div class="col-sm-6">
                        <p>developer@Hasith_Madushanka</p>
                    </div>
                    <div class="col-sm-6">
                        <ul class="list-inline pull-right">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-envelope-o"></i></a></li>
                            <li><a href="#"><i class="fa fa-phone"></i> Select Language</a></li>
                        </ul>                        
                    </div>
               
            </div>
        </div>
          <nav class="navbar navbar-default">
            
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <i class="fa fa-bars"></i>
                </button>
                <a href="/" class="navbar-brand">
                    <img src="img/logo.png" alt="Post" width="120" height="`65">
                </a>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-navbar-collapse">
                    <ul class="nav navbar-nav main-navbar-nav nav-content-pad">
                        <li><a href="/" title="">HOME</a></li>
                        <li class="dropdown">
                            <a href="#" title="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ABOUT SRI LANKA <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#" title="">Places To Visit</a></li>
                                <li><a href="#" title="">Tours</a></li>
                                <li><a href="#" title="">Food & Drinks</a></li>
                                <li><a href="#" title="">History of Ancient</a></li>
                            </ul>
                        </li>
                        {{-- <li class="active"><a href="/news" title="">ABOUT SRI LANKA</a></li> --}}
                        <li class=""><a href="/news" title="">NEWS</a></li>
                        <li><a href="/events" title="">EVENTS</a></li>
                        <li class=""><a href="#" title="">OUR SERVICES</a></li>
                        <li><a href="#" title="">CONTACT US</a></li>
                    </ul>                           
                </div><!-- /.navbar-collapse -->                
                <!-- END MAIN NAVIGATION -->
            
        </nav>   
    </header>

   
 
    @yield('content')

    
    
   
    
    <!-- footerBottomSection -->    
    <div class="col-md-12 col-lg-12 footer_bot">
           <p>
            &copy; 2017, Allright reserved. <a href="#">Terms and Condition</a> | <a href="#">Privacy Policy</a> </p>
            <div class="pull-right"> <a href="/"> <img src="img/logo.png" alt="Post" width="100" height="`35"/></a></div>
          
    </div>
    
<!-- JS Global Compulsory -->           
<script type="text/javascript" src="assets/custom/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="assets/custom/js/modernizr.custom.js"></script>     
<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script> 
    
    <!-- JS Implementing Plugins -->           
<script type="text/javascript" src="assets/custom/js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="assets/custom/js/modernizr.js"></script>
<script type="text/javascript" src="assets/custom/js/jquery.cslider.js"></script> 
<script type="text/javascript" src="assets/custom/js/back-to-top.js"></script>
<script type="text/javascript" src="assets/custom/js/jquery.sticky.js"></script>

<!-- JS Page Level -->           
<script type="text/javascript" src="assets/custom/js/app.js"></script>
<script type="text/javascript" src="assets/custom/js/index.js"></script>
<script type="text/javascript" src="assets/custom/js/jquery.newsTicker.min.js"></script>
<script type="text/javascript" src="assets/custom/js/feed.js"></script>
<script type="text/javascript" src="assets/custom/js/custom.js"></script>


<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        App.initSliders();
        Index.initParallaxSlider();
      
    });
</script>


    </body>
</html>
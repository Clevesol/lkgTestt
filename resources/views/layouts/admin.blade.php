<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

   
    <link rel="stylesheet" href="css/admin/main.css" type="text/css">
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/font-awesome-4.0.3/css/font-awesome.min.css" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Admin Page</title>
</head>
<body>

{{-- Nav-bar content --}}
<nav class="navbar navbar-m2p sidebar" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                Lanka<b>Guide</b>
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <!-- Dashboard -->
                {{-- active - open --}}
                <li class="">
                  <a href="#">
                      <span class="pull-right hidden-xs showopacity glyphicon material-icons">av_timer</span> Dashboard
                  </a>
                </li>
                <!-- Banner -->
                <li class="">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="menu-icon pull-right hidden-xs showopacity glyphicon material-icons">burst_mode</span>
                        Banners <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu forAnimate" role="menu">
                        <li><a href="#"><i class="material-icons">add</i> Add</a></li>
                        <li><a href="#"><i class="material-icons">sort</i> List</a></li>
                    </ul>
                </li>
                <li class="separator">Content</li>
                <!-- Page -->
                <li class="">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="menu-icon pull-right hidden-xs showopacity glyphicon material-icons">description</span>
                        Pages <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu forAnimate" role="menu">
                        <li><a href="#"><i class="material-icons">add</i> Add</a></li>
                        <li><a href="#"><i class="material-icons">sort</i> List</a></li>
                    </ul>
                </li>
                <!-- Blog -->
                <li class="">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="menu-icon pull-right hidden-xs showopacity glyphicon material-icons">chat_bubble_outline</span>
                        Blog <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu forAnimate" role="menu">
                        <li><a href="#"><i class="material-icons">add</i> Add</a></li>
                        <li><a href="#"><i class="material-icons">sort</i> List</a></li>
                    </ul>
                </li>
                <!-- Tags -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon material-icons">label</span>
                        Tags <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu forAnimate" role="menu">
                        <li><a href="#"> <i class="material-icons">add</i> Add</a></li>
                        <li><a href="#"> <i class="material-icons">sort</i> List</a></li>
                    </ul>
                </li>
                <li class="separator">System</li>
                <!-- Users -->
                <li class="#">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="menu-icon pull-right hidden-xs showopacity glyphicon material-icons">group</span>
                        Users <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu forAnimate" role="menu">
                        <li><a href="#"><i class="material-icons">add</i> Add</a></li>
                        <li><a href="#"><i class="material-icons">sort</i> List</a></li>
                    </ul>
                </li>
                <!-- Exit -->
                <li>
                    <a href="#">
                        <span class="menu-icon pull-right hidden-xs showopacity glyphicon material-icons">exit_to_app</span> Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
{{-- End nav bar content --}}

<div class="container-main">
<span class="" style="text-align: center;"> <h2>Content Goes here </h2></span>
@yield('content')

</div>
<script type="text/javascript" src="assets/custom/js/jquery-1.8.2.min.js"></script>
{{-- <script type="text/javascript" src="js/admin/main.js"></script> --}}
<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script> 

</body>




</html>
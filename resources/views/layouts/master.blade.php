<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PT. XYZ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Thomas">
    <!-- styles -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap-responsive.css')}}" rel="stylesheet">
    <link href="{{asset('css/docs.css')}}" rel="stylesheet">
    <link href="{{asset('css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('js/google-code-prettify/prettify.css')}}" rel="stylesheet">
    <link href="{{asset('css/flexslider.css')}}" rel="stylesheet">
    <link href="{{asset('css/refineslide.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700" rel="stylesheet">

    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('color/default.css')}}" rel="stylesheet">

    <!-- fav and touch icons -->
    <link rel="shortcut icon" href="{asset('assets/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{asset('assets/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{asset('assets/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{asset('assets/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{asset('assets/ico/apple-touch-icon-57-precomposed.png')}}">

    {{$role = isset(Auth::user()->role) ? Auth::user()->role : 'Guest'}}
</head>

<body>
<header>
    <!-- Navbar
    ================================================== -->
    <div class="cbp-af-header">
        <div class=" cbp-af-inner">
            <div class="container">
                <div class="row">

                    <div class="span4">
                        <!-- logo -->
                        <div class="logo">
                            <h1><a href="/">PT. XYZ</a></h1>
                            <!-- <img src="assets/img/logo.png" alt="" /> -->
                        </div>
                        <!-- end logo -->
                    </div>
                    <div class="span8">
                        <!-- top menu -->
                        <div class="navbar">
                            <div class="navbar-inner">
                                <nav>
                                    <ul class="nav topnav">

                                            @if($role == 'Customer')
                                            <li class="dropdown">
                                                <form>
                                                    <div class="input-append" style ="margin-top: 15px;">
                                                        <input class="span2" id="appendedInputButton" type="text">
                                                        <button class="btn btn-color" type="submit"><i class="icon-search"></i></button>
                                                    </div>
                                                </form>
                                            </li>

                                            <li class="dropdown">
                                                <a href="/cart"><i class="icon-shopping-cart icon-1x"></i></a>
                                            </li>
                                            @endif

                                            <li class="dropdown">
                                                <a href="/">Catalogues</a>
                                            </li>
                                            @if($role == 'Guest')
                                            <li class="dropdown">
                                                <a href="#">
                                                    <form method = "post" action="{{url('/login')}}">
                                                        {{csrf_field()}}
                                                        <input type = "text" class = "input-medium" placeholder="Username" name = "username">
                                                        <input type = "password" class = "input-medium" placeholder="Password" name = "password">
                                                        <button class = "btn btn-color" type = "submit" style = "margin-top: -10px">Login</button>

                                                    </form>
                                                </a>
                                            </li>
                                            @endif

                                            @if (strpos($role, 'manager') || $role == 'Director')
                                            <li class="dropdown navbar-admin">
                                                <a href="#">Order</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="/order">Order (Sales)</a></li>
                                                    <li><a href="/order">Order (Finance)</a></li>
                                                </ul>
                                            </li>

                                            <li class="dropdown navbar-admin">
                                                <a href="#">Procurement</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="/reorder">Reorder Activity</a></li>
                                                    <li><a href="/order/procure">Procure Order</a></li>
                                                </ul>
                                            </li>

                                            <li class="dropdown navbar-admin">
                                                <a href="#">Notification</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="/product/outgoing">Outgoing Product</a></li>
                                                    <li><a href="/product/incoming">Incoming Product</a></li>
                                                </ul>
                                            </li>
                                            <li class = "navbar-admin">
                                                <a href="/inventory">Inventory</a>
                                            </li>
                                            @endif

                                        @if ($role != 'Guest')
                                        <li class="dropdown">
                                            <a href="#">{{isset(Auth::user()->username) ? Auth::user()->username : 'username'}}</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="/profile">Profile</a></li>
                                                <li><a href="/logout">Logout</a></li>
                                            </ul>
                                        </li>
                                        @endif
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- end menu -->
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>

<section id="maincontent">
    @yield('main_content')
</section>
<!-- Footer
================================================== -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class = "span3">
                <i class="icon-map-marker icon-1x"></i> Sawah Lio No. 17, Jakarta 11250
            </div>

            <div class = "span3">
                <i class="icon-envelope icon-1x"></i> harsa@centrin.net.id
            </div>

            <div class = "span3">
                <i class="icon-phone icon-1x"></i> (021) 6308312
        </div>

            <div class = "span3">
                <i class="icon-print icon-1x"></i> (021) 6335625
            </div>

        </div>
    </div>

</footer>

<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/modernizr.js')}}"></script>
<script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('js/google-code-prettify/prettify.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('js/portfolio/jquery.quicksand.js')}}"></script>
<script src="{{asset('js/portfolio/setting.js')}}"></script>
<script src="{{asset('js/hover/jquery-hover-effect.js')}}"></script>
<script src="{{asset('js/jquery.flexslider.js')}}"></script>
<script src="{{asset('js/classie.js')}}"></script>
<script src="{{asset('js/cbpAnimatedHeader.min.js')}}"></script>
<script src="{{asset('js/jquery.refineslide.js')}}"></script>
<script src="{{asset('js/jquery.ui.totop.js')}}"></script>

<!-- Template Custom Javascript File -->
<script src="{{asset('js/custom.js')}}"></script>

</body>

</html>

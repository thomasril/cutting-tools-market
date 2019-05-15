<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PT. DIRGARAYA HARSA</title>
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
                            <h1><a href="/">PT. DIRGARAYA HARSA</a></h1>
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
                                        {{$role = isset(Auth::user()->role) ? Auth::user()->role : 'Guest'}}

                                            @if($role == 'Customer')
                                            <li class="dropdown navbar-customer">
                                                <form>
                                                    <div class="input-append" style ="margin-top: 15px;">
                                                        <input class="span2" id="appendedInputButton" type="text">
                                                        <button class="btn btn-color" type="submit"><i class="icon-search"></i></button>
                                                    </div>
                                                </form>
                                            </li>

                                            <li class="dropdown navbar-customer">
                                                <a href="/cart"><i class="icon-shopping-cart icon-1x"></i></a>
                                            </li>
                                            @endif

                                        <li class="dropdown">
                                            <a href="/">Catalogues</a>
                                        </li>

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
            <div class="span6">
                <div class="widget">
                    <!-- logo -->
                    <div class="footerlogo">
                        <h6><a href="/">Plato</a></h6>
                        <!-- <img src="assets/img/logo.png" alt="" /> -->
                    </div>
                    <!-- end logo -->
                    <address>
                        <strong>Plato business company, Inc.</strong><br>
                        4455 Great building Ave, Suite A10<br>
                        San Francisco, CA 94107<br>
                        <abbr title="Phone">P:</abbr> (123) 456-7890 </address>
                </div>
            </div>
           
            <div class="span6">
                <div class="widget">
                    <h5>Keep updated</h5>
                    <p>
                        Enter your email to subcribe newsletter
                    </p>
                    <form>
                        <div class="input-append">
                            <input class="span2" id="appendedInputButton" type="text">
                            <button class="btn btn-color" type="submit">Subscribe</button>
                        </div>
                    </form>
                    <ul class="social-network">
                        <li><a href="#"><i class="icon-bg-light icon-facebook icon-circled icon-1x"></i></a></li>
                        <li><a href="#" title="Twitter"><i class="icon-bg-light icon-twitter icon-circled icon-1x"></i></a></li>
                        <li><a href="#" title="Linkedin"><i class="icon-bg-light icon-linkedin icon-circled icon-1x"></i></a></li>
                        <li><a href="#" title="Pinterest"><i class="icon-bg-light icon-pinterest icon-circled icon-1x"></i></a></li>
                        <li><a href="#" title="Google plus"><i class="icon-bg-light icon-google-plus icon-circled icon-1x"></i></a></li>
                    </ul>
                </div>
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

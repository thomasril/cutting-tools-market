<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PT. Dirgaraya Harsa</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="{{asset('img/favicon.png')}}" rel="icon">
    <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Font Awesome CSS File -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <!-- Libraries CSS Files -->
    <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

</head>

<body>

<!--==========================
Header
============================-->
<header id="header" class="fixed-top">
    <div class="container">

        <div class = "d-none">
            {{$role = isset(Auth::user()->role) ? Auth::user()->role : 'Guest'}}

            {{$m = isset($menu) ? $menu : 'none'}}
        </div>
        <div class="logo float-left">
            <a href="/" class="scrollto"><img src="{{asset('assets/img/logo.png')}}" alt="" class="img-fluid"></a>
        </div>

        <nav class="main-nav float-right d-none d-lg-block">
            <ul>

                @if($role == 'Customer')
                    <li class="dropdown">
                        <form method = "post" action="/search">
                            {{csrf_field()}}
                            <div class = "form-row mt-2">
                                <div class="input-group" style = "height: 30px; margin-top: -5px">
                                    <input type="text" class="form-control" placeholder="Search Category" name = "data"  style = "font-size: 14px; padding: 0px 10px;">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" style=" width: 40px" type="submit"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </li>

                    <li class="dropdown">
                        <a href="/cart"><i class="fas fa-shopping-cart fa-lg"></i></a>
                    </li>

                    <li class="{{ Request::is('/order') ? 'active' : '' }}">
                        <a href="/order">Order</a>
                    </li>
                @endif

                <li class="{{ Request::is('/catalogue') ? 'active' : '' }}">
                    <a href="/catalogue">Catalogue</a>
                </li>

                @if($role == 'Guest' && strpos(Request::url(), 'login'))
                    <li class="{{ Request::is('/signup') ? 'active' : '' }}">
                         <a href="/signup">Sign Up</a>
                    </li>
                @endif

                @if($role == 'Guest' && !strpos(Request::url(), 'login'))
                    <li class="dropdown">
                            <form method = "post" action="/navbar/login">
                                {{csrf_field()}}
                            <div class = "form-row mt-1">
                                <div class="form-group col-lg-4" >
                                    <input type = "text" class = "form-control" style = "font-size: 14px; height: 30px; padding: 0px 10px;" placeholder="Username" name = "username">
                                </div>
                                <div class="form-group col-lg-4" >
                                    <input type = "password" class = "form-control" style = "font-size: 14px; height: 30px; padding: 0px 10px;" placeholder="Password" name = "password">
                                </div>
                                <div class="form-group col-lg-3" >
                                <button class="btn btn-circle-primary" style = "font-size: 12px; height: 30px; width: 70px">Login</button>
                                </div>
                            </div>
                            </form>
                    </li>
                 @endif

                @if ($role != 'Customer' && $role != 'Guest')
                    <li class="drop-down">
                        <a href="#">Order</a>
                        <ul>
                            @if ($role == 'Director')
                                <li><a href="/order/finance">Order Finance</a></li>
                                <li><a href="/order/sales">Order Sales</a></li>
                            @elseif ($role == 'Finance Manager' || $role == 'Sales Manager')
                                <li><a href="/order">Order ({{$role == 'Finance Manager' ? 'Finance' : 'Sales'}})</a></li>
                            @else
                                <li><a href="/">Order</a></li>
                            @endif
                        </ul>
                    </li>

                    <li class="drop-down">
                        <a href="#">Procurement</a>
                        <ul>
                            <li><a href="/reorder">Reorder Activity</a></li>
                            <li><a href="/reorder/procure">Procure Order</a></li>
                        </ul>
                    </li>

                    <li class="drop-down">
                        <a href="#">Notification</a>
                        <ul>
                            <li><a href="/notification/outgoing">Outgoing Product</a></li>
                            <li><a href="/notification/incoming">Incoming Product</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="/inventory">Inventory</a>
                    </li>
                @endif

                @if ($role != 'Guest')
                    <li class="drop-down">
                        <a href="#">{{isset(Auth::user()->username) ? Auth::user()->username : 'username'}}</a>
                        <ul>
                            <li><a href="/profile">Profile</a></li>
                            <li><a href="/logout">Logout</a></li>
                        </ul>
                    </li>
                @endif

            </ul>
        </nav>

    </div>
</header>

<main id="main">
    @yield('main_content')
</main>

<!--==========================
  Footer
============================-->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 ">
                    <h4>ADDRESS: Sawah Lio No. 17, Jakarta 11250</h4>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h4>EMAIL: harsa@centrin.net.id</h4>
                </div>

                <div class="col-lg-2 col-md-6 ">
                    <h4>PHONE: (021) 6308312</h4>
                </div>

                <div class="col-lg-2 col-md-6">
                    <h4>Fax: (021) 6335625</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong>PT. Dirgaraya Harsa</strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="https://thomas.com/">Thomas Asril</a>
        </div>
    </div>
</footer><!-- #footer -->

<!-- JavaScript Libraries -->
<script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
<script src="{{asset('lib/jquery/jquery-migrate.min.js')}}"></script>
<script src="{{asset('lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('lib/easing/easing.min.js')}}"></script>
<script src="{{asset('lib/mobile-nav/mobile-nav.js')}}"></script>
<script src="{{asset('lib/wow/wow.min.js')}}"></script>
<script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('lib/counterup/counterup.min.js')}}"></script>
<script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('lib/isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('lib/lightbox/js/lightbox.min.js')}}"></script>

<!-- Template Main Javascript File -->
<script src="js/main.js"></script>

<script>
    @yield('custom_js')
</script>

</body>
</html>

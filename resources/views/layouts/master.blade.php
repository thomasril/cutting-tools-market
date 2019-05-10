<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Plato - Clean responsive bootstrap website template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Clean responsive bootstrap website template">
    <meta name="author" content="">
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
                            <h1><a href="index.html">Testing</a></h1>
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
                                        <li class="dropdown active">
                                            <a href="index.html">Home</a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">Features</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="scaffolding.html">Scaffolding</a></li>
                                                <li class="dropdown"><a href="#">3rd level</a>
                                                    <ul class="dropdown-menu sub-menu">
                                                        <li><a href="#">Example menu</a></li>
                                                        <li><a href="#">Example menu</a></li>
                                                        <li><a href="#">Example menu</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">Pages</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="about.html">About us</a></li>
                                                <li><a href="pricingtable.html">Pricing table</a></li>
                                                <li><a href="fullwidth.html">Fullwidth</a></li>
                                                <li><a href="404.html">404</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">Portfolio</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="portfolio-2cols.html">Portfolio 2 columns</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">Blog</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="blog_left_sidebar.html">Blog left sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="contact.html">Contact</a>
                                        </li>
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

<section id="subintro">
    @yield('sub_intro')
</section>

<section id="maincontent">
    @yield('main_content')
</section>
<!-- Footer
================================================== -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="span3">
                <div class="widget">
                    <!-- logo -->
                    <div class="footerlogo">
                        <h6><a href="index.html">Plato</a></h6>
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
            <div class="span3">
                <div class="widget">
                    <h5>Browse pages</h5>
                    <ul class="list list-ok">
                        <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                        <li><a href="#">Tamquam ponderum at eum, nibh dicta offendit mei</a></li>
                        <li><a href="#">Vix no vidisse dolores intellegam</a></li>
                        <li><a href="#">Est virtute feugiat accommodare eu</a></li>
                    </ul>
                </div>
            </div>
            <div class="span3">
                <div class="widget">
                    <h5>Flickr photostream</h5>
                    <div class="flickr_badge">
                        <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=8&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=34178660@N03"></script>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="span3">
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

@extends('layout/master')

@section('sub_intro')
    <div class="container">
        <div class="row">
            <div class="span4">
                <h3>Portfolio <strong>4 columns</strong></h3>
            </div>
            <div class="span8">
                <ul class="breadcrumb notop">
                    <li><a href="#">Home</a><span class="divider">/</span></li>
                    <li class="active">Portfolio 4 columns</li>
                </ul>
            </div>
        </div>
    </div>
@stop

@section('main_content')
    <div class="container">
        <div class="row">
            <div class="span12">
                <!-- portfolio filter -->
                <ul class="filter">
                    <li class="all active"><a href="#">All categories</a></li>
                    <li class="web"><a href="#">Web design</a></li>
                    <li class="brand"><a href="#">Brand identity</a></li>
                    <li class="graphic"><a href="#">Graphic design</a></li>
                </ul>
                <!-- /portolfio filter -->
            </div>
        </div>
        <div class="row">
            <ul class="portfolio-area da-thumbs">
                <li class="portfolio-item" data-id="id-0" data-type="web">
                    <div class="span3">
                        <div class="thumbnail">
                            <div class="image-wrapp">
                                <img src="{{asset('assets/img/portfolio/img-1.jpg')}}" alt="Portfolio name" title="" />
                                <article class="da-animate da-slideFromRight">
                                    <a class="zoom" data-pretty="prettyPhoto" href="assets/img/portfolio/big-1.jpg">
                                        <i class="icon-bg-light icon-zoom-in icon-circled icon-2x"></i>
                                    </a>
                                    <a href="portfolio-detail.html">
                                        <i class="icon-bg-light icon-link icon-circled icon-2x"></i>
                                    </a>
                                </article>
                            </div>
                            <div class="desc">
                                <h5><i class="icon-file"></i> <strong>Product Name 1</strong></h5>
                                <p>Product</p>
                            </div>
                        </div>

                    </div>
                </li>

                <li class="portfolio-item" data-id="id-0" data-type="brand">
                    <div class="span3">
                        <div class="thumbnail">
                            <div class="image-wrapp">
                                <img src="assets/img/portfolio/img-2.jpg" alt="Portfolio name" title="" />
                                <article class="da-animate da-slideFromRight">
                                    <a class="zoom" data-pretty="prettyPhoto" href="assets/img/portfolio/big-1.jpg">
                                        <i class="icon-bg-light icon-zoom-in icon-circled icon-2x"></i>
                                    </a>
                                    <a href="portfolio-detail.html">
                                        <i class="icon-bg-light icon-link icon-circled icon-2x"></i>
                                    </a>
                                </article>
                            </div>
                            <div class="desc">
                                <h5><i class="icon-file"></i> <strong>Product Name 2</strong></h5>
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="portfolio-item" data-id="id-0" data-type="web">
                    <div class="span3">
                        <div class="thumbnail">
                            <div class="image-wrapp">
                                <img src="assets/img/portfolio/img-3.jpg" alt="Portfolio name" title="" />
                                <article class="da-animate da-slideFromRight">
                                    <a class="zoom" data-pretty="prettyPhoto" href="assets/img/portfolio/big-1.jpg">
                                        <i class="icon-bg-light icon-zoom-in icon-circled icon-2x"></i>
                                    </a>
                                    <a href="portfolio-detail.html">
                                        <i class="icon-bg-light icon-link icon-circled icon-2x"></i>
                                    </a>
                                </article>
                            </div>
                            <div class="desc">
                                <h5><i class="icon-file"></i> <strong>Product Name 3</strong></h5>
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="portfolio-item" data-id="id-0" data-type="brand">
                    <div class="span3">
                        <div class="thumbnail">
                            <div class="image-wrapp">
                                <img src="assets/img/portfolio/img-4.jpg" alt="Portfolio name" title="" />
                                <article class="da-animate da-slideFromRight">
                                    <a class="zoom" data-pretty="prettyPhoto" href="assets/img/portfolio/big-1.jpg">
                                        <i class="icon-bg-light icon-zoom-in icon-circled icon-2x"></i>
                                    </a>
                                    <a href="portfolio-detail.html">
                                        <i class="icon-bg-light icon-link icon-circled icon-2x"></i>
                                    </a>
                                </article>
                            </div>
                            <div class="desc">
                                <h5><i class="icon-file"></i> <strong>Product Name 4</strong></h5>
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@stop
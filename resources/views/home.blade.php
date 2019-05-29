@extends('layouts/master')

@section('main_content')

    <section id="portfolio" class="clearfix">
        <div class="container">

            <header class="section-header">
                <h3 class="section-title">Our Catalogue</h3>
            </header>

            <div class="row">
                <div class="col-lg-12">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-app">All</li>
                        @foreach($categories as $c)
                            <li data-filter=".{{str_replace(" ", "-", $c->name)}}" class="">{{$c->name}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container">
                @foreach($categories as $c)
                <div class="col-lg-4 col-md-6 portfolio-item {{str_replace(" ", "-", $c->name)}}">
                    <div class="portfolio-wrap">
                        <img src="{{asset('assets/img/products/'.$c->picture)}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4><a href="#">{{$c->name}}</a></h4>
                            <div>
                                <a href="img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="far fa-eye fa-fw"></i></a>
                                <a href="/category/{{$c->category_id}}/catalogue" class="link-details" title="More Details"><i class="fas fa-link fa-fw"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@stop

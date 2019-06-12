@extends('layouts/master')

@section('main_content')

    <section id="portfolio" class="clearfix">
        <div class="container">
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
                            @if (Auth::user()->role == 'Sales Manager'))
                            <h4><a href="/category/{{$c->category_id}}/catalogue/update">{{$c->name}}</a></h4>
                            <div>
                                <a href="/category/{{$c->category_id}}/catalogue/update" class="link-details" title="More Details"><i class="fas fa-link fa-fw"></i> </a>
                            </div>
                            @else
                                <h4><a href="/category/{{$c->category_id}}/catalogue">{{$c->name}}</a></h4>
                                <div>
                                    <a href="/category/{{$c->category_id}}/catalogue" class="link-details" title="More Details"><i class="fas fa-link fa-fw"></i> </a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@stop

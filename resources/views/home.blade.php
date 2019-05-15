@extends('layouts/master')

@section('main_content')
    <div class="container" style="margin-top: 40px">
        <div class="row">
            <div class="span12">
                <!-- portfolio filter -->
                <ul class="filter">
                    <li class="all active"><a href="#">All categories</a></li>
                    @foreach($categories as $c)
                        <li class="{{str_replace(" ", "-", $c->category)}}"><a href="#">{{$c->category}}</a></li>
                    @endforeach
                </ul>
                <!-- /portolfio filter -->
            </div>
        </div>
        <div class="row">
            <ul class="portfolio-area da-thumbs">
                @foreach($categories as $c)
                    <a href="/category/{{$c->category_id}}/catalogue">
                        <li class="portfolio-item" data-id="id-0" data-type="{{str_replace(" ", "-", $c->category)}}">
                            <div class="span4">
                                <div class="thumbnail">
                                    <div class="image-wrapp">
                                        <img src="{{asset('assets/img/products/'.$c->picture)}}" />
                                    </div>
                                    <div class="desc">
                                        <h5><strong>{{$c->category}}</strong></h5>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </a>
                @endforeach

            </ul>
        </div>
    </div>
@stop

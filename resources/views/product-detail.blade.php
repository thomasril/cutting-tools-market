@extends('layouts/master')

@section('main_content')
    <div class="container" style="margin-top: 40px">
        <div class="row">
            <div class = "span12">
                <h2><strong>{{$products[0]->productCategory->category}}</strong></h2>
            </div>
        </div>

        <div class = "row">
            <div class = "span4">
                <div class="post-gallery">
                    <!-- start flexslider -->
                    <div class="flexslider">
                        <ul class="slides">
                            {{$dir = '../../assets/img/products/Carbide Ball Nose_Long Type/'}}
                            @foreach(glob($dir) as $file)
                                <li>
                                    {{$file}}
                                </li>
                            @endforeach
                            {{--<li>--}}
                                {{--<img src="{{asset('assets/img/products/Drill.jpeg')}}" alt="" />--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<img src="{{asset('assets/img/products/Tap.jpeg')}}" alt="" />--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<img src="{{asset('assets/img/products/Reamer.jpeg')}}" alt="" />--}}
                            {{--</li>--}}
                        </ul>
                    </div>
                    <!-- end flexslider -->
                </div>
            </div>

            <div class = "span8">
                <table class="table">
                    <tr>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                    </tr>
                    @foreach($products as $p)
                        @if($p->productType->type_id == 1)
                    <tr>
                        <td>{{$p->name}}</td>
                        <td>{{$p->price}}</td>
                        <td>{{$p->stock}}</td>
                    </tr>
                        @endif
                        @endforeach
                </table>
            </div>
        </div>
    </div>
@stop

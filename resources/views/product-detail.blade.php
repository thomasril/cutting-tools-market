@extends('layouts/master')

@section('main_content')

    <section id="services" class="section-bg">
        <div class="container">
            <header class="section-header">
                <h3 class="section-title">{{$category->name}}</h3>
            </header>
            <form method = "post" action = "/cart/add">
             {{csrf_field()}}
            @foreach($types as $type)
            <div class="row mb-5 box">
                <div class = "col-lg-4 col-md-6">
                    <h4>{{$type[0]->productType->name}}</h4>
                    <div id="carosel-product-{{$type[0]->productType->type_id}}" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <img class="d-block w-100" src="http://www.provoke-online.com/images/All_Articles/special/anjay/ter-anjay.jpg">
                            </div>

                        @foreach($pictures as $picture)
                                @if ($picture->type_id == $type[0]->productType->type_id)
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{asset('assets/img/products/'.$picture->path)}}">
                                    </div>
                                @endif
                            @endforeach

                        </div>
                        <a class="carousel-control-prev" href="#carosel-product-{{$type[0]->productType->type_id}}" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carosel-product-{{$type[0]->productType->type_id}}" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

                <div class = "col-lg-8 col-md-6">
                    <table class="table">
                        <tr>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                        </tr>
                        @foreach($type as $product)
                            <tr>
                                <input type="hidden" name = "product_id[]" value="{{$product->product_id}}">
                                <td>{{$product->name}}</td>
                                <td>{{$product->price}}</td>
                                <td>
                                    <div class="input-group">
                                        <button type="button" class="button-minus btn-danger" > - </button>
                                        <input type="number" max="{{$product->stock}}" min = "0" name = "qty[]" value="0" class="quantity-field">
                                        <button type="button" class="button-plus btn-light" > + </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </table>

                </div>
            </div>
            @endforeach
                <div class = "row">
                    <div class = "col text-center">
                        <button type = "button" class = "btn-get-started" data-toggle="modal" data-target="#modalSuccess">Add to Cart</button>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="modalSuccess" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Product Added</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Produk telah masuk ke Shopping Cart
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Ok</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </form>

                <div class = "row box">
                    <div class = "col">

                        <div class = "row">
                            <h4>Product Description</h4>
                        </div>

                        <div class = "row">
                            <div class = "col-lg-1">Material</div>
                            <div class = "col-lg-1">:</div>
                            <div class = "col-lg-10">{{$category->material}}</div>
                        </div>

                        @if(isset($category->hardness))
                        <div class = "row">
                            <div class = "col-lg-1">Flutes</div>
                            <div class = "col-lg-1">:</div>
                            <div class = "col-lg-10">{{$category->flutes}}</div>
                        </div>
                        @endif

                        @if(isset($category->hardness))
                        <div class = "row">
                            <div class = "col-lg-1">Coating</div>
                            <div class = "col-lg-1">:</div>
                            <div class = "col-lg-10">{{$category->coating}}</div>
                        </div>
                        @endif

                        @if(isset($category->hardness))
                        <div class = "row">
                            <div class = "col-lg-1">Hardness</div>
                            <div class = "col-lg-1">:</div>
                            <div class = "col-lg-10">{{$category->hardness}}</div>
                        </div>
                        @endif
                    </div>
                </div>
        </div>
    </section>
@stop

@section('custom_js')
    function incrementValue(e) {
        e.preventDefault();
        var parent = $(e.target).closest('div');
        var currentVal = parseInt(parent.find('.quantity-field').val(), 10);

        if (!isNaN(currentVal))
            parent.find('.quantity-field').val(currentVal + 1);
        else
            parent.find('.quantity-field').val(0);

    }

    function decrementValue(e) {
        e.preventDefault();
        var parent = $(e.target).closest('div');
        var currentVal = parseInt(parent.find('.quantity-field').val(), 10);

        if (!isNaN(currentVal) && currentVal > 0)
            parent.find('.quantity-field').val(currentVal - 1);
        else
            parent.find('.quantity-field').val(0);

    }

    $('.input-group').on('click', '.button-plus', function(e) {
        incrementValue(e);
    });

    $('.input-group').on('click', '.button-minus', function(e) {
        decrementValue(e);
    });
@stop

@extends('layouts/master')

@section('main_content')

    <section id="services" class="section-bg">
        <div class="container">
            <div class = "row">
                <div class = "col ml-3 mt-3">
                    <a href = "/" style = "color: black"> Catalogue </a> » <strong>{{$category->name}}</strong>
                </div>
            </div>

            <header class="section-header">
                <h3 class="section-title">{{$category->name}}</h3>
            </header>

            @if($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{$errors->first()}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <form method = "post" action = "/cart/add">
             {{csrf_field()}}
            @foreach($types as $type)
            <div class="row mb-5 box">
                <div class = "col-lg-4 col-md-6">
                    <h4>{{$type[0]->productType->name}}</h4>
                    <div id="carosel-product-{{$type[0]->productType->type_id}}" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">

                        @foreach($pictures as $index => $picture)
                                @if ($picture->type_id == $type[0]->productType->type_id)
                                    <div class="carousel-item" id = "carousel-img-{{$index}}">
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
                            @if (Auth::user()->role == 'Customer')
                                <th>Quantity</th>
                            @endif
                        </tr>
                        @foreach($type as $product)
                            <tr>
                                <input type="hidden" name = "product_id[]" value="{{$product->product_id}}">
                                <td>{{$product->name}}</td>
                                <td>Rp. {{number_format($product->price)}}</td>
                                @if (Auth::user()->role == 'Customer')
                                    <td>
                                        <div class="input-group">
                                            <button type="button" class="button-minus btn-danger" > - </button>
                                            <input type="number" max="{{$product->stock}}" min = "0" name = "qty[]" value="0" style = "width: 50px" class="quantity-field text-center" readonly>
                                            <button type="button" class="button-plus btn-light" > + </button>
                                        </div>
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                    </table>

                </div>
            </div>
            @endforeach
                <div class = "row">


                    @if (Auth::user()->role == 'Customer')
                        <div class = "col text-center">
                            <button type = "button" class = "btn-circle-primary btn-add">Add to Cart</button>
                        </div>
                    @endif

                    <!-- Modal -->
                    <div class="modal fade" id="modal-success" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Product Added</h5>
                                </div>
                                <div class="modal-body">
                                    Produk telah masuk ke Shopping Cart
                                </div>
                                <div class="modal-footer">
                                    <div class="container-fluid">
                                        <div class="row justify-content-md-center">
                                            <div class="col-md-4">
                                                <button type="submit" class="btn btn-circle-primary" >Ok</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="modal-incomplete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Incomplete Information</h5>
                                </div>
                                <div class="modal-body">
                                    Anda belum memasukkan jumlah yang diinginkan.
                                </div>
                                <div class="modal-footer">
                                    <div class="container-fluid">
                                        <div class="row justify-content-md-center">
                                            <div class="col-md-4">
                                                <button type="submit" class="btn btn-circle-secondary" data-dismiss = "modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
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
    $(document).ready(function () {
        function alignModal(){
            var modalDialog = $(this).find(".modal-dialog")

            modalDialog.css("margin-top", Math.max(0, ($(window).height() - modalDialog.height()) / 2))
        }
        $(".modal").on("shown.bs.modal", alignModal)

        $(window).on("resize", function(){
            $(".modal:visible").each(alignModal)
        })

        $('.carousel-inner').find('.carousel-item').first().addClass('active')
        $('.carousel-inner').find('#carousel-img-3').addClass('active')
        $('.carousel-inner').find('#carousel-img-9').addClass('active')
        $('.carousel-inner').find('#carousel-img-15').addClass('active')
        $('.carousel-inner').find('#carousel-img-21').addClass('active')
        $('.carousel-inner').find('#carousel-img-27').addClass('active')
        $('.carousel-inner').find('#carousel-img-33').addClass('active')
    });

    var total = 0

    function incrementValue(e) {
        e.preventDefault();
        var parent = $(e.target).closest('div');
        var currentVal = parseInt(parent.find('.quantity-field').val(), 10);

        if (!isNaN(currentVal)) {
            parent.find('.quantity-field').val(currentVal + 1)
            total += 1
        }
        else
            parent.find('.quantity-field').val(0)

        console.log(total)
    }

    $('.btn-add').click(function() {
        if (total > 0)
            $('#modal-success').modal('show')
        else
            $('#modal-incomplete').modal('show')
    })

    function decrementValue(e) {
        e.preventDefault();
        var parent = $(e.target).closest('div');
        var currentVal = parseInt(parent.find('.quantity-field').val(), 10)

        if (!isNaN(currentVal) && currentVal > 0) {
            parent.find('.quantity-field').val(currentVal - 1)
            total -= 1
        }
        else
            parent.find('.quantity-field').val(0)
    }

    $('.input-group').on('click', '.button-plus', function(e) {
        incrementValue(e)
    })

    $('.input-group').on('click', '.button-minus', function(e) {
        decrementValue(e)
    })
@stop

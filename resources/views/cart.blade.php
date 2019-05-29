@extends('layouts/master')

@section('main_content')
    <section id="services" class="section-bg">
    <div class="container">

        <header class="section-header">
            <h3 class="section-title">Cart</h3>
        </header>
        <form method = "get" action="/checkout">
            {{csrf_field()}}
            <div class="row box">
                <div class="col">
                <table class="table">
                        <tr>
                            <th></th>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Sum</th>
                            <th>Action</th>
                        </tr>

                    <tbody>

                        @foreach($carts as $c)
                            <tr class = "cart-{{$c->cart_id}}">
                                <td><input type = "checkbox"></td>
                                <td>{{$c->product->name}}</td>
                                <td>Rp. {{$c->product->price}}</td>
                                <td>{{$c->qty}}</td>
                                <td>Rp. {{$temp = $c->qty * $c->product->price}}</td>
                                <td>
                                    <button type = "button" class = "btn btn-danger btnDelete" data-id="{{ $c->cart_id }}" data-token="{{ csrf_token() }}"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                </div>
            </div>

            <div class = "row box">
                <div class = "col-lg-2">
                    <input type = "checkbox"> Select All
                </div>

                <div class = "col-lg-4">
                    <a href = "/"><button type="button" class = "btn btn-primary"> Continue Shopping</button></a>
                </div>

                <div class = "col-lg-4">
                    Subtotal: Rp.
                </div>

                <div class = "col-lg-2">
                    <button type = "submit" class = "btn btn-primary"> Checkout </button>
                </div>
            </div>
        </form>
    </div>
    </section>
@stop

@section('custom_js')
    var $tr = $(this).closest('tr');

    $(".btnDelete").click(function(){
        var id = $(this).data("id");
        var token = $(this).data("token");
        $.ajax({
            url: "cart/delete/"+id,
            type: 'POST',
            dataType: "JSON",
            data: {
                "id": id,
                "_method": 'POST',
                "_token": token,
            },
            success: function (){
                $("tbody").find(".cart-"+id).remove();
            }
        });
    });

@stop

@extends('layouts/master')

@section('main_content')
    <section id="services" class="section-bg">
    <div class="container">

        <header class="section-header">
            <h3 class="section-title">Cart</h3>
        </header>

        @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{$errors->first()}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

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
                                <td><input type = "checkbox" class = "check-products" value = "{{($c->qty * $c->product->price)}}" data-id = {{$c->cart_id}}></td>
                                <td>{{$c->product->name}}</td>
                                <td>Rp. {{number_format($c->product->price)}}</td>
                                <td>{{$c->qty}}</td>
                                <td id = "product-price">Rp. {{number_format($c->qty * $c->product->price)}}</td>
                                <td>
                                    <button type = "button" class = "btn btn-danger" data-toggle="modal" data-id = "{{$c->cart_id}}" data-target="#modal-delete"><i class="fas fa-trash"></i></button>
                                </td>
                                <form method = "post" action ="/cart/delete">
                                    {{csrf_field()}}
                                    <div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" >Delete Cart</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                    <div class="modal-body">
                                                        <input type="hidden" name= "id" id = "cart-id">
                                                        Apakah anda yakin untuk menghapus ?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                                        <button type="submit" class="btn btn-primary" >Yes</button>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </tr>
                        @endforeach
                    </tbody>
                </table>

                </div>
            </div>
        <form method = "post" action="/checkout">
            {{csrf_field()}}

            <input type="hidden" id = "carts_id" name = "cart_id">

            <div class = "row box">
                <div class = "col-lg-2">
                    <input type = "checkbox" id = "check-all"> Select All
                </div>

                <div class = "col-lg-4">
                    <a href = "/"><button type="button" class = "btn btn-primary"> Continue Shopping</button></a>
                </div>

                <div class = "col-lg-4">
                    <input type="hidden" name = "subtotal" id = "sub-total">
                    Subtotal: Rp. <span id = "subtotal"> 0 </span>
                    <input type="hidden" name = "totalprice" id = "total-price">
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
    $(document).ready(function () {
        function alignModal(){
            var modalDialog = $(this).find(".modal-dialog")
            modalDialog.css("margin-top", Math.max(0, ($(window).height() - modalDialog.height()) / 2))
        }
        $(".modal").on("shown.bs.modal", alignModal)

        $(window).on("resize", function(){
            $(".modal:visible").each(alignModal)
        })
    });


    var subtotal = 0
    var carts = $('#carts_id').val()

    $('#check-all').change(function(){
        $('.check-products').prop('checked', $('#check-all').prop('checked'));

        if ($(this).prop("checked") == true) {
            $('.check-products').each(function () {
                subtotal += parseInt($(this).val())
                $('#carts_id').val($('#carts_id').val() + $(this).data('id') + '+');
            });
        } else {
            subtotal = 0
            $('#carts_id').val('')
        }

        $('#subtotal').html(subtotal.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,'))
        $('#sub-total').val(subtotal)
        $('#total-price').val(subtotal + (subtotal * 10 / 100))
    })

    $('.check-products').change(function() {
        var price = parseInt($(this).val())
        var id = $(this).data('id')
        if ($(this).prop("checked") == true) {
            subtotal += price
            carts = carts + id + '+'
        }
        else {
            subtotal -= price
            carts = carts.replace(id+'+', '')
        }

        $('#carts_id').val(carts)
        $('#subtotal').html(subtotal.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,'))
        $('#sub-total').val(subtotal)
        $('#total-price').val(subtotal + (subtotal * 10 / 100))
    })

    $('#modal-delete').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var id = button.data('id')

        var modal = $(this)
        modal.find('.modal-body #cart-id').val(id)
    })
@stop

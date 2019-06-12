@extends('layouts/master')

@section('main_content')
    <section id="services" class="section-bg">
        <div class="container">
        <header class="section-header">
            <h3 class="section-title">Checkout</h3>
        </header>

            <form method = "post" action = "/order/insert">
                {{ csrf_field() }}
                <div class="row box">
                    <div class="col">
                        <h4>Shipping Address</h4>

                        <div class = "row">
                            <div class = "col-lg-4"><strong>{{Auth::user()->name}}:</strong></div>
                            <div class = "col-lg-8">{{Auth::user()->address}}</div>
                        </div>

                        <hr/>
                        <div class="row" style="width: 50%; margin: auto">
                            <div class = "col">
                                <input type = "hidden" name = "cart_id" value = "{{$cart->cart_id}}">
                                <input type = "hidden" name = "subtotal" value = "{{$cart->subtotal}}">
                                <input type = "hidden" name = "total_price" value = "{{$cart->totalprice}}">

                                <div class = "form-row">
                                    <div class = "form-group col-lg-6">Buyer Name: </div>
                                    <div class = "form-group col-lg-6"> <input type="text" class = "form-control shipping-form" name = "buyer_name" id = "input-buyer" placeholder="Buyer name"> </div>
                                </div>

                                <div class = "form-row">
                                    <div class = "form-group col-lg-6">Recipient Name: </div>
                                    <div class = "form-group col-lg-6"> <input type="text" class = "form-control shipping-form" name = "name" id = "input-recipient" placeholder="Recipient Name"> </div>
                                </div>

                                <div class = "form-row">
                                    <div class = "form-group col-lg-6">Recipient Title: </div>
                                    <div class = "form-group col-lg-6"> <input type="text" class = "form-control shipping-form" name = "title" id = "input-title" placeholder="Recipient Title"> </div>
                                </div>

                                <div class = "form-row">
                                    <div class = "form-group col-lg-6">Recipient Mobile Number: </div>
                                    <div class = "form-group col-lg-6"> <input type="text" class = "form-control shipping-form" name = "phone" id = "input-phone" placeholder="Recipient Mobile Number"> </div>
                                </div>

                                <div class = "form-group text-center">
                                    <button type="button" class="btn btn-primary btn-save" value = "Save">Save</button>
                                </div>

                                <div class="modal" id="modal-incomplete" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" >Shopping Detail Empty</h5>

                                            </div>
                                            <div class="modal-body">
                                                Anda belum menginput Shipping Detail
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Ok</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                </div>


                <div class = "row box">
                    <div class= "col text-center" >
                        <div class = "row"  style = "width: 50%; margin: auto">
                            <div class = "col-lg-5">Order Id</div>
                            <div class = "col-lg-5">{{$order_id}}</div>
                            <input type = "hidden" name = "order_id" value = "{{$order_id}}">
                        </div>
                        <div class = "row"  style = "width: 50%; margin: auto">
                            <div class = "col-lg-5">Subtotal</div>
                            <div class = "col-lg-5">Rp. {{number_format($cart->subtotal)}}</div>
                        </div>
                        <div class = "row"  style = "width: 50%; margin: auto">
                            <div class = "col-lg-5">PPN(10%)</div>
                            <div class = "col-lg-5">Rp. {{number_format($cart->subtotal * 10 / 100)}}</div>
                        </div>
                        <div class = "row"  style = "width: 50%; margin: auto">
                            <div class = "col-lg-5"><h4>Total Price</h4></div>
                            <div class = "col-lg-5"><h4>Rp.{{number_format($cart->totalprice)}}</h4></div>
                        </div>

                        <div class = "row"  style = "width: 60%; margin: auto">
                            <div class = "col"><strong>Mohon dibayarkan dalam waktu 30 hari setelah produk diterima.</strong></div>
                        </div>
                    </div>
                </div>

                <div class = "row box">
                    <div class= "col text-center" >
                        <div class = "row"  style = "width: 50%; margin: auto">
                            <div class = "col-lg-5">Payment Method:</div>
                            <div class="radio-inline mr-5"><input type="radio" class = "mr-2" name="payment_method" value = "Bank Transfer"/>Bank Transfer</div>
                            <div class="radio-inline"><input type="radio" class = "mr-2" name="payment_method" value = "Giro"/>Giro</div>
                        </div>
                    </div>
                </div>

                <div class = "row box">
                    <div class= "col-lg-10">
                        <div class = "row mb-3">
                            Please Transfer to:
                        </div>

                        <div class = "row">
                            <div class = "col-lg-3">Account Number</div>
                            <div class = "col-lg-8"><strong>179 3000 573</strong> (BCA KCP KHM Mansyur 1)</div>
                        </div>

                        <div class = "row">
                            <div class = "col-lg-3">Account Holder Name</div>
                            <div class = "col-lg-8"><strong>PT Dirgaraya Harsa</strong> </div>
                        </div>
                    </div>
                    <div class = "col-lg-2 img-bank">
                        <img src = "{{asset('assets/img/bca.png')}}" class = "img-thumbnail mt-3">
                    </div>
                </div>

                <div class = "row">
                    <div class = "col text-center">
                        <button type = "submit" class = "btn-circle-primary">Create Order</button>
                    </div>
                </div>
            </form>

        </div>
    </section>
@stop

@section ('custom_js')
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

    $('.btn-save').click(function() {

        if ($(this).val() == 'Change') {
            $('.shipping-form').prop('readonly', false)
            $(this).html('Save')
            $(this).val('Save')
        } else if ($(this).val() == 'Save') {
            var buyer = $('#input-buyer').val()
            var recipient = $('#input-recipient').val()
            var title = $('#input-title').val()
            var phone = $('#input-phone').val()

            if (buyer == '' || recipient == '' || title  == '' || phone == '')
                $('#modal-incomplete').modal('show')
            else {
                $('.shipping-form').prop('readonly', true)
                $(this).html('Change')
                $(this).val('Change')
            }
        }
    });
@stop

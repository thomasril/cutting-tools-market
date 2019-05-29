@extends('layouts/master')

@section('main_content')
    <section id="services" class="section-bg">
        <div class="container">
        <header class="section-header">
            <h3 class="section-title">Checkout</h3>
        </header>
            <div class="row box">
                <div class="col">
                    <h4>Shipping Address</h4>

                    <div class = "row">
                        <div class = "col-lg-4"><strong>{{Auth::user()->name}}:</strong></div>
                        <div class = "col-lg-8">{{Auth::user()->address}}</div>
                    </div>

                    <hr/>
                    <div class="row mt-5" style="width: 50%; margin: auto">
                        <form>
                            <div class = "form-row">
                                <div class = "form-group col-lg-6">Buyer Name: </div>
                                <div class = "form-group col-lg-6"> <input type="text" class = "form-control" name = "buyer-name" placeholder="Buyer name"> </div>
                            </div>

                            <div class = "form-row">
                                <div class = "form-group col-lg-6">Recipient Name: </div>
                                <div class = "form-group col-lg-6"> <input type="text" class = "form-control" name = "name" placeholder="Recipient Name"> </div>
                            </div>

                            <div class = "form-row">
                                <div class = "form-group col-lg-6">Recipient Title: </div>
                                <div class = "form-group col-lg-6"> <input type="text" class = "form-control" name = "title" placeholder="Recipient Title"> </div>
                            </div>

                            <div class = "form-row">
                                <div class = "form-group col-lg-6">Recipient Mobile Number: </div>
                                <div class = "form-group col-lg-6"> <input type="text" class = "form-control" name = "phone" placeholder="Recipient Mobile Number"> </div>
                            </div>

                            <div class = "form-group text-center">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

            <div class = "row box">
                <div class= "col text-center" >
                    <div class = "row"  style = "width: 50%; margin: auto">
                        <div class = "col-lg-5">Order Id</div>
                        <div class = "col-lg-5">Rp.</div>
                    </div>
                    <div class = "row"  style = "width: 50%; margin: auto">
                        <div class = "col-lg-5">Subtotal</div>
                        <div class = "col-lg-5">Rp.</div>
                    </div>
                    <div class = "row"  style = "width: 50%; margin: auto">
                        <div class = "col-lg-5">PPN(10%)</div>
                        <div class = "col-lg-5">Rp.</div>
                    </div>
                    <div class = "row"  style = "width: 50%; margin: auto">
                        <div class = "col-lg-5"><h4>Total Price</h4></div>
                        <div class = "col-lg-5"><h4>Rp.</h4></div>
                    </div>

                    <div class = "row"  style = "width: 60%; margin: auto">
                        <div class = "col"><strong>Mohon dibayarkan dalam waktu 30 hari setelah produk diterima.</strong></div>
                    </div>
                </div>
            </div>

            <div class = "row box">
                <div class= "col text-center" >
                    <div class = "row"  style = "width: 50%; margin: auto">
                        <div class = "col-lg-5">Payment Mehtod:</div>
                        <div class="radio-inline mr-5"><input type="radio" class = "mr-2" name="method" value = "Bank"/>Bank Transfer</div>
                        <div class="radio-inline"><input type="radio" class = "mr-2" name="method" value = "Giro"/>Giro</div>
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
                    <button type = "submit" class = "btn-get-started">Create Order</button>
                </div>
            </div>

        </div>
    </section>
@stop

@section ('custom-js')

@stop

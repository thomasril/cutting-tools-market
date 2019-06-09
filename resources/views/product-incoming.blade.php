@extends('layouts/master')

@section('main_content')
    <section id="services" class="section-bg">
        <div class="container">

            <header class="section-header">
                <h3 class="section-title">Incoming Product Notification</h3>
            </header>
                <div class="row box">
                    @forelse($procurements as $p)
                        <div class = "col-lg-8">
                            Procure ID : <strong>{{$p->procure_id}}</strong>
                        </div>

                        <div class = "col-lg-4">
                            Confirm
                        </div>

                        <div class = "col-lg-12 text-right mt-3">
                            <button type="button" class="btn btn-get-started" data-id = "{{$p->id}}"><strong>Show Detail</strong></button>
                        </div>
                    @empty
                        <div class = "col text-center">
                            <strong>Tidak ada notifikasi</strong>
                        </div>
                    @endforelse
                </div>



                <div class = "row box detail-procure" style="display:none;">
                    <div class = "col-lg-12">
                        <button type="button" class="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    @foreach($procurements as $p)
                        <div class = "col-lg-12 detail-data" id = "detail-{{$p->id}}" style="display: none;">
                            <div class = "row" >
                                <div class = "col-lg-8">
                                    Supplier : <strong>{{$p->supplier}}</strong>
                                </div>

                                <div class = "col-lg-4 ">
                                    Procure Status: <strong>{{$p->status}}</strong>
                                </div>

                                <div class = "col-lg-8">
                                    Procure Date: <strong>{{$p->reorder_date}}</strong>
                                </div>

                                <div class = "col-lg-4">
                                    Delivery Date: <strong>{{$p->delivery_date}}</strong>
                                </div>

                                <div class = "col-lg-12 pl-5 mt-2 pt-2 border-top">
                                    Product Name: <strong>{{$p->product->name}}</strong>
                                </div>

                                <div class = "col-lg-12 pl-5">
                                    Quantity: <strong>{{$p->qty}}</strong>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
        </div>
    </section>
@stop

@section('custom_js')
@stop

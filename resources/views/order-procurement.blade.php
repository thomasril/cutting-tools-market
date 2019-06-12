@extends('layouts/master')

@section('main_content')
    <section id="services" class="section-bg">
        <div class="container">

            <header class="section-header">
                <h3 class="section-title">Procure Order</h3>
            </header>
            <form method = "get" action="/checkout">
                {{csrf_field()}}

                <div class="row box">
                    @forelse($procurements as $p)
                        <div class = "col-lg-8">
                            Procure ID : <strong>{{$p->procure_id}}</strong>
                        </div>

                        <div class = "col-lg-4">
                            Procure Status: <strong>{{$p->status}}</strong>
                        </div>

                        <div class = "col-lg-12 text-right mt-3">
                            <button type="button" class="btn btn-circle-primary btn-show" data-id = "{{$p->id}}"><strong>Show Detail</strong></button>
                        </div>
                    @empty
                        <div class = "col text-center">
                            <strong>Tidak ada item</strong>
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
            </form>
        </div>
    </section>
@stop

@section('custom_js')
    $('.close').click(function(){
        $('.detail-procure').fadeOut("slow")
    })

    $('.btn-show').click(function(){
        var id = $(this).data("id");
    
        $('.detail-procure').fadeIn('slow')
    
        $('#detail-'+id).show().siblings(".detail-data").hide()
    })
@stop

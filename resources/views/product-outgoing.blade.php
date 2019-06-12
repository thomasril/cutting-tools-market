@extends('layouts/master')

@section('main_content')
    <section id="services" class="section-bg">
        <div class="container">

            <header class="section-header">
                <h3 class="section-title">Outgoing Product Notification</h3>
            </header>
            <div class="row box">
                @forelse($sales as $s)
                    <div class = "col-lg-10">
                        PO No : <strong>{{$s->order_id}}</strong>
                    </div>

                    <div class = "col-lg-2" id = "notif-status-{{$s->id}}">
                        Waiting
                    </div>

                    <div class = "col-lg-10" id = "notif-status-{{$s->id}}">
                        Delivery Order No : <strong>{{$s->delivery_id}}</strong>
                    </div>

                    <div class = "col-lg-12 text-right mt-3">
                        <button type="button" class="btn btn-circle-primary" data-id = "{{$s->id}}" data-toggle = "modal" data-target = '#modal-confirm-{{$s->id}}'><strong>Show Detail</strong></button>
                    </div>

                    <div class="modal" id = "modal-confirm-{{$s->id}}" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Notification</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>
                                        Reorder dilakukan tanggal {{$s->order_date}}<br/>
                                        Dengan detail reorder sebagai berikut:
                                    </p>

                                    <div class = "row border-bottom">
                                        <div class = "col-lg-6">Product Name</div>
                                        <div class = "col-lg-6 text-center">Quantity</div>
                                    </div>


                                    @foreach($s->salesDetails as $sd)
                                        <div class = "row mt-2">
                                            <div class = "col-lg-6">{{$sd->product->name}}</div>
                                            <div class = "col-lg-6 text-center">{{$sd->qty}}</div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="modal-footer">
                                    <div class = "row">
                                        <div class = "col text-center">
                                            <button type = "button" class = "btn-circle-primary btn-confirm" data-id = {{$s->id}}>Confirm</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class = "col text-center">
                        <strong>Tidak ada notifikasi</strong>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@stop

@section('custom_js')
    $('.btn-confirm').click(function () {
        var id = $(this).data('id')
        $('#notif-status-'+id).html('Confirmed')
    })
@stop

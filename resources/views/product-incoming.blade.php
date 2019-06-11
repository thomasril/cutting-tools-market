@extends('layouts/master')

@section('main_content')
    <section id="services" class="section-bg">
        <div class="container">

            <header class="section-header">
                <h3 class="section-title">Incoming Product Notification</h3>
            </header>
                <div class="row box">
                    @forelse($procurements as $p)
                        <div class = "col-lg-10">
                            Procure ID : <strong>{{$p->procure_id}}</strong>
                        </div>

                        <div class = "col-lg-2" id = "notif-status-{{$p->id}}">
                            Waiting
                        </div>

                        <div class = "col-lg-12 text-right mt-3">
                            <button type="button" class="btn btn-get-started" data-id = "{{$p->id}}" data-toggle = "modal" data-target = '#modal-confirm-{{$p->id}}'><strong>Show Detail</strong></button>
                        </div>

                        <div class="modal" id = "modal-confirm-{{$p->id}}" tabindex="-1" role="dialog">
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
                                            Reorder dilakukan tanggal {{$p->reorder_date}}<br/>
                                            Dengan detail reorder sebagai berikut:
                                        </p>

                                        <div class = "row border-bottom">
                                            <div class = "col-lg-6">Product Name</div>
                                            <div class = "col-lg-6 text-center">Quantity</div>
                                        </div>

                                        <div class = "row mt-2">
                                            <div class = "col-lg-6">{{$p->product->name}}</div>
                                            <div class = "col-lg-6 text-center">{{$p->qty}}</div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div class = "row">
                                            <div class = "col text-center">
                                                <button type = "button" class = "btn-get-started btn-confirm" data-id = {{$p->id}}>Confirm</button>
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
        alert(id);
        $('#notif-status-'+id).html('Confirmed')
    })
@stop

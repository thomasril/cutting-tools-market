@extends('layouts/master')

@section('main_content')
    <section id="services" class="section-bg">
        <div class="container">

            <header class="section-header">
                <h3 class="section-title">Outgoing Product Notification</h3>
            </header>
            <div class="row box" style ="padding: 10px">
                @forelse($sales as $s)
                    <div class = "col-lg-10 mt-2">
                        PO No : <strong>{{$s->order_id}}</strong>
                    </div>

                    <div class = "col-lg-2 mt-2" id = "notif-status-{{$s->id}}">
                        {{$s->notif_status}}
                    </div>

                    <div class = "col-lg-10" id = "notif-status-{{$s->id}}">
                        Delivery Order No : <strong>{{$s->delivery_id}}</strong>
                    </div>

                    <div class = "col-lg-12 text-right border-bottom" style="margin-top: -10px">
                        <button type="button" class="btn btn-circle-primary" data-id = "{{$s->id}}" data-toggle = "modal" data-target = '#modal-confirm-{{$s->id}}'><strong>Show Detail</strong></button>
                    </div>

                    <div class="modal" id = "modal-confirm-{{$s->id}}" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Notification</h5>

                                </div>
                                <div class="modal-body">
                                    <p>
                                        Reorder dilakukan tanggal {{date('d M Y', strtotime($s->order_date))}}<br/>
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
                                <form method = "post" action="/notification/outgoing">
                                    {{csrf_field()}}
                                    <div class="modal-footer">
                                        <div class="container-fluid">
                                            <div class="row justify-content-md-center">
                                                <input type = "hidden"  name = "id" value = "{{$s->id}}">
                                                <div class="col-md-4">
                                                    @if ($s->notif_status != 'Confirmed')
                                                        <button type = "submit" class = "btn-circle-primary btn-confirm">Confirm</button>
                                                    @else
                                                        <button type = "button" class = "btn-circle-secondary" data-dismiss = "modal">Close</button>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
@stop

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
                            {{$p->notif_status}}
                        </div>

                        <div class = "col-lg-12 text-right mt-3 border-bottom mb-2">
                            <button type="button" class="btn btn-circle-primary" data-id = "{{$p->id}}" data-toggle = "modal" data-target = '#modal-confirm-{{$p->id}}'><strong>Show Detail</strong></button>
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
                                            Reorder dilakukan tanggal {{date('d M Y', strtotime($p->reorder_date))}}<br/>
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
                                    <form method = "post" action="/notification/incoming">
                                        {{csrf_field()}}
                                        <div class="modal-footer">
                                            <div class="container-fluid">
                                                <div class="row justify-content-md-center">
                                                    <input type = "hidden"  name = "id" value = "{{$p->id}}">
                                                    <div class="col-md-4">
                                                        @if ($p->notif_status != 'Confirmed')
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

                <div class = "row justify-content-md-center">
                    <div class = "col-md-auto">{{$procurements->links()}}</div>
                </div>
        </div>
    </section>
@stop

@section('custom_js')

@stop

@extends('layouts/master')

@section('main_content')
    <section id="services" class="section-bg">
        <div class="container">
            <header class="section-header">
                <h3 class="section-title">{{$header}}</h3>
            </header>

                <div class="row box">

                    @forelse($sales as $s)
                        <div class = "col-lg-8">
                            @if (Auth::user()->role == 'Finance Manager' || Auth::user()->role == 'Director')
                                Invoice ID : <strong>{{$s->invoice_id}}</strong>
                            @else
                                Order ID : <strong>{{$s->order_id}}</strong>
                            @endif
                        </div>

                        <div class = "col-lg-4">
                            Order Status: <strong>{{$s->status}}</strong>
                        </div>

                        <div class = "col-lg-12">
                            Total Price: <strong>Rp. {{number_format($s->total_price)}}</strong>
                        </div>

                        <div class = "col-lg-8 mt-3">
                            @if (Auth::user()->role == 'Customer')
                                @if ($s->status != 'Order Cancelled')
                                    <button type="button" class="btn btn-circle-primary btn-cancel" data-toggle="modal" data-target="#modal-delete" data-id="{{$s->id}}"><strong>Cancel Order</strong></button>
                                @endif
                                <a href="/order/{{$s->id}}/purchase"><button type="button" class="btn btn-circle-primary btn-show"><strong>View PO</strong></button></a>
                            @elseif (strpos(Auth::user()->role, 'Manager') || Auth::user()->role == 'Director')
                                @if (Auth::user()->role == 'Sales Manager')
                                    <a href="/order/{{$s->id}}/purchase"><button type="button" class="btn btn-circle-primary"><strong>View PO</strong></button></a>
                                    <a href="/order/{{$s->id}}/delivery"><button type="button" class="btn btn-circle-primary"><strong>View Delivery Order</strong></button></a>
                                @endif
                                <a href="/order/{{$s->id}}/invoice"><button type="button" class="btn btn-circle-primary"><strong>View Invoice</strong></button></a>
                            @endif
                        </div>
                        <form method = "post" action ="/order/delete">
                            {{csrf_field()}}
                            <div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" >Cancel Order</h5>

                                        </div>
                                        <div class="modal-body">
                                            <input type="hidden" name= "id" id = "order-id">
                                                Anda benar - benar ingin membatalkan pesanan?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                            <button type="submit" class="btn btn-primary" >Yes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <div class = "col-lg-4 mt-3">
                            <button type="button" class="btn btn-circle-primary btn-show-detail" data-id = "{{$s->id}}"><strong>Show Detail</strong></button>
                        </div>

                        <div class = "col-lg-12 border-bottom mb-2"></div>
                    @empty
                        <div class = "col text-center">
                            <strong>Tidak ada item</strong>
                        </div>
                    @endforelse
                </div>

                <div class = "row justify-content-md-center">
                    <div class = "col-md-auto">{{$sales->links()}}</div>
                </div>

                <div class = "row box detail-sales" style="display: none;">
                    <div class = "col-lg-12">
                        <button type="button" class="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    @foreach($sales as $s)
                        <div class = "col-lg-12 detail-data" id = "detail-{{$s->id}}" style="display: none;">
                            <div class = "row mt-3" >
                                <div class = "col-lg-8">
                                    Company Name : <br/><strong>{{$s->buyer->name}}</strong>
                                </div>

                                <div class = "col-lg-4 ">
                                    Order Status: <br/><strong id = "order-status-{{$s->id}}">{{$s->status}}</strong>

                                    <select name = "new-status" id = "combo-status-{{$s->id}}" class = "form-control mb-2" style="display: none">
                                        @if (Auth::user()->role == 'Sales Manager')
                                            <option value = "dispatched">Order Dispatched</option>
                                        @elseif (Auth::user()->role == 'Finance Manager')
                                            <option value = "completed">Order Paid</option>
                                        @endif
                                    </select>

                                    @if ($s->status != 'Order Cancelled' && $s->status != 'Order Finished' && strpos(Auth::user()->role, 'Manager'))
                                        @if ((Auth::user()->role == 'Finance Manager' && $s->status == 'Order Dispatched') ||
                                             (Auth::user()->role == 'Sales Manager' && $s->status == 'Order Placed'))
                                            <button class = "btn btn-info ml-1 btn-change" style = "height: 35px" data-id="{{$s->id}}"><i class="fas fa-edit" ></i></button>
                                        @endif
                                    @endif

                                    <button class = "btn btn-success ml-1 btn-accept" data-toggle="modal" data-target="#modal-update" style = "height: 35px; display: none" data-id="{{$s->id}}"><i class="fas fa-check" ></i></button>
                                </div>

                                <div class = "col-lg-6 mt-3">
                                    Company Address: <br/><strong>{{$s->buyer->address}}</strong>
                                </div>

                                <div class = "col-lg-2 mt-3"></div>

                                    <div class = "col-lg-4 pb-2 mt-3">
                                        Delivery Date:<br/> <strong id = "delivery-date-{{$s->id}}">{{($s->delivery_date == '1970-01-01') ? '' : date ('d M Y',strtotime($s->delivery_date))}}</strong>
                                        @if (Auth::user()->role == 'Sales Manager')
                                            <input type="date" name="delivery_date" id = "input-date-{{$s->id}}" class = "form-control" style="display: none">
                                        @endif
                                    </div>

                                <div class = "col-lg-8 pb-2 mt-3">
                                    Recepient Name: <br/><strong>{{$s->recipient_name}}</strong>
                                </div>

                                <div class = "col-lg-4 mt-3">
                                    @if (Auth::user()->role == 'Finance Manager')
                                        No. Invoice:<br/> <strong>{{$s->invoice_id}}</strong>
                                    @else
                                        Order Id: <br/><strong>{{$s->order_id}}</strong>
                                    @endif
                                </div>

                                <div class = "col-lg-12 border-bottom"></div>

                                @foreach($s->salesDetails as $d)
                                    <div class = "col-lg-12 pl-5 mt-2">
                                        Product Name: <strong>{{$d->product->name}}</strong>
                                    </div>

                                    <div class = "col-lg-8 pl-5">
                                        Quantity: <strong>{{$d->qty}}</strong>
                                    </div>

                                    <div class = "col-lg-4">
                                        Sum: <strong>Rp. {{number_format($d->qty * $d->product->price)}}</strong>
                                    </div>
                                @endforeach

                                <div class = "col-lg-8 mt-2 pt-2 border-top text-right">
                                </div>

                                <div class = "col-lg-4 mt-2 pt-2 border-top ">
                                    Payment Method: <strong>{{$s->payment_method}}</strong>
                                </div>

                                <div class = "col-lg-8 mt-2">
                                </div>

                                <div class = "col-lg-4 mt-2">
                                    Total Price: <strong class = "text-danger h4">Rp. {{number_format($s->total_price)}}</strong>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            <form method = "post" action ="/order/update">
                {{csrf_field()}}
                <div class="modal fade" id="modal-update" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" >Update Order Status</h5>

                            </div>
                            <div class="modal-body">
                                <input type="hidden" name= "id" id = "order-id">
                                <input type="hidden" name= "status" id = "order-status">
                                <input type="hidden" name= "date" id = "order-delivery-date">
                                Anda benar - benar ingin mengganti status dan tanggal pengiriman?
                            </div>
                            <div class="modal-footer">
                                <div class="container-fluid">
                                    <div class="row justify-content-md-center">
                                        <div class="col-md-3">
                                            <button type="button" class="btn btn-circle-secondary" data-dismiss="modal">No</button>
                                        </div>

                                        <div class="col-md-3">
                                            <button type="submit" class="btn btn-circle-primary" >Yes</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </section>
@stop

@section('custom_js')
    $(document).ready(function(){
        function alignModal(){
            var modalDialog = $(this).find(".modal-dialog")
            modalDialog.css("margin-top", Math.max(0, ($(window).height() - modalDialog.height()) / 2));
        }

        $(".modal").on("shown.bs.modal", alignModal)

        $(window).on("resize", function(){
        $(".modal:visible").each(alignModal)
        });
    });

    $('.close').click(function(){
        $('.detail-sales').fadeOut("slow")
    })

    $('.btn-show-detail').click(function(){
        var id = $(this).data("id")
        $('.detail-sales').fadeIn('slow')

        $('#detail-'+id).show().siblings(".detail-data").hide()
    })

    $('.btn-change').click(function(){
        var id = $(this).data("id")

        $('#order-status-'+id).toggle()
        $('.btn-accept').toggle()
        $('#combo-status-'+id).toggle()
        $('#delivery-date-'+id).toggle()
        $('#input-date-'+id).toggle()
    })

    $('#modal-update').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var id = button.data('id')
        var status = $('#combo-status-'+id).val()
        var date = $('#input-date-'+id).val()

        var modal = $(this)
        modal.find('.modal-body #order-id').val(id)
        modal.find('.modal-body #order-status').val(status)
        modal.find('.modal-body #order-delivery-date').val(date)
    })

    $('#modal-delete').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var id = button.data('id')

        var modal = $(this)
        modal.find('.modal-body #order-id').val(id)
    })
@stop

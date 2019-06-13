@extends('layouts/master')

@section('main_content')
    <section id="services" class="section-bg">
        <div class="container">
            <div class = "row">
                <div class = "col ml-3 mt-3">
                    <a href = "/order" style = "color: black"> Order </a> » {{$sales->order_id}} » <strong>{{$header}}</strong>
                </div>
            </div>

            <header class="section-header">
                <h3 class="section-title">{{$header}}</h3>
            </header>

            <div class="row box">
                <div class = "col-lg-12">
                    <div class = "row justify-content-md-center">
                        <div class = "col-lg-2">
                            <img class="img-thumbnail" src = "{{asset('assets/img/icon.png')}}">
                        </div>
                        <div class = "col-lg-5">
                            <h4><strong>PT. Dirgaraya Harsa</strong></h4>
                            <p>
                                Sawah Lio No. 50, Jakarta 11250 <br/>
                                Telp. (021) 6308312 Fax (021) 6335625
                            </p>
                        </div>
                    </div>
                </div>
                @if($header == 'Purchase Order')
                    <div class = "col-lg-9 text-right">No</div>
                    <div class = "col-lg-3">
                        : {{$sales->order_id}}
                    </div>
                    <div class = "col-lg-9 text-right">Tanggal PO</div>
                    <div class = "col-lg-3">
                        : {{date ('d M Y',strtotime($sales->order_date))}}
                    </div>

                    <div class = "col-lg-12 mt-5">
                        <div class="row justify-content-md-center">
                            <h3>{{$header}}</h3>
                            <div class = "col-lg-12">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Barang</th>
                                        <th>Quantity</th>
                                        <th>Harga Satuan</th>
                                        <th>Jumlah</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($details as $index => $d)
                                            <tr>
                                                <td>{{$index+1}}</td>
                                                <td>{{$d->product->name}}</td>
                                                <td>{{$d->qty}}</td>
                                                <td>Rp. {{number_format($d->product->price)}}</td>
                                                <td>Rp. {{number_format($d->product->price * $d->qty)}}</td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>subtotal</td>
                                            <td>Rp. {{number_format($sales->subtotal)}}</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>PPN</td>
                                            <td>Rp. {{number_format($sales->subtotal * 10 /100)}}</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>Total</td>
                                            <td><strong>Rp. {{number_format($sales->total_price)}}</strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-lg-12">
                                Metode Pembayaran: {{$sales->payment_method}}
                            </div>
                            <div class="col-lg-12">
                               Batas Pembayaran  : 30 hari sejak barang diterima
                            </div>
                        </div>
                    </div>

                        <div class = "col-lg-8 mt-5">
                            <div class = "row" >
                                <div class = "col">Disetujui</div>
                            </div>
                            <div class = "row" style="margin-top: 150px">
                                <div class = "col">(Liliana Harsono)</div>
                            </div>
                        </div>

                        <div class = "col-lg-4 mt-5">
                            <div class = "row">
                                <div class = "col">{{$sales->buyer->name}}</div>
                            </div>
                            <div class = "row" style="margin-top: 150px">
                                <div class = "col"> ({{$sales->buyer_name}}) </div>
                            </div>
                        </div>

                @elseif ($header == 'Delivery Order')
                        <div class = "col-lg-8 text-right">Tanggal </div>
                        <div class = "col-lg-4">: {{date ('d M Y',strtotime($sales->order_date))}}</div>

                        <div class = "col-lg-1">No. PO</div>
                        <div class = "col-lg-3">: {{$sales->order_id}}</div>
                        <div class = "col-lg-4 text-right">Perusahaan</div>
                        <div class = "col-lg-4">: {{$sales->buyer->name}}</div>
                        <div class = "col-lg-8">No. Delivery : {{$sales->delivery_id}}</div>
                        <div class = "col-lg-4">{{$sales->buyer->address}}</div>

                        <div class = "col-lg-12 mt-5">
                            <div class="row justify-content-md-center">
                                <h3>{{$header}}</h3>
                                <div class = "col-lg-12">
                                    <table class="table table-striped text-center">
                                        <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama Barang</th>
                                            <th>Quantity</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($details as $index => $d)
                                            <tr>
                                                <td>{{$index+1}}</td>
                                                <td>{{$d->product->name}}</td>
                                                <td>{{$d->qty}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class = "col-lg-8 mt-5">
                            <div class = "row" >
                                <div class = "col">Tanda Terima</div>
                            </div>
                            <div class = "row" style="margin-top: 150px">
                                <div class = "col">({{$sales->recipient_name}})</div>
                            </div>
                        </div>

                        <div class = "col-lg-4 mt-5">
                            <div class = "row">
                                <div class = "col">Hormat kami,</div>
                            </div>
                            <div class = "row" style="margin-top: 150px">
                                <div class = "col"> PT. Dirgaraya Harsa </div>
                            </div>
                        </div>
                    @elseif ($header == 'Invoice')
                        <div class = "col-lg-2">No. PO</div>
                        <div class = "col-lg-6"> : {{$sales->order_id}}</div>
                        <div class = "col-lg-4">Jakarta, {{date ('d M Y',strtotime($sales->invoice_date))}}</div>

                        <div class = "col-lg-2">No. Surat Jalan</div>
                        <div class = "col-lg-6"> : {{$sales->delivery_id}}</div>
                        <div class = "col-lg-4">Kepada : {{$sales->buyer->name}}</div>

                        <div class = "col-lg-2">No. Invoice</div>
                        <div class = "col-lg-7"> : {{$sales->invoice_id}}</div>
                        <div class = "col-lg-3">{{$sales->buyer->address}}</div>

                        <div class = "col-lg-12 mt-5">
                            <div class="row justify-content-md-center">
                                <h3>{{$header}}</h3>
                                <div class = "col-lg-12">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama Barang</th>
                                            <th>Quantity</th>
                                            <th>Harga Satuan</th>
                                            <th>Jumlah</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($details as $index => $d)
                                            <tr>
                                                <td>{{$index+1}}</td>
                                                <td>{{$d->product->name}}</td>
                                                <td>{{$d->qty}}</td>
                                                <td>Rp. {{number_format($d->product->price)}}</td>
                                                <td>Rp. {{number_format($d->product->price * $d->qty)}}</td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>subtotal</td>
                                            <td>Rp. {{number_format($sales->subtotal)}}</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>PPN</td>
                                            <td>Rp. {{number_format($sales->subtotal * 10 /100)}}</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>Total</td>
                                            <td><strong>Rp. {{number_format($sales->total_price)}}</strong></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class = "col-lg-8 mt-5">
                            <div class = "row" >
                                <div class = "col">Pembayaran ditujukan kepada:</div>
                            </div>
                            <div class = "row">
                                <p class="col">
                                    PT Dirgaraya Harsa <br/>
                                    (BCA KCP KHM Mansyur 1) <br/>
                                    179 3000 573 <br/>
                                </p>
                            </div>
                        </div>

                        <div class = "col-lg-4 mt-5">
                            <div class = "row">
                                <div class = "col">Hormat Kami</div>
                            </div>
                            <div class = "row" style="margin-top: 150px">
                                <div class = "col"> PT. Dirgaraya Harsa </div>
                            </div>
                        </div>
                    @endif
                </div>

            <div class = "row">
                <div class = "col text-center">
                    @if ($header == 'Purchase Order' || $header == 'My Order')
                        <a href = "/order/{{$sales->id}}/purchase/pdf"><button type = "button" class = "btn-circle-primary">Save</button></a>
                    @elseif ($header == 'Delivery Order')
                       <a href = "/order/{{$sales->id}}/delivery/pdf"><button type = "button" class = "btn-circle-primary">Save</button></a>
                    @elseif ($header == 'Invoice')
                       <a href = "/order/{{$sales->id}}/invoice/pdf"><button type = "button" class = "btn-circle-primary">Save</button></a>
                    @endif

                    <a href="/order"><button type = "button" class = "btn-circle-primary">Back to {{$header == 'Purchase Order' ? 'Customer Order' : 'My Order'}}</button></a>
                </div>
            </div>
        </div>
    </section>
@stop

@section('custom_js')

@stop

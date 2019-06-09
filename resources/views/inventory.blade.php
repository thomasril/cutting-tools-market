@extends('layouts/master')

@section('main_content')

    <section id="services" class="section-bg">
        <div class="container">
            <header class="section-header">
                <h3 class="section-title">Inventory</h3>
            </header>

                <div class = "row box">
                    @foreach($types as $type)
                        <div class = "col-lg-6">
                            <h4>{{$type[0]->productType->full_name}}</h4>

                            <table class="table">
                                <tr>
                                    <th>Product Id</th>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>DOI</th>
                                    <th>Lot Size</th>
                                </tr>
                                @foreach($type as $product)
                                    <tr>
                                        <td>{{$product->product_id}}</td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->stock}}</td>
                                        <td>{{floor(($product->stock * $product->lot_size) / 22 * 100 ) / 100}}</td>
                                        <td>{{$product->lot_size}}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    @endforeach
                </div>
            </div>
    </section>
@stop

@section('custom_js')

@stop

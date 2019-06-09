@extends('layouts/master')

@section('main_content')
    <section id="services" class="section-bg">
        <div class = "container">

            <div class = "row">
                <div class = "col ml-3 mt-3">
                    Procurement » <strong>Reorder Activity</strong>
                </div>
            </div>

            <header class="section-header">
                <h3 class="section-title">Reorder Activity</h3>
                <p>Isi detail pemesanan ke supplier.</p>
            </header>

            @if($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{$errors->first()}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <div class = "row box">
                <div class = "col">
                    <form method = "post" action="/reorder/insert">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label class="col-form-label">Reorder Date:</label>
                            <input type="date" class = "form-control" placeholder="Reorder Date" name = "reorder_date" required>
                        </div>

                        <div class="form-group">
                            <label class="col-form-label">Product Type:</label>
                            <select class = "form-control" id = "combo-type">
                                @foreach($types as $type)
                                    <option value = "{{$type->type_id}}">{{$type->full_name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="col-form-label">Product Name:</label>
                            @foreach($products as $product)
                                <select class = "form-control combo-products" id = "combo-product-{{$product[0]->productType->type_id}}" style="display: none;">
                                    @foreach($product as $p)
                                        <option value = "{{$p->product_id . '|' . $product[0]->productCategory->category_id}}">{{$p->name}}</option>
                                    @endforeach
                                </select>
                            @endforeach
                            <input type="hidden" name = "product_id" id ="product_id_hidden" value="100410">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Reorder Quantity:</label>
                            <input type="number" class = "form-control" placeholder="Type Reorder Quantity" name = "qty" min = "1" required>
                        </div>

                        <div class="form-group">
                            <label class="col-form-label">Delivery Date:</label>
                            <input type="date" class = "form-control" name = "delivery_date" required>
                        </div>

                        <div class="form-group">
                            <label class="col-form-label">Supplier:</label>
                            <select class = "form-control" name = "supplier">
                                <option>Select Supplier</option>
                                @foreach($suppliers as $s)
                                    <option value = "{{$s->initial}}">{{$s->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-get-started">Save</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
@stop

@section('custom_js')
    $('#combo-product-1').show();

    $('#combo-type').on('change', function() {
        var type_id = this.value

        $('#combo-product-' + type_id).show().siblings("select").hide();
    });

    $('.combo-products').change(function(){
        var split = this.value.split('|');
        $('#product_id_hidden').val(split[0]);
        $('#category_id_hidden').val(split[1]);
    });
@stop

@extends('layouts/master')

@section('main_content')

    <section id="services" class="section-bg">
        <div class="container">

            <div class = "row">
                <div class = "col ml-3 mt-3">
                    <a href = "/" style = "color: black"> Catalogue </a> » {{$category->name}} » <strong>Manage</strong>
                </div>
            </div>

            <header class="section-header">
                <h3 class="section-title">{{$category->name}}</h3>
`            </header>
                @foreach($types as $type)
                    <div class="row mb-5 box">
                        <div class = "col-lg-4 col-md-6">
                            <div class = "row">
                                <div class = "col">
                                    <h4>{{$type[0]->productType->name}}</h4>
                                    <div id="carosel-product-{{$type[0]->productType->type_id}}" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">

                                            @foreach($pictures as $index => $picture)
                                                @if ($picture->type_id == $type[0]->productType->type_id)
                                                    <div class="carousel-item" id = "carousel-img-{{$index}}">
                                                        <img class="d-block w-100" src="{{asset('assets/img/products/'.$picture->path)}}">
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                        <a class="carousel-control-prev" href="#carosel-product-{{$type[0]->productType->type_id}}" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carosel-product-{{$type[0]->productType->type_id}}" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class = "row mt-5">
                                <div class = "col">
                                    <h4>Add New Product</h4>

                                    @if($errors->any())
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            {{$errors->first()}}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endif

                                    <form method = "post" action="/catalogue/insert" id = "form-insert">
                                        {{csrf_field()}}
                                        <div class = "form-group">
                                            <input type = "text" name = "id" class = "form-control" placeholder="Product Id" required>
                                            <input type = "hidden" name = "category_id" class = "form-control" placeholder="Category Id" value = "{{$category->category_id}}">
                                            <input type = "hidden" name = "type_id" class = "form-control" placeholder="Product Id" value = "{{$type[0]->productType->type_id}}">
                                        </div>
                                        <div class = "form-group">
                                            <input type = "text" name = "name" class = "form-control" placeholder="Product Name" required>
                                        </div>
                                        <div class = "form-group">
                                            <input type = "number" name = "price" class = "form-control" placeholder="Product Price" min = "0">
                                        </div>

                                        <div class = "form-group">
                                            <input type = "number" name = "lot" class = "form-control" placeholder="Product Lot Size" min = "0">
                                        </div>
                                        <div class = "form-group">
                                            <button type = "submit" class = "btn btn-primary">Add</button>
                                            <button type = "reset" class = "btn btn-light">Clear</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class = "col-lg-8 col-md-6">
                            <table class="table">
                                <tr>
                                    <th>Product Name</th>
                                    <th>Price (Rp.)</th>
                                    <th>Action</th>
                                </tr>
                                @foreach($type as $product)
                                    <tr>
                                        <input type="hidden" name = "product_id[]" value="{{$product->product_id}}">
                                        <td>{{$product->name}}</td>
                                        <td>Rp. {{number_format($product->price)}}</td>
                                        <td>
                                            <button type = "button" class = "btn btn-info" data-toggle="modal" data-target="#modal-update" data-id="{{ $product->product_id }}" data-name="{{ $product->name }}" data-price="{{$product->price}}"><i class="fas fa-edit"></i></button>
                                            <button type="button" class="btn btn-danger btnDelete" data-toggle="modal" data-target="#modal-delete" data-id="{{ $product->product_id }}" data-name="{{ $product->name }}"><i class="fas fa-trash"></i></button>

                                            <div class="modal fade" id="modal-update" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" >Update Product</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form method = "post" action="/catalogue/update">
                                                            {{csrf_field()}}
                                                            <div class="modal-body">
                                                                <input type="hidden" name= "id" id = "product-id">
                                                                <div class="form-group">
                                                                    <label class="col-form-label">Name:</label>
                                                                    <input type="text" class="form-control" id="product-name" name="name">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="message-text" class="col-form-label">Price:</label>
                                                                    <input type="number" class="form-control" id="product-price" name = "price">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Update</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" >Remove Product</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form method = "post" action="/catalogue/delete">
                                                            {{csrf_field()}}
                                                            <div class="modal-body">
                                                                <input type="hidden" name= "id" id = "product-id">
                                                                Apakah anda yakin untuk menghapus <strong id = "deleted-product"></strong> ?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                                                <button type="submit" class="btn btn-primary">Yes</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                @endforeach
            <div class = "row box">
                <div class = "col">
                    <div class = "row">
                        <h4>Product Description</h4>
                        <button data-toggle = "modal"
                                data-id = "{{$category->category_id}}"
                                data-name = "{{$category->name}}"
                                data-material = "{{isset($category->material) ? $category->material : ''}}"
                                data-flutes = "{{isset($category->flutes) ? $category->flutes : ''}}"
                                data-coating = "{{isset($category->coating) ? $category->coating : ''}}"
                                data-hardness = "{{isset($category->hardness) ? $category->hardness : ''}}"
                                data-target="#modal-desc-update" class = "btn btn-info ml-2" id = "btn-update-desc" style = "height: 35px; margin-top: -5px"><i class="fas fa-edit" ></i></button>
                    </div>

                    <div class = "row">
                        <div class = "col-lg-1">Material</div>
                        <div class = "col-lg-11"><label>: {{$category->material}}</label></div>
                    </div>

                    @if(isset($category->flutes))
                        <div class = "row">
                            <div class = "col-lg-1">Flutes</div>
                            <div class = "col-lg-11"><label>: {{$category->flutes}}</label></div>
                        </div>
                    @endif

                    @if(isset($category->coating))
                        <div class = "row">
                            <div class = "col-lg-1">Coating</div>
                            <div class = "col-lg-11"><label>: {{$category->coating}}</label></div>
                        </div>
                    @endif

                    @if(isset($category->hardness))
                        <div class = "row">
                            <div class = "col-lg-1">Hardness</div>
                            <div class = "col-lg-11"><label>: {{$category->hardness}}</label></div>
                        </div>
                    @endif

                    <div class="modal fade" id="modal-desc-update" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" >Update Category</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form method = "post" action="/category/update">
                                    {{csrf_field()}}
                                    <div class="modal-body">
                                        <input type="hidden" name= "id" id = "category-id">
                                        <div class="form-group">
                                            <label class="col-form-label">Material:</label>
                                            <input type="text" class="form-control" id="material" name="material">
                                        </div>
                                        <div class="form-group" id="flutes" style="display:none">
                                            <label for="message-text" class="col-form-label">Flutes:</label>
                                            <input type="text" class="form-control" name = "flutes">
                                        </div>
                                        <div class="form-group" id="coating" style="display:none">
                                            <label for="message-text" class="col-form-label">Coating:</label>
                                            <input type="text" class="form-control"  name = "coating">
                                        </div>
                                        <div class="form-group" id="hardness" style="display:none">
                                            <label for="message-text" class="col-form-label">Hardness:</label>
                                            <input type="text" class="form-control"  name = "hardness">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('custom_js')
    $(document).ready(function(){
        function alignModal(){
            var modalDialog = $(this).find(".modal-dialog");

            // Applying the top margin on modal dialog to align it vertically center
            modalDialog.css("margin-top", Math.max(0, ($(window).height() - modalDialog.height()) / 2))
        }
        // Align modal when it is displayed
        $(".modal").on("shown.bs.modal", alignModal);

        // Align modal when user resize the window
        $(window).on("resize", function(){
            $(".modal:visible").each(alignModal);
        })

        $('.carousel-inner').find('.carousel-item').first().addClass('active');
        $('.carousel-inner').find('#carousel-img-3').addClass('active');
        $('.carousel-inner').find('#carousel-img-9').addClass('active');
        $('.carousel-inner').find('#carousel-img-15').addClass('active');
        $('.carousel-inner').find('#carousel-img-21').addClass('active');
        $('.carousel-inner').find('#carousel-img-27').addClass('active');
        $('.carousel-inner').find('#carousel-img-33').addClass('active');
    })

    $('#modal-update').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var id = button.data('id')
        var name = button.data('name') // Extract info from data-* attributes
        var price = button.data('price')

        var modal = $(this)
        modal.find('.modal-body #product-id').val(id)
        modal.find('.modal-body #product-name').val(name)
        modal.find('.modal-body #product-price').val(price)
    })

    $('#modal-delete').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var id = button.data('id')
        var name = button.data('name')

        var modal = $(this)
        modal.find('.modal-body #product-id').val(id)
        modal.find('.modal-body #deleted-product').html(name)
    })

    $('#modal-desc-update').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var name = button.data('name')
        var material = button.data('material')
        var flutes = button.data('flutes')
        var coating = button.data('coating')
        var hardness = button.data('hardness')

        var modal = $(this)
        modal.find('.modal-title').text('Update Product for ' + name)
        modal.find('.modal-body #category-id').val(id)
        modal.find('.modal-body #material').val(material)

        if (flutes != ''){
            modal.find('.modal-body #flutes').show()
            modal.find('.modal-body #flutes input').val(flutes)
        }
        if (coating != ''){
            modal.find('.modal-body #coating').show().val(coating)
        modal.find('.modal-body #coating input').val(coating)
        }
        if (hardness != ''){
            modal.find('.modal-body #hardness').show().val(hardness)
            modal.find('.modal-body #hardness input').val(hardness)
        }
    })
@stop

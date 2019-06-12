@extends('layouts/master')

@section('main_content')

    <section id="services" class="section-bg">
        <div class="container">
            <header class="section-header">
                <h3 class="section-title">Confirm your company profile</h3>
                <p>Periksa kembali data perusahaan Anda. Pastikan Anda telah mengisinya dengan benar.</p>
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
                    <form method = "post" action="/register">
                        {{csrf_field()}}
                        <div class="form-group">
                            <input type="text"  class = "form-control input-name"  placeholder="Company Name" name = "name" required value = "{{$user->name}}">
                        </div>

                        <div class="form-group">
                            <input type="text"  class = "form-control"  placeholder="Company Phone Number" name = "phone" required value = "{{$user->phone}}">
                        </div>

                        <div class="form-group">
                            <textarea rows="4" cols="50"  class = "form-control" required  placeholder="Company Address" name="address">{{$user->address}}</textarea>
                        </div>
                        <div class="form-group">
                            <input type="email"  class = "form-control"  placeholder="Company Email" name = "email" required value = "{{$user->email}}">
                        </div>

                        <div class="form-group">
                            <input type="text"  class = "form-control"  placeholder="Username" name = "username" value = "{{$user->username}}" readonly>
                        </div>

                        <div class="form-group">
                            <input type="password"  class = "form-control"  placeholder="Password" name = "password" value = "{{$user->password}}" readonly>
                        </div>

                        <div class="form-group text-center">
                            <button type="button" class="btn btn-circle-primary btn-ok" data-toggle="modal" data-target = "#modal-confirm">Ok</button>
                        </div>

                        <div class="modal fade" id="modal-incomplete"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Incomplete Information</h5>
                                    </div>
                                    <div class="modal-body">
                                        Anda belum mengisi dengan lengkap informasi di halaman ini.
                                        Silakan lengkapi terlebih dahulu.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="modal-confirm"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Confirm your email address</h5>
                                    </div>
                                    <div class="modal-body">
                                        Untuk mengaktifkan akun Anda, lakukan verifikasi pada alamat email {{$user->email}}
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Ok</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </div>
    </section>
@stop

@section('custom_js')
    $(document).ready(function () {
        function alignModal(){
            var modalDialog = $(this).find(".modal-dialog")
            modalDialog.css("margin-top", Math.max(0, ($(window).height() - modalDialog.height()) / 2))
        }
        $(".modal").on("shown.bs.modal", alignModal)

        $(window).on("resize", function(){
            $(".modal:visible").each(alignModal)
        })
    })

    $('.btn-ok').click(function() {
        var name = $('.input-name').val();
        alert(name)

        if (name == '') {
            $('.btn-ok').attr('data-target', '#modal-incomplete')
        } else {
            $('.btn-ok').attr('data-target', '#modal-confirm')

    })

@stop

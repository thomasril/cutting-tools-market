@extends('layouts/master')

@section('main_content')
    @if($errors->any())

        <div class="alert alert-danger alert-dismissible fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{$errors->first()}}
        </div>
    @endif

    <form class="form-horizontal" style = "margin: auto; width:500px; margin-top: 20px;" method = "post" action="/register">
        <div class="control-group">
            <div class="controls"><h2>Confirm your company profile</h2></div>
            <div class="controls"><label>Periksa kembali data perusahaan Anda. Pastikan Anda telah mengisinya dengan benar.</label></div>
        </div>
        {{csrf_field()}}
        <div class="control-group">
            <div class="controls"> <input type="text" placeholder="Company Name" name = "name" required value = "{{$user->name}}"></div>
        </div>

        <div class="control-group">
            <div class="controls"> <input type="text" placeholder="Company Phone Number" name = "phone" required value = "{{$user->phone}}"></div>
        </div>

        <div class="control-group">
            <div class="controls"> <textarea rows="4" cols="50" placeholder="Company Address" name="address">{{$user->address}}</textarea></div>
        </div>
        <div class="control-group">
            <div class="controls"> <input type="email" placeholder="Company Email" name = "email" required value = "{{$user->email}}"></div>
        </div>

        <div class="control-group">
            <div class="controls"> <input type="text" placeholder="Username" name = "username" value = "{{$user->username}}" readonly></div>
        </div>

        <div class="control-group">
            <div class="controls"> <input type="password" placeholder="Password" name = "password" value = "{{$user->password}}" readonly></div>
        </div>

        <div class="control-group">
            <div class="controls">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#messageModal">Ok</button>
            </div>
        </div>

        <div class="modal fade" id="messageModal"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Confirm your email address</h5>
                    </div>
                    <div class="modal-body">
                        Untuk mengaktifkan akun Anda, lakukan verifikasi pada alamat email {{$user->email}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Ok</button>
                    </div>
                </div>
            </div>
        </div>


    </form>

@stop

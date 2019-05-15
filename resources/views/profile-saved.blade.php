@extends('layouts/master')

@section('main_content')

    <form class="form-horizontal" style = "margin: auto; width:500px; margin-top: 20px;" action="/">
        <div class="control-group">
            <div class="controls"><h2>My Profile</h2></div>
            <div class="controls"><label>Selamat, akun Anda telah terverifikasi. Langsung buat pesanan pertama Anda!</label></div>
        </div>
        {{csrf_field()}}
        <div class="control-group">
            <div class="controls"> <label><strong>Company Name:</strong></label></div>
            <div class="controls"> <label>{{$user->name}}</label></div>
        </div>

        <div class="control-group">
            <div class="controls"> <label><strong>Company Phone Number:</strong></label></div>
            <div class="controls"> <label>{{$user->phone}}</label></div>
        </div>

        <div class="control-group">
            <div class="controls"> <label><strong>Company Address:</strong></label></div>
            <div class="controls"> <label>{{$user->address}}</label></div>
        </div>
        <div class="control-group">
            <div class="controls"> <label><strong>Company Email:</strong></label></div>
            <div class="controls"> <label>{{$user->email}}</label></div>
        </div>

        <div class="control-group">
            <div class="controls"> <label><strong>Company Username:</strong></label></div>
            <div class="controls"> <label>{{$user->username}}</label></div>
        </div>

        <div class="control-group">
            <div class="controls">
                <button type="submit" class="btn btn-primary">Home</button>
            </div>
        </div>

    </form>

@stop

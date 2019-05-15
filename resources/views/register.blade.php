@extends('layouts/master')

@section('main_content')
    @if($errors->any())

        <div class="alert alert-danger alert-dismissible fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{$errors->first()}}
        </div>
    @endif

    <form class="form-horizontal" style = "margin: auto; width:50%; margin-top: 20px;" method = "post" action="{{url('/confirmation')}}">
        <div class="control-group">
            <div class="controls"><h2>Create New Account!</h2></div>
            <div class="controls"><label>Lengkapi data perusahaan anda!</label></div>
        </div>
        {{csrf_field()}}
        <div class="control-group">
            <div class="controls"> <input type="text" placeholder="Company Name" name = "name" required></div>
        </div>

        <div class="control-group">
            <div class="controls"> <input type="text" placeholder="Company Phone Number" name = "phone" required></div>
        </div>

        <div class="control-group">
            <div class="controls"> <textarea rows="4" cols="50" placeholder="Company Address" name="address"></textarea></div>
        </div>
        <div class="control-group">
            <div class="controls"> <input type="email" placeholder="Company Email" name = "email" required></div>
        </div>

        <div class="control-group">
            <div class="controls"> <input type="text" placeholder="Username" name = "username" required></div>
        </div>

        <div class="control-group">
            <div class="controls"> <input type="password" placeholder="Password" name = "password" required></div>
        </div>

        <div class="control-group">
            <div class="controls">
                <button type="submit" class="btn btn-primary">Sign Up</button>
            </div>
        </div>

    </form>

@stop

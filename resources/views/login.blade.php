@extends('layouts/master')

@section('main_content')

<form class="form-horizontal" style = "margin: auto; width:500px; margin-top: 20px;" method = "post" action="{{url('/login')}}">
    <div class="control-group">
        <div class="controls"><h2>Login</h2></div>
    </div>
    {{csrf_field()}}
    <div class="control-group">
        <div class="controls">
            <input type="text" placeholder="Username" name = "username"></div>
    </div>
    <div class="control-group">
        <div class="controls">
            <input type="password" id="inputPassword" placeholder="Password" name = "password"> </div>
    </div>
    <div class="control-group">
        <div class="controls">
            <label class="checkbox"> <input type="checkbox"> Remember me </label>
            <button type="submit" class="btn">Sign in</button>
        </div>
    </div>
</form>

@if($errors->any())
    {{$errors->first()}}
@endif
@stop
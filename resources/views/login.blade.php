@extends('layouts/master')

@section('main_content')
    <div class = "container">
        <div class = "row">
            <div class = "span12">
                <form class="form-horizontal" method = "post" action="{{url('/login')}}">
                    @if($errors->any())

                        <div class="alert alert-danger alert-dismissible fade in">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            {{$errors->first()}}
                        </div>
                    @endif

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
            </div>
        </div>

    </div>

{{--style = "margin: auto; width:500px; "--}}

@if($errors->any())
    {{$errors->first()}}
@endif
@stop

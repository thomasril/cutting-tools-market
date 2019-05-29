@extends('layouts/master')


@section('main_content')

    <section id="services" class="section-bg">
        <div class="container">
            <header class="section-header">
                <h3 class="section-title">Login</h3>
            </header>
            <form method = "post" action="{{url('/login')}}">

                @if($errors->any())

                    <div class="alert alert-danger alert-dismissible fade in">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        {{$errors->first()}}
                    </div>
                @endif
            {{csrf_field()}}
                <div class="row box">
                    <div class = "col text-center">
                        <div class = "form-group">
                            <input type = "text" class = "form-control" placeholder="Your Username" name = "username"/>
                        </div>

                        <div class = "form-group">
                            <input type="password" class = "form-control" id="inputPassword" placeholder="Password" name = "password">
                        </div>

                        <div class = "form-group">
                            <button type="submit" class="btn btn-primary">Sign in</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@stop

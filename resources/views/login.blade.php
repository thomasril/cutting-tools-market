@extends('layouts/master')


@section('main_content')

    <section id="services" class="section-bg">
        <div class="container">
            <header class="section-header">
                <h3 class="section-title">Login</h3>
            </header>
            <form method = "post" action="/login">
                @if($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{$errors->first()}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
            {{csrf_field()}}
                <div class="row box">
                    <div class = "col text-center">
                        <div class = "form-group">
                            <input type = "text" class = "form-control" placeholder="Your Username" name = "username" required/>
                        </div>

                        <div class = "form-group">
                            <input type="password" class = "form-control" id="inputPassword" placeholder="Password" name = "password" required />
                        </div>

                        <div class = "form-group">
                            <button type="submit" class="btn btn-circle-primary">Login</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@stop

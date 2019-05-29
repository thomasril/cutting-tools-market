@extends('layouts/master')

@section('main_content')
    <section id="services" class="section-bg">

        <header class="section-header">
            <h3 class="section-title">Register</h3>
        </header>

    <div class = "container">
        <div class = "row box">
            <div class = "col">

            @if($errors->any())

                <div class="alert alert-danger alert-dismissible fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{$errors->first()}}
                </div>
            @endif

            <form method = "post" action="/confirmation">
                <div class="control-group">
                    <div class="controls"><h2>Create New Account!</h2></div>
                    <div class="controls"><label>Lengkapi data perusahaan anda!</label></div>
                </div>
                {{csrf_field()}}
                <div class="form-group">
                    <input type="text" class = "form-control" placeholder="Company Name" name = "name" required>
                </div>

                <div class="form-group">
                    <input type="text" class = "form-control"  placeholder="Company Phone Number" name = "phone" required>
                </div>

                <div class="form-group">
                    <textarea rows="4" class = "form-control" cols="50" placeholder="Company Address" name="address"></textarea>
                </div>
                <div class="form-group">
                    <input type="email" class = "form-control" placeholder="Company Email" name = "email" required>
                </div>

                <div class="form-group">
                    <input type="text" class = "form-control"  placeholder="Username" name = "username" required>
                </div>

                <div class="form-group">
                    <input type="password" class = "form-control"  placeholder="Password" name = "password" required>
                </div>

                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary">Sign Up</button>
                </div>

            </form>
            </div>
        </div>
    </div>
    </section>
@stop

@extends('layouts/master')

@section('main_content')
    <section id="services" class="section-bg">
        <div class = "container">

            <header class="section-header">
                <h3 class="section-title">Create New Account!</h3>
                <p>Lengkapi data perusahaan anda!</p>
            </header>

        <div class = "row box">
            <div class = "col">

            @if($errors->any())
               <div class="alert alert-danger alert-dismissible fade show" role="alert">
                   {{$errors->first()}}
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
               </div>
            @endif

            <form method = "post" action="/confirmation">
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
                    <button type="submit" class="btn btn-get-started">Sign Up</button>
                </div>

            </form>
            </div>
        </div>
    </div>
    </section>
@stop

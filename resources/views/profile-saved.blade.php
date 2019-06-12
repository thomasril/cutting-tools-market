@extends('layouts/master')

@section('main_content')

    <section id="services" class="section-bg">
        <div class="container">

            <header class="section-header">
                <h3 class="section-title">My Profile</h3>
                <p>Selamat, akun Anda telah terverifikasi. Langsung buat pesanan pertama Anda!</p>
            </header>

            <div class ="row box">
                <div class = "col">
                    <div class="form-group">
                        <div> <strong>Company Name:</strong></div>
                        <div> {{$user->name}}</div>
                    </div>

                    <div class="form-group">
                        <div> <strong>Company Phone Number:</strong></div>
                        <div> {{$user->phone}}</div>
                    </div>

                    <div class="form-group">
                        <div> <strong>Company Address:</strong></div>
                        <div> {{$user->address}}</div>
                    </div>
                    <div class="form-group">
                        <div> <strong>Company Email:</strong></div>
                        <div> {{$user->email}}</div>
                    </div>

                    <div class="form-group">
                        <div> <strong>Company Username:</strong></div>
                        <div> {{$user->username}}</div>
                    </div>

                    <div class="form-group text-center">
                         <a href = "/"><button type="button" class="btn btn-circle-primary">Home</button></a>
                    </div>
            </div>
        </div>
        </div>
    </section>

@stop

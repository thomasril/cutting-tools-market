@extends('layouts/master')

@section('main_content')
    <section id="services" class="section-bg">
        <div class="container">

            <header class="section-header">
                <h3 class="section-title">My Profile</h3>
            </header>

            <div class="row box">
                <div class = "col">
                    <div class = "row">
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <label>Company Name</label>
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-1">
                            <label>:</label>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <label>{{$user->name}}</label>
                        </div>
                    </div>

                    <div class = "row">
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <label>Phone Number</label>
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-1">
                            <label>:</label>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <label>{{$user->phone}}</label>
                        </div>
                    </div>

                    <div class = "row">
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <label>Company Address</label>
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-1">
                            <label>:</label>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <label>{{$user->address}}</label>
                        </div>
                    </div>

                    <div class = "row">
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <label>Company Email</label>
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-1">
                            <label>:</label>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <label>{{$user->email}}</label>
                        </div>
                    </div>

                    <div class = "row">
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <label>Company Username</label>
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-1">
                            <label>:</label>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <label>{{$user->username}}</label>
                        </div>
                    </div>
                </div>

        </div>
    </section>
@stop

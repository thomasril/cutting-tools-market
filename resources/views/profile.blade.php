@extends('layouts/master')

@section('main_content')
    <section id="services" class="section-bg">
        <div class="container">
            <div style="display: none;">{{$value = ($user->role == 'Customer' ? 'Company' : 'Manager')}}</div>
            <header class="section-header">
                <h3 class="section-title">My Profile</h3>
            </header>

            <div class="row box">
                <div class = "col">
                    <div class = "row mb-5">
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <label>{{$value}} Name</label>
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-1">
                            <label>:</label>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <label>{{$user->name}}</label>
                        </div>
                    </div>

                    <div class = "row mt-5 mb-5">
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <label>{{$value}} Phone Number</label>
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-1">
                            <label>:</label>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <label>{{$user->phone}}</label>
                        </div>
                    </div>

                    <div class = "row mt-5 mb-5">
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <label>{{$value}} Address</label>
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-1">
                            <label>:</label>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <label>{{$user->address}}</label>
                        </div>
                    </div>

                    <div class = "row mt-5 mb-5">
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <label>{{$value}} Email</label>
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-1">
                            <label>:</label>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <label>{{$user->email}}</label>
                        </div>
                    </div>

                    <div class = "row mt-5 mb-5">
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <label>{{$value}} Username</label>
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-1">
                            <label>:</label>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <label>{{$user->username}}</label>
                        </div>
                    </div>
                    @if ($value != 'Customer')
                        <div class = "row mt-5">
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <label>Manager Title</label>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-1">
                                <label>:</label>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <label>{{$user->role}}</label>
                            </div>
                        </div>
                    @endif
                </div>

        </div>
    </section>
@stop

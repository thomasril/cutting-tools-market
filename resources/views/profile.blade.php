@extends('layouts/master')

@section('sub_intro')
    <div class="container">
        <div class="row">
            <div class="span4">
                <h3>Profile</h3>
            </div>
            <div class="span8">
                <ul class="breadcrumb notop">
                    <li><a href="#">Home</a><span class="divider">/</span></li>
                    <li class="active">Profile</li>
                </ul>
            </div>
        </div>
    </div>
@stop

@section('main_content')
    <div class="container">
        <div class="row">
            <div class="span12">
                <h3><strong>My Profile</strong></h3>
                <hr/>
            </div>
        </div>
        <div class = "row">
            <div class="span2">
                <label>Company Name</label>
            </div>
            <div class="span1">
                <label>:</label>
            </div>
            <div class="span8">
                <label>{{$user->name}}</label>
            </div>
        </div>

        <div class = "row">
            <div class="span2">
                <label>Phone Number</label>
            </div>
            <div class="span1">
                <label>:</label>
            </div>
            <div class="span8">
                <label>{{$user->phone}}</label>
            </div>
        </div>

        <div class = "row">
            <div class="span2">
                <label>Company Address</label>
            </div>
            <div class="span1">
                <label>:</label>
            </div>
            <div class="span8">
                <label>{{$user->address}}</label>
            </div>
        </div>

        <div class = "row">
            <div class="span2">
                <label>Company Email</label>
            </div>
            <div class="span1">
                <label>:</label>
            </div>
            <div class="span8">
                <label>{{$user->email}}</label>
            </div>
        </div>

        <div class = "row">
            <div class="span2">
                <label>Company Username</label>
            </div>
            <div class="span1">
                <label>:</label>
            </div>
            <div class="span8">
                <label>{{$user->username}}</label>
            </div>
        </div>

    </div>
@stop
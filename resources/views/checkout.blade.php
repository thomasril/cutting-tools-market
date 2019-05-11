@extends('layouts/master')

@section('main_content')
    <div class="container">
        <div class="row">
            <div class="span12">
            <form class="form-horizontal"> 
                <div class="control-group"> 
                    <label class="control-label" for="inputEmail">Email</label> 
                    <div class="controls"> <input type="text" id="inputEmail" placeholder="Email"> </div> 
                </div> 
                <div class="control-group"> 
                    <label class="control-label" for="inputPassword">Password</label> 
                    <div class="controls"> <input type="password" id="inputPassword" placeholder="Password"> </div> 
                </div> 
                <div class="control-group"> 
                    <div class="controls"> <label class="checkbox"> <input type="checkbox"> Remember me </label> 
                    <button type="submit" class="btn">Sign in</button> </div> 
                </div> 
            </form>

<!-- 
                <form> 
                    <fieldset> 
                        <legend><i class = "icon-map-marker icon-2x"></i> <span>Shipping Address</span>
                        <div>
                            <label class = "span4">Company Name</label> 
                            <label class = "span4">Company Address</label> 
                        </div>
                        </legend>     
                        <label class = "span6">Buyer Name: </label> 
                        <input class = "span6" type="text" placeholder="Buyer name"> 
                        <label class = "span6">Recipient Name:</label> 
                        <input class = "span6" type="text" placeholder="Recipient Name">
                        <label class = "span6">Recipient Title:</label> 
                        <input class = "span6" type="text" placeholder="Recipient Title"> 
                        <label class = "span6">Recipient Mobile Number:</label> 
                        <input class = "span6" type="text" placeholder="Buyer name">  

                        <label class="checkbox"> <input type="checkbox"> Check me out </label> 
                        <button type="submit" class="btn">Submit</button> 
                    </fieldset> 
                </form> -->
            </div>
        </div>
    </div>
@stop
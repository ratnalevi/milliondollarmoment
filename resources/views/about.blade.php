<link rel="stylesheet" href="{{ asset('css/about.css') }}">

@extends('layout')

@section('content')
<style>
    .about-us-image{
        position:relative; 
        max-width: 100%;
        filter: grayscale(100);
    }

    .about-us-image:hover {
        filter: grayscale(0);
    }
</style>
<div class="container about-us-container">

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <h2 class="intro-text text-center"><strong>About Us</strong></h2>
            </div>
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 right-border">
            <p>Have you ever dreamt of giving your loved ones a breath taking surprise which fills their soul with unspeakable joy and consolation that they laugh while tears are in eyes, sigh and sing all in a breath... Treasured to be as a memory, worth than a couple million dollars ... Where there is a will, there is a way!!! Take a chance in a million that you can do something to make your loved ones feel one in a billion...! Join us in making your dream come true. And here we do... your Million Dollar Moment.!!!!</p>
        </div>
    </div>

    <hr>

    <div class="row hidden-xs">
        <div col-md-12 col-sm-12 col-xs-12">
            <div class="col-md-6 col-sm-6 col-xs-6">
                <h3>Who are we ?</h3>
                <p>Not everyone can make you smile, not everyone except you can make them smile either... Who are we then? We can make them smile longer, brighter and forever. We can make their moments worth Million Dollar</p>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6">
                <img class="about-us-image" src="{{ asset('img/services/surprises/birthday.jpg') }}" alt="">
            </div>
        </div>
    </div>

    <hr>
    
    <div class="row hidden-xs">
        <div col-md-12 col-sm-12 col-xs-12">
            <div class="col-md-6 col-sm-6 col-xs-6">
                <img class="about-us-image" src="{{ asset('img/services/surprises/birthday.jpg') }}" alt="" >
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6">
                <h3>What we do ?</h3>
                <p>We surprise, we celebrate, we express, we do the Miracle and bind their hearts close to yours.</p>
            </div>
        </div>
    </div>


    <div class="row hidden-md hidden-lg">
        <div col-xs-12">
            <div class="col-xs-12">
                <img class="about-us-image" src="{{ asset('img/services/surprises/birthday.jpg') }}" alt="">
            </div>
            <div class="col-xs-12">
                <h3>Who are we ?</h3>
                <p>Not everyone can make you smile, not everyone except you can make them smile either... Who are we then? We can make them smile longer, brighter and forever. We can make their moments worth Million Dollar</p>
            </div>
        </div>
    </div>

    <hr>

    <div class="row hidden-md hidden-lg">
        <div  class="col-xs-12">
            <div class="col-xs-12">
                <img class="about-us-image" src="{{ asset('img/services/surprises/birthday.jpg') }}" alt="" >
            </div>
            <div class="col-xs-12">
                <h3>What we do ?</h3>
                <p>We surprise, we celebrate, we express, we do the Miracle and bind their hearts close to yours.</p>
            </div>
        </div>
    </div>
</div>
@endsection
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

    .about-us-container{
        padding-left: 100px
    }

    @media (max-width: 767px) {
        .about-us-container{
            padding-left: 15px;
            padding-right: 15px;
        }
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
        <div col-md-12 col-sm-12 col-xs-12">
            <div class="col-md-6 col-sm-6 col-xs-6">
                <h3>Who are we ?</h3>
                <p>Not everyone can make you smile, not everyone except you can make them smile either... Who are we then? We can make them smile longer, brighter and forever. We can make their moments worth Million Dollar</p>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <img class="about-us-image" src="{{ asset('img/services/surprises/birthday.jpg') }}" alt="">
            </div>
        </div>
    </div>

    <div class="row">
        <div col-md-12 col-sm-12 col-xs-12">
            <div class="col-md-4 col-sm-6 col-xs-6">
                <img class="about-us-image" src="{{ asset('img/services/surprises/birthday.jpg') }}" alt="" >
            </div>
            <div col-md-6 col-sm-6 col-xs-6">
                <h3>What we do ?</h3>
                <p>We surprise, we celebrate, we express, we do the Miracle and bind their hearts close to yours.</p>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layout')

@section('content')

    <header id="myCarousel" class="carousel slide container" style="height: 50%; padding: 0 !important;">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('http://www.citi.io/wp-content/uploads/2015/08/1168-00-06.jpg');"></div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://barca-manchester.co.uk/wp-content/uploads/2012/11/party.jpg');"></div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('https://www.everafterguide.com/s/upload/images/2016/06/8966360aa2dac0d9138ad8df8f65a15a.jpg');"></div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <div class="container">

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">Surprise Events,
                    <strong> Professionals in surprises</strong>
                </h2>
                <hr>
                <p>Use as many boxes as you like, and put anything you want in them! They are great for just about anything, the sky's the limit!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat diam quis nisl vestibulum dignissim. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                <br>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 portfolio-item">
            <a href="#">
                <img class="img-responsive" src="{{ asset('img/surprises/birthday.jpg') }}" alt="">
            </a>
            <h3>
                <a href="#">Birthday</a>
            </h3>
        </div>
        <div class="col-md-4 portfolio-item">
            <a href="#">
                <img class="img-responsive" src="{{ asset('img/surprises/anniversary.jpg') }}" alt="">
            </a>
            <h3>
                <a href="#">Anniversary</a>
            </h3>
        </div>
        <div class="col-md-4 portfolio-item">
            <a href="#">
                <img class="img-responsive" src="{{ asset('img/surprises/wedding.jpg') }}" alt="">
            </a>
            <h3>
                <a href="#">Wedding</a>
            </h3>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 portfolio-item">
            <a href="#">
                <img class="img-responsive" src="{{ asset('img/surprises/proposal.jpg') }}" alt="">
            </a>
            <h3>
                <a href="#">Proposal</a>
            </h3>
        </div>
        <div class="col-md-4 portfolio-item">
            <a href="#">
                <img class="img-responsive" src="{{ asset('img/surprises/bon_voyage.png') }}" alt="">
            </a>
            <h3>
                <a href="#">Bon Voyage</a>
            </h3>
        </div>
        <div class="col-md-4 portfolio-item">
            <a href="#">
                <img class="img-responsive" src="{{ asset('img/surprises/get_well_soon.png') }}" alt="">
            </a>
            <h3>
                <a href="#">Get Well Soon</a>
            </h3>
        </div>
    </div>
    </div>
@endsection
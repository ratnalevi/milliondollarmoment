@extends('layout')

@section('content')

    <style>
  .event-type{
        padding-bottom: 50px;
        position: relative; 
  }
  a.hovertext {
    position: relative;
    width: 100%;
    text-decoration: none !important;
    text-align: center;
  }
  a.hovertext::after {
    content: attr(title);
    position: absolute;
    left: 0;
    bottom: 10px;
    padding: 0.5em 20px;
    width: 263px;
    background: rgba(0,0,0,0.8);
    text-decoration: none !important;
    color: #fff;
    opacity: 0;
    -webkit-transition: 0.5s;
    -moz-transition: 0.5s;
    -o-transition: 0.5s;
    -ms-transition: 0.5s;
  }
  
  a.hovertext:hover::after, a.hovertext:focus::after {
    opacity: 1.0;
  }

  .event-type {
    filter: grayscale(100%);
  }

  .event-type:hover {
    filter: grayscale(0);
  }  

  .img-responsive{
    height: 400px;
  }

 </style>

<?php
                                              
$events = [
    [ 'title' => "Surprise", 'img' => 'img/services/surprise.jpg', 'url' => '/services/surprises/' ],
    [ 'title' => 'Destination surprise ', 'img' => 'img/services/surprise.jpg', 'url' => '/contact' ],
    [ 'title' => 'Prank', 'img' => 'img/services/prank.jpg', 'url' => '/contact' ],
    [ 'title' => 'Delivery', 'img' => 'img/services/delivery.jpg', 'url' => '/contact' ]
];
$events_per_row = 4;
$per_row = 0;

?>
    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <h2 class="intro-text text-center"><strong>Services</strong></h2>
                    <hr>
                    
                </div>
            </div>
        </div>

        @for( $i = 0; $i < sizeof( $events ); $i++ )
            @if( $i == 0 || $i + 1 % $events_per_row == 0 )
                <div class="row">
            @endif
                    <div class="col-md-3 portfolio-item event-type"> 
                        <p>
                            <a class="hovertext" href="{{ $events[ $i ]['url'] }}" title="{{ $events[ $i ]['title'] }}">
                            <img class="img-responsive" src="{{ asset( $events[ $i ]['img'] ) }}" alt="" >
                            </a>
                        </p>
                    </div>
                    <?php $per_row++ ?>
            @if( $per_row == $events_per_row )
                </div>
            @endif
        @endfor
    </div>
@endsection
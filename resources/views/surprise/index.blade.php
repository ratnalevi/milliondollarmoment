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
    bottom: 0;
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
    filter: grayscale(0);
  }

  .event-type {
    filter: grayscale(100%);
  }

  .event-type:hover {
    filter: grayscale(0);
  }  

  .img-responsive{
    height: 320px;
  }

 </style>

<?php

$events = [
    [ 'title' => 'Birthday', 'img' => 'img/surprises/birthday.jpg' ],
    [ 'title' => 'Wedding', 'img' => 'img/surprises/wedding.jpg' ],
    [ 'title' => 'Anniversary', 'img' => 'img/surprises/anniversary.jpg' ],
    [ 'title' => 'Proposal', 'img' => 'img/surprises/proposal.jpg' ]
];
$events_per_row = 4;
$per_row = 0;

?>
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

        @for( $i = 0; $i < sizeof( $events ); $i++ )
            @if( $i == 0 || $i + 1 % $events_per_row == 0 )
                <div class="row">
            @endif
                    <div class="col-md-3 portfolio-item event-type"> 
                        <p>
                            <a class="hovertext" href="#" title="{{ $events[ $i ]['title'] }}">
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
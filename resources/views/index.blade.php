@extends('layout')

@section('content')
    
<style>
.flex-slide-data .caption { 
    position: fixed;
    height: 100px;
    bottom: 80px;
    width: 100%;
    left: 0px;
    color: #ffffff;
    background: black;
    text-align: center;
    font-weight: bold;
    opacity: 0.6;
    font-size: 18px;
    line-height: 26px;
    font-weight: 400;
    color: rgb(255, 255, 255);
    font-family: Lato;
    visibility: inherit;
    border-width: 0px;
    margin: 0px;
    letter-spacing: 0px;
    padding: 5px;
} 

@media (max-width: 767px) {
    .flex-slide-data .caption { 
       height: 150px;
    }
}

.flex-slide-data img{
    width: 100%;
    min-height: 100%;
    z-index: -1;
    position: fixed;
}
</style>

<?php 
$images = [ 
    [ 'img' => 'img/homepage/homepage_1.jpg', 'caption' => 'You all worked so hard and it amazes me how you never seem to get hassled. You went above and beyond. An incredible night', 'author' => 'Ranganath Charyulu' ],
    [ 'img' => 'img/homepage/homepage_2.jpg', 'caption' => 'Planning a surprise event with #MillionDollarMoment is the best choice one can make. That was really lot of fun yesterday nyt @ my friends bday party. That was really lovely.', 'author' => 'Swetha Allam' ],
    [ 'img' => 'img/homepage/homepage_3.jpg', 'caption' => 'Its completely amazing...and thanks to all of u for coming with such a wonderful idea..!', 'author' => 'Nikita Singh' ],
    [ 'img' => 'img/homepage/homepage_4.jpg', 'caption' => 'The name itself resembles "Million dollar"of smiles u guys had done a great job,njoyed the surprise...thank you...keep growing...all the best..', 'author' => 'Rajini Vinod' ],
    [ 'img' => 'img/homepage/homepage_5.jpg', 'caption' => 'Awsome tym vth u people all U all made our day so special it\'s really fantastic.... Keep going on.Thank u soo much.', 'author' => 'Sai Mounica Pasupuleti' ],
];

$li = '';
$imageDiv = '';
$i = 0;
foreach ( $images as $image ) {
    $class = ( $i == 0 ) ? ' active' : '';
    $li .= '<li data-target="#myCarousel" data-slide-to="' . $i . '" class="' . $class . '"></li>';
    //$imageDiv .= '<div class="item ' . $class . '">';
    $imageDiv .= '<div class="item ' . $class . '" style="background-image: url(' . $image['img'] . ');background-repeat: no-repeat; background-position: center center; background-size: contain;">';
    //$imageDiv .= '<img src="' . $image[ 'img' ]. '" alt="">';
    $imageDiv .= '<div class="carousel-caption">';
    $imageDiv .= '<h3>' . $image['author']. '</h3>';
    $imageDiv .= '<p>' . $image['caption'] . '</p>';
    $imageDiv .= '</div></div>';
    $i++;
}
?>

<div id="content">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        {!! $li !!}
      </ol>

      <div class="carousel-inner">
       {!! $imageDiv !!}
      </div>

      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
</div>

@endsection
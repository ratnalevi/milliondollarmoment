@extends('layout')

@section('content')
<header id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for Slides -->
    <div class="carousel-inner">
        <div class="item active">
            <!-- Set the first background image using inline CSS below. -->
            <div class="fill" style="background-image:url('https://www.everafterguide.com/s/upload/images/2016/06/8966360aa2dac0d9138ad8df8f65a15a.jpg');"></div>
        </div>
        <div class="item">
            <!-- Set the second background image using inline CSS below. -->
            <div class="fill" style="background-image:url('http://static.asiawebdirect.com/m/bangkok/portals/huahin-bangkok-com/homepage/nightlife/so-sofitel-hua-hin/allParagraphs/00/BucketList/0/image2/SO-Sofitel-Hua-Hin-7.jpg');"></div>
        </div>
        <div class="item">
            <!-- Set the third background image using inline CSS below. -->
            <div class="fill" style="background-image:url('http://www.liveinstyle.com/sites/default/files/images/ee/Thailand_Koh_Phangan_Full_Moon_Party_CC_hadsie_884_1.jpg');"></div>
            {{--<div class="carousel-caption">--}}
                {{--<h2>Caption 3</h2>--}}
            {{--</div>--}}
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
@endsection
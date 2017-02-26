<?php
$baseUrl = $_SERVER['HTTP_HOST'];
?>
<nav role="navigation" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="{{ 'http://' . $baseUrl }}" class="navbar-brand"><b>Million Dollar Moments</b></a>

        </div>
        <!-- Collection of nav links and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</li>
                <li class="{!! isset( $type ) && $type == 'surprise' ? 'active' : '' !!}"><a href="/surprise">Surprise</a></li>
                <li class="{!! isset( $type ) && $type == 'destination-surprise' ? 'active' : '' !!}"><a href="#">Destination Surprise</a></li>
                <li class="{!! isset( $type ) && $type == 'pranks' ? 'active' : '' !!}"><a href="#">Pranks</a></li>
                <li class="{!! isset( $type ) && $type == 'event-planner' ? 'active' : '' !!}"><a href="#">Event Planner</a></li>
                <li class="{!! isset( $type ) && $type == 'delivery' ? 'active' : '' !!}"><a href="#">Delivery</a></li>
                <li class="{!! isset( $type ) && $type == 'gallery' ? 'active' : '' !!}"><a href="#">Gallery</a></li>
                <li class="{!! isset( $type ) && $type == 'about' ? 'active' : '' !!}"><a href="/about">About Us</a></li>
                <li class="{!! isset( $type ) && $type == 'contact' ? 'active' : '' !!}"><a href="/contact">Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav>
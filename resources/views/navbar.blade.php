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
                <li><a href="/surprise">Surprise</a></li>
                <li><a href="#">Destination Surprise</a></li>
                <li><a href="#">Pranks</a></li>
                <li><a href="#">Event Planner</a></li>
                <li><a href="#">Delivery</a></li>
                <li><a href="/about">About Us</a></li>
                <li><a href="/contact">Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav>
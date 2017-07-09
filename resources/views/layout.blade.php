<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Million Dollar Moments</title>

    <link rel="icon" type="image/jpeg" href="img/favicon.jpg" />

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' id='Main-Style-css'  href="{{ asset('/css/style.css') }}" type='text/css' media='all' />    
    <link rel='stylesheet' id='menu-style-css'  href="{{ asset('/css/component.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' id='carousel-Style-css'  href='http://geethaarts.com/wp-content/themes/geetha/framework/css/flexslider.css?ver=1.0' type='text/css' media='all' />

    <link href='http://fonts.googleapis.com/css?family=Exo:400,900' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

</head>
<body class="hidden-sn">

<?php

use Illuminate\Support\Facades\Route;
$currentPath = Route::getFacadeRoot()->current()->uri();
$currentPathParts = explode('/', $currentPath);
$currentPageType = strtolower( $currentPathParts[0] );
$baseUrl = 'http://' . $_SERVER['HTTP_HOST'];
$logoUrl = $baseUrl . '/img/million_logo.jpg';

?>

<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s2">
    <h3>Menu</h3>

    <div class="menu-container">
        <ul id="top-menu" class="nav navbar-nav">
            <li id="menu-item-34" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-2 current_page_item menu-item-34"><a href="{{ $baseUrl }}">Home</a></li>
            <li id="menu-item-40" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-40"><a href="{{ $baseUrl }}/services">Services</a></li>
            <li id="menu-item-35" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-35"><a href="{{ $baseUrl }}/gallery/">Our Work / Gallery</a></li>
            <li id="menu-item-35" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-35"><a href="{{ $baseUrl }}/testimonials/">Testimonials</a></li>
            <li id="menu-item-37" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-37"><a href="{{ $baseUrl }}/contact/">Contact</a></li>
            <li id="menu-item-35" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-35"><a href="{{ $baseUrl }}/faq/">FAQ's</a></li>
        </ul>
    </div>      

    <div class="clearfix"></div>
    <div class="clearfix"></div>
    <div class="col-md-8 col-sm-8 col-xs-8 text-right">
        <ul class="list-inline social-links">
            <li><a href="https://www.instagram.com/themilliondollarmoment" target="_blank"><i class="fa fa-instagram"></i></a></li>
            <li><a href="https://www.facebook.com/themilliondollarmoment" target="_blank"><i class="fa fa-facebook"></i></a></li>
        </ul>
    </div>

</div>

<div id="page_wrapper"><!--  Page Wrapper -->
    <header role="banner" id="header-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-1 col-sm-1 col-xs-2">
                    <nav class="navbar navbar-default" role="navigation"><!--  Nav -->
                        <button type="button" class="navbar-toggle" id="menu-right">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </nav>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2 logo text-left">
                    <a href="{{ $baseUrl  }}">
                        <img src="{{ $logoUrl }}" alt='Million Dollar Moments' />
                    </a>
                </div>
                <div class="col-md-8 col-sm-8 col-xs-8 text-right">
                    <ul class="list-inline social-links">
                        <li><a href="https://www.instagram.com/themilliondollarmoment" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://www.facebook.com/themilliondollarmoment" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    </ul>
              </div>

            </div>
        </div><!-- End Container -->
    </header>

    @yield('content')

    @if( $currentPageType !== '' )
        <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
        @include('footer')        
    @endif
    
    </div>
</body>

<script type='text/javascript' src="{{ asset('js/classie.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/scripts.js') }}"</script>
<script type='text/javascript' src='http://geethaarts.com/wp-content/themes/geetha/framework/js/jquery.flexslider-min.js?ver=1.0'></script>
<script type="text/javascript" src="http://geethaarts.com/wp-content/themes/geetha/framework/js/vendor/imagesloaded.js?ver=3.0.0"></script>
<script type="text/javascript" src="http://geethaarts.com/wp-content/themes/geetha/framework/js/vendor/isotope.min.js?ver=3.0.0"></script>

</html>
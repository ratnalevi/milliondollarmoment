<link rel="stylesheet" href="{{ asset('css/about.css') }}">

@extends('layout')

@section('content')
<div class="container">

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <h2 class="intro-text text-center"><strong>Our Team</strong></h2>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4 col-sm-6">
            <div class="card hovercard">
                <div class="cardheader">
                </div>
                <div class="avatar">
                    <img alt="" src="https://scontent.fmaa1-1.fna.fbcdn.net/v/t1.0-9/15327291_1171200506281713_7400987561733048401_n.jpg?oh=428bca38aa6a4c4a569e65f05bf08ea2&oe=595F2787">
                </div>
                <div class="info">
                    <div class="title">
                        <a target="_blank" href="#">Antipas Guda</a>
                    </div>
                    <div class="desc">Enterprenuer</div>
                    <div class="desc">Event Specialist</div>
                </div>
                <div class="bottom">
                    <a target="_blank" class="btn btn-primary btn-twitter btn-sm" href="#">
                        <i class="fa fa-linkedin-square "></i>
                    </a>
                    <a target="_blank" class="btn btn-danger btn-sm" rel="publisher"
                       href="#">
                        <i class="fa fa-google-plus"></i>
                    </a>
                    <a target="_blank" class="btn btn-primary btn-sm" rel="publisher"
                       href="#">
                        <i class="fa fa-facebook"></i>
                    </a>
                    
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6">
            <div class="card hovercard">
                <div class="cardheader">
                </div>
                <div class="avatar">
                    <img alt="" src="https://scontent-frt3-1.xx.fbcdn.net/v/t1.0-9/13100953_10208285631391758_8024476089267854559_n.jpg?oh=de1201fe19fc51fae7e1b4dc92cb7f3a&oe=593E13C3">
                </div>
                <div class="info">
                    <div class="title">
                        <a target="_blank" href="#">Allam Levi</a>
                    </div>
                    <div class="desc">Web Developer</div>
                    <div class="desc">Consultant</div>
                </div>
                <div class="bottom">
                    <a target="_blank" class="btn btn-primary btn-twitter btn-sm" href="https://in.linkedin.com/in/levi-ratnakar-b817116a">
                        <i class="fa fa-linkedin-square "></i>
                    </a>
                    <a target="_blank" class="btn btn-danger btn-sm" rel="publisher"
                       href="https://plus.google.com/u/2/114231111689419689901">
                        <i class="fa fa-google-plus"></i>
                    </a>
                    <a target="_blank" class="btn btn-primary btn-sm" rel="publisher"
                       href="https://www.facebook.com/LeviBunty123">
                        <i class="fa fa-facebook"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
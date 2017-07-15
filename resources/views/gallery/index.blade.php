@extends('layout')

@section('content')

<link rel="stylesheet" type="text/css" href="/css/main.css">
<link rel="stylesheet" type="text/css" href="/css/768.css">
<link rel="stylesheet" type="text/css" href="/css/992.css">
    
<div class="container" style="padding-top: 40px">

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <h2 class="intro-text text-center"><strong>Gallery</strong></h2>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="media-grid-wrap"> 
            <div class="gallery-grid"> 
                <div class="masonry-item">
                    <figure> 
                        <img src="/img/gallery/gallery_2.jpg" alt="gallery-post">
                        <figcaption>
                            <h2>Birthday</h2>
                            <p>Lily likes to play with crayons and pencils</p>
                    		<a href="/gallery/images"></a>
                        </figcaption>
                    </figure>
                </div>
                <div class="masonry-item">
                    <figure> 
                        <img src="/img/gallery/gallery_2.jpg" alt="gallery-post">
                        <figcaption>
                            <h2>Wedding</h2>
                            <p>Lily likes to play with crayons and pencils</p>
                            <a href="/gallery/images">View more</a>
                        </figcaption>
                    </figure>
                </div>
                <div class="masonry-item">
                    <figure> 
                        <img src="/img/gallery/gallery_2.jpg" alt="gallery-post">
                        <figcaption>
                            <h2>Anniversary</h2>
                            <p>Lily likes to play with crayons and pencils</p>
                            <a href="/gallery/images">View more</a>
                        </figcaption>
                    </figure>
                </div>
                <div class="masonry-item">
                    <figure> 
                        <img src="/img/gallery/gallery_2.jpg" alt="gallery-post">
                        <figcaption>
                            <h2>Random</h2>
                            <p>Lily likes to play with crayons and pencils</p>
                            <a href="/gallery/images">View more</a>
                        </figcaption>
                    </figure>
                </div>
                <div class="masonry-item">
                    <figure> 
                        <img src="/img/gallery/gallery_2.jpg" alt="gallery-post">
                        <figcaption>
                            <h2>Bon Voyage</h2>
                            <p>Lily likes to play with crayons and pencils</p>
                            <a href="/gallery/images">View more</a>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</div>
                
@endsection
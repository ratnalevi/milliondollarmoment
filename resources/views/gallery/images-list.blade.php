@extends('layout')

@section('content')

<?php
                                              
$images = [
    [ 'src' => 'img/gallery/gallery_1.jpg', 'full-src' => 'img/gallery/gallery_1.jpg', 'title' => 'Gallery 1', 'alt' => 'Gallery 1' ],
    [ 'src' => 'img/gallery/gallery_2.jpg', 'full-src' => 'img/gallery/gallery_2.jpg', 'title' => 'Gallery 2', 'alt' => 'Gallery 2' ],
    [ 'src' => 'img/gallery/gallery_3.jpg', 'full-src' => 'img/gallery/gallery_3.jpg', 'title' => 'Gallery 3', 'alt' => 'Gallery 3' ],
    [ 'src' => 'img/gallery/gallery_4.jpg', 'full-src' => 'img/gallery/gallery_4.jpg', 'title' => 'Gallery 4', 'alt' => 'Gallery 4' ],
    [ 'src' => 'img/gallery/gallery_4.jpg', 'full-src' => 'img/gallery/gallery_4.jpg', 'title' => 'Gallery 5', 'alt' => 'Gallery 5' ],
    [ 'src' => 'img/gallery/gallery_1.jpg', 'full-src' => 'img/gallery/gallery_1.jpg', 'title' => 'Gallery 6', 'alt' => 'Gallery 6' ],
    [ 'src' => 'img/gallery/gallery_2.jpg', 'full-src' => 'img/gallery/gallery_2.jpg', 'title' => 'Gallery 7', 'alt' => 'Gallery 7' ],
    [ 'src' => 'img/gallery/gallery_3.jpg', 'full-src' => 'img/gallery/gallery_3.jpg', 'title' => 'Gallery 8', 'alt' => 'Gallery 8' ],
    [ 'src' => 'img/gallery/gallery_1.jpg', 'full-src' => 'img/gallery/gallery_1.jpg', 'title' => 'Gallery 1', 'alt' => 'Gallery 1' ],
    [ 'src' => 'img/gallery/gallery_2.jpg', 'full-src' => 'img/gallery/gallery_2.jpg', 'title' => 'Gallery 2', 'alt' => 'Gallery 2' ],
    [ 'src' => 'img/gallery/gallery_3.jpg', 'full-src' => 'img/gallery/gallery_3.jpg', 'title' => 'Gallery 3', 'alt' => 'Gallery 3' ],
    [ 'src' => 'img/gallery/gallery_4.jpg', 'full-src' => 'img/gallery/gallery_4.jpg', 'title' => 'Gallery 4', 'alt' => 'Gallery 4' ],
    [ 'src' => 'img/gallery/gallery_4.jpg', 'full-src' => 'img/gallery/gallery_4.jpg', 'title' => 'Gallery 5', 'alt' => 'Gallery 5' ],
    [ 'src' => 'img/gallery/gallery_1.jpg', 'full-src' => 'img/gallery/gallery_1.jpg', 'title' => 'Gallery 6', 'alt' => 'Gallery 6' ],
    [ 'src' => 'img/gallery/gallery_2.jpg', 'full-src' => 'img/gallery/gallery_2.jpg', 'title' => 'Gallery 7', 'alt' => 'Gallery 7' ],
    [ 'src' => 'img/gallery/gallery_3.jpg', 'full-src' => 'img/gallery/gallery_3.jpg', 'title' => 'Gallery 8', 'alt' => 'Gallery 8' ],
    [ 'src' => 'img/gallery/gallery_1.jpg', 'full-src' => 'img/gallery/gallery_1.jpg', 'title' => 'Gallery 1', 'alt' => 'Gallery 1' ],
    [ 'src' => 'img/gallery/gallery_2.jpg', 'full-src' => 'img/gallery/gallery_2.jpg', 'title' => 'Gallery 2', 'alt' => 'Gallery 2' ],
    [ 'src' => 'img/gallery/gallery_3.jpg', 'full-src' => 'img/gallery/gallery_3.jpg', 'title' => 'Gallery 3', 'alt' => 'Gallery 3' ],
    [ 'src' => 'img/gallery/gallery_4.jpg', 'full-src' => 'img/gallery/gallery_4.jpg', 'title' => 'Gallery 4', 'alt' => 'Gallery 4' ],
    [ 'src' => 'img/gallery/gallery_4.jpg', 'full-src' => 'img/gallery/gallery_4.jpg', 'title' => 'Gallery 5', 'alt' => 'Gallery 5' ],
    [ 'src' => 'img/gallery/gallery_1.jpg', 'full-src' => 'img/gallery/gallery_1.jpg', 'title' => 'Gallery 6', 'alt' => 'Gallery 6' ],
    [ 'src' => 'img/gallery/gallery_2.jpg', 'full-src' => 'img/gallery/gallery_2.jpg', 'title' => 'Gallery 7', 'alt' => 'Gallery 7' ],
    [ 'src' => 'img/gallery/gallery_3.jpg', 'full-src' => 'img/gallery/gallery_3.jpg', 'title' => 'Gallery 8', 'alt' => 'Gallery 8' ],
];
$images_per_row = 4;
$per_row = 0;

?>

<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link href="/css/flexbox-gallery.css" rel="stylesheet" type="text/css">
<script src="/js/flexbox-gallery.js"></script>

<div class="container">

  <div class="row">
      <div class="box">
          <div class="col-lg-12">
              <h2 class="intro-text text-center"><strong>Images</strong></h2>
              <hr>
          </div>
      </div>
  </div>

  <div id="container" class="container flex-gallery">
      @for( $i = 0; $i < sizeof( $images ); $i++ )           
        <figure class="image-rate">
            <img src="{{ asset( $images[ $i ]['src'] ) }}">
        </figure>
      @endfor
  </div>

</div>

<script>
  $('#container').flexgal();
</script>

@endsection
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

<style>

.fill img {
    height: 250px;
    width: 385px;
}

</style>

<script>
  // $(document).ready(function() {
  //   $('.thumbnail').click(function(){
  //         $('.modal-body').empty();
  //       var title = $(this).parent('a').attr("title");
  //       $('.modal-title').html(title);
  //       $($(this).parents('div').html()).appendTo('.modal-body');
  //       $('#myModal').modal({show:true});
  //   });
  // });
</script>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <h2 class="intro-text text-center"><strong>Gallery</strong></h2>
                    <hr>
                </div>
            </div>
        </div>

        @for( $i = 0; $i < sizeof( $images ); $i++ )
            @if( $i == 0 || $i % $images_per_row == 0 )
                <div class="row">
                <?php $per_row = 0 ?>
            @endif
                  <div class="col-lg-3 col-sm-6 col-xs-12 fill">
                    <a title="{{ asset( $images[ $i ]['title'] ) }}" href="javascript:void(0)">
                        <img title="{{ asset( $images[ $i ]['title'] ) }}" class="img-responsive thumbnail" src="{{ asset( $images[ $i ]['src'] ) }}" data-fullsrc="{{ asset( $images[ $i ]['full-src'] ) }}" alt="{{ asset( $images[ $i ]['alt'] ) }}" >
                    </a>
                  </div>
                  
                  <?php $per_row++ ?>
            @if( $per_row == $images_per_row )
                </div>
            @endif
        @endfor
    </div>

    <div tabindex="-1" class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
          <button class="close" type="button" data-dismiss="modal">×</button>
          <h3 class="modal-title">Heading</h3>
        </div>
        <div class="modal-body">
          
        </div>
        <div class="modal-footer">
          <button class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
         </div>
        </div>
    </div>

    </div>

@endsection
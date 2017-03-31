    @extends('layout')

@section('content')
    
    <script>

    function shiftSlide(){

        var slides = $('#million-dollar-slides').find('li');
        var nextElem;
        slides.each( function(){
            if( $(this).hasClass('flex-active-slide') ){
                if( $(this).next().length > 0 ){
                    nextElem = $(this).next();
                }else{
                    nextElem = $(this).prev();
                }
                $(this).removeClass('flex-active-slide')
                $(this).css('zIndex','1');
                $(this).css('opacity', '0');
            }
        });

        if( nextElem != null ){
            nextElem.addClass('flex-active-slide');
            nextElem.css('zIndex', '2');
            nextElem.css('opacity', '1');
        }

    }

    setInterval( shiftSlide, 3000);

    </script>

    <section class="slider-wrapper">
    <div class="flexislider">
        <ul class="slides" id="million-dollar-slides">
        <li class="flex-active-slide" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;">
                <div class="flex-slide-data">
                    <img src="{{ asset( 'img/homepage/homepage_1.jpg' ) }}" alt="" draggable="false">
                </div>
            </li>
            <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
                <div class="flex-slide-data">
                    <img src="{{ asset( 'img/homepage/homepage_2.jpeg' ) }}" alt="" draggable="false">
                </div>
            </li>
            <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
                <div class="flex-slide-data">
                    <img src="{{ asset( 'img/homepage/homepage_3.jpg' ) }}" alt="" draggable="false">
                </div>
            </li>
        </ul>
    <ol class="flex-control-nav flex-control-paging"><li><a class="flex-active">1</a></li><li><a class="">2</a></li><li><a class="">3</a></li><li><a class="">4</a></li></ol><ul class="flex-direction-nav"><li><a class="flex-prev" href="#">Previous</a></li><li><a class="flex-next" href="#">Next</a></li></ul></div>
    <div class="home-page-content">
                    <div class="page-content container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                                            </div>
                </div>
            </div>
            </div>
    
</section>
@endsection
    @extends('layout')

@section('content')
    
    <script>

    var number_of_seconds = 3;

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
                $(this).css('display', 'none');
            }
        });

        if( nextElem != null ){
            nextElem.addClass('flex-active-slide');
            nextElem.css('zIndex', '2');
            nextElem.css('opacity', '1');
            nextElem.css('display', 'block');
        }

    }

    setInterval( shiftSlide, number_of_seconds * 1000);

    </script>

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
    ?>

    <section class="slider-wrapper">
    <div class="flexislider">
        <ul class="slides" id="million-dollar-slides">
            @for( $i = 0; $i < sizeof( $images ); $i++ )
                <li class="flex-active-slide" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: {!! ( $i == 0 ) ? 'block' : 'none' !!}; z-index: {!! ( $i == 0 ) ? 2 : 1 !!};">
                    <div class="flex-slide-data">
                        <img src="{{ asset( $images[ $i ]['img'] ) }}" alt="" draggable="false">
                        <div class="caption"><br><span>{{ $images[ $i ]['caption'] }}</span><br><span style="font-style: italic;" class="pull-right">-{{ $images[ $i ]['author'] }}</span></div>
                    </div>
                </li>
            @endfor
        </ul>
    </div>
</section>
@endsection
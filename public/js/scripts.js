 jQuery(document).ready(function($)
 {
 	var	menuRight = document.getElementById( 'cbp-spmenu-s2' ),
	body = document.body;
	$(document).on("click","#menu-right",function() {
      classie.toggle( this, 'active' );
      classie.toggle( body, 'cbp-spmenu-push-toright' );
      classie.toggle( menuRight, 'cbp-spmenu-open' );
	});

	$(document).on("click",".bio-link",function(){
		var id=$(this).data("id");
		$(".info").removeClass("info-open");
		$("#info_"+id).addClass("info-open");
	});

   var $container = $('.movie_div_list');
   $container.imagesLoaded( function() {
     var selector = $(".movie-list .current").attr('data-filter');
     $container.isotope({
        filter: selector,
         animationOptions: {
             duration: 750,
             easing: 'linear',
             queue: false
         }
     });
      $container.isotope({
        filter:'.movie-showcase'
      });
      $container.isotope({
        filter:'.events'
      });
  });
   $('.movie-list a').click(function() {
       $('.movie-list .current').removeClass('current');
       $(this).addClass('current');
       var element=$(this);
       $container.imagesLoaded( function() {
         var selector = element.attr('data-filter');
         $container.isotope({
            filter: selector,
             animationOptions: {
                 duration: 750,
                 easing: 'linear',
                 queue: false
             }
         });
      });
   });
   $(".movie-list li:nth-child(1)  a").trigger('click');

 });
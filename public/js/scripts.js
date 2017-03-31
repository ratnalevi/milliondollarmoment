 jQuery(document).ready(function($)
 {
 	var	menuRight = document.getElementById( 'cbp-spmenu-s2' ),
		body = document.body;
		$(document).on("click","#menu-right",function() {
      classie.toggle( this, 'active' );
      classie.toggle( body, 'cbp-spmenu-push-toright' );
      classie.toggle( menuRight, 'cbp-spmenu-open' );
		})	;


	$(document).on("click",".bio-link",function()
	{
		var id=$(this).data("id");
		$(".info").removeClass("info-open");
		$("#info_"+id).addClass("info-open");
	});
 });

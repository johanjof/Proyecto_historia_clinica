jQuery(document).ready(function($){
	//open menu
	$('.cd-menu-trigger').on('click', function(event){
		event.preventDefault();
		$('#cd-main-content').addClass('move-out');
		$('#main-nav').addClass('is-visible');
		$('.cd-shadow-layer').addClass('is-visible');
	});
	//close menu
	$('.cd-close-menu').on('click', function(event){
		event.preventDefault();
		$('#cd-main-content').removeClass('move-out');
		$('#main-nav').removeClass('is-visible');
		$('.cd-shadow-layer').removeClass('is-visible');
	});

	//new-------------------------------
	$('.close-menu').on('click', function(event){
		event.preventDefault();
		$('#cd-main-content').removeClass('move-out');
		$('#main-nav').removeClass('is-visible');
		$('.cd-shadow-layer').removeClass('is-visible');
	});

	var coll = document.getElementsByClassName("collapsible");
	var i;

	for (i = 0; i < coll.length; i++) {
  		coll[i].addEventListener("click", function() {
   		 this.classList.toggle("active");
   		 var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}

	//end-------------------------------------


	//clipped image - blur effect
	set_clip_property();
	$(window).on('resize', function(){
		set_clip_property();
	});

	function set_clip_property() {
		var $header_height = $('.cd-header').height(),
			$window_height = $(window).height(),
			$header_top = $window_height - $header_height,
			$window_width = $(window).width();
		$('.cd-blurred-bg').css('clip', 'rect('+$header_top+'px, '+$window_width+'px, '+$window_height+'px, 0px)');
	}
});
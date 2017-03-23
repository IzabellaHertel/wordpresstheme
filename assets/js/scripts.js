(function($){
//Ikoner för meny i mobilt läge
	$('.icons').click(function(){
		$(this).children().toggle();
		$('.main-menu').slideToggle();
	});

// Slideshow
	$('.slideshow').each(function(){
		var items = $(this).data('number')

		$(this).owlCarousel({
			autoPlay: true,
			items: items
		});
	});

// Sök
	$('.icon-search').click(function(){
		$('section.searchform').slideToggle();
	});

// Sök mobil
	$('.icon').click(function(){
		$('section.searchform').slideToggle();
	});


})(jQuery);
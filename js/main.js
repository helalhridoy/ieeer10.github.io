$(document).ready(function () {
	$(".customer-logos").slick({
	  slidesToShow: 6,
	  slidesToScroll: 1,
	  autoplay: true,
	  autoplaySpeed: 1500,
	  arrows: false,
	  dots: false,
	  pauseOnHover: false,
	  responsive: [
		{
		  breakpoint: 768,
		  settings: {
			slidesToShow: 4
		  }
		},
		{
		  breakpoint: 520,
		  settings: {
			slidesToShow: 3
		  }
		}
	  ]
	});
  });
  
jQuery(function($) {
	var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
	$('#navactive li a').each(function() {
	 if (this.href === path) {
	  $(this).addClass('active');
	 }
	});
   });
(function($) {

	"use strict";

	$('nav .dropdown').hover(function(){
		var $this = $(this);
		$this.addClass('show');
		$this.find('> a').attr('aria-expanded', true);
		$this.find('.dropdown-menu').addClass('show');
	}, function(){
		var $this = $(this);
			$this.removeClass('show');
			$this.find('> a').attr('aria-expanded', false);
			$this.find('.dropdown-menu').removeClass('show');
	});

})(jQuery);
(function($) {

	"use strict";

	$('[data-toggle="tooltip"]').tooltip()

})(jQuery);


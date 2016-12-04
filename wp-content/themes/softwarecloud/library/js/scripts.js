
(function($)	{
	
	// Hero background video mobile detect
	if ($("#theVideo").length > 0) {
		if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
			$('#theVideo').hide();
			$('.video-slide').addClass('video-no');
		} else {
			$('#theVideo').get(0).play();
		}
	}
	
	$(document).ready(function() {
		
		$('.carousel').slick({
	    dots: true,
		  infinite: true,
		  speed: 500,
		  fade: false,
		  arrows: false,
		  slidesToShow: 1,
		  slidesToScroll: 1
	  });

		
	  $('.partner-panel').slick({
	    dots: false,
		  infinite: true,
		  speed: 500,
		  fade: false,
		  slidesToShow: 5,
		  slidesToScroll: 1,
		  responsive: [
		    {
		      breakpoint: 1024,
		      settings: {
		        slidesToShow: 3,
		        dots: false
		      }
		    },
		    {
		      breakpoint: 768,
		      settings: {
		        slidesToShow: 2,
		        dots: false
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        slidesToShow: 1,
		        dots: true
		      }
		    }
		  ]
	  });
		
		
		$('.tools-panel').slick({
	    dots: false,
		  infinite: true,
		  speed: 500,
		  fade: false,
		  slidesToShow: 5,
		  slidesToScroll: 1,
		  responsive: [
		    {
		      breakpoint: 1024,
		      settings: {
		        slidesToShow: 3,
		        dots: false
		      }
		    },
		    {
		      breakpoint: 768,
		      settings: {
		        slidesToShow: 2,
		        dots: false
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        slidesToShow: 1,
		        dots: true
		      }
		    }
		  ]
	  });
		
		
		
	});

})(jQuery);
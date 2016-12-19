
(function($)	{
	
	$(document).ready(function() {
		
		
		function scrollBanner() {
		  $(document).scroll(function(){
		  	var scrollPos = $(this).scrollTop();
		  	$('.scroll-text').css({
		  	  'opacity' : 1-(scrollPos/250)
		  	});
		  });    
		}
		scrollBanner();
		
		
		// Slick Slider for carousel
		$('.carousel').slick({
	    dots: true,
		  infinite: true,
		  speed: 500,
		  fade: false,
		  arrows: false,
		  slidesToShow: 1,
		  slidesToScroll: 1
	  });

		
		// Slick Slider for partners
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
		
		
		// Slick Slider for tools
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
		
		
		// Animation panels
		function onScrollInit( items, trigger ) {
		  items.each( function() {
		    var osElement = $(this),
		        osAnimationClass = osElement.attr('data-os-animation'),
		        osAnimationDelay = osElement.attr('data-os-animation-delay');
		      
		        osElement.css({
		          '-webkit-animation-delay':  osAnimationDelay,
		          '-moz-animation-delay':     osAnimationDelay,
		          'animation-delay':          osAnimationDelay
		        });
		
		        var osTrigger = ( trigger ) ? trigger : osElement;
		        
		        osTrigger.waypoint(function() {
		          osElement.addClass('animated').addClass(osAnimationClass);
		          },{
		              triggerOnce: true,
		              offset: '90%'
		        });
		  });
		}
		
		onScrollInit( $('.os-animation') );
		onScrollInit( $('.staggered-animation01'), $('.staggered-animation-container01') );
		onScrollInit( $('.staggered-animation02'), $('.staggered-animation-container02') );
		
	});

})(jQuery);


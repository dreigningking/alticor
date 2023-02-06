



jQuery(document).ready(function() {



	



	if (navigator.userAgent.indexOf('Mac') != -1) {



	  jQuery("body").addClass("mac");



	} else {



	  jQuery("body").addClass("pc");



	}



	



	jQuery(".toggle-nav").click(function(){



		jQuery(".mega-menu").slideToggle();



		return false;



	});



	



	



	jQuery('.statistics ul li em').counterUp({



		delay: 10,



		time: 400



	});



	



	



	var headerH = jQuery('.header').height();



	



	



	jQuery(window).scroll(function(){



		var sTop = jQuery(window).scrollTop();



		



			if(sTop >= headerH) {



				



				jQuery('.header').addClass('is-sticky').delay(1500);



				



			



			} else {



				jQuery('.header').removeClass('is-sticky');



			}



			



	});



	



	



	jQuery(window).load(function(e) {



        // init Isotope



		var $grid = jQuery('.category-filter').isotope({



		  itemSelector: '.post-box'



		});



		



		// bind filter button click



		jQuery('.filters-button-group').on( 'click', 'li a', function() {



		  var filterValue = jQuery( this ).attr('data-filter');



		  // use filterFn if matches value



		  filterValue = filterValue;



		  $grid.isotope({ filter: filterValue });



		  



		  jQuery('.filters-button-group li').removeClass('active');



		  jQuery( this ).parent().addClass('active');



		  



		  return false;



		});



		



		



		// init Isotope



		var $teamgrid = jQuery('.team-isotope').isotope({



		  itemSelector: '.grid-item'



		});



		



		// bind filter button click



		jQuery('li.team-data').on( 'click', function() {



		  var filterValue1 = jQuery( this ).attr('data-filter');



		  // use filterFn if matches value



		  filterValue1 = filterValue1;



		  $teamgrid.isotope({ filter: filterValue1 });



		  



		  jQuery('.team-isotope li.team-data').removeClass('active');



		  jQuery( this ).parent().addClass('active');



		  



		  return false;



		});



		



		



		// Hide Header on scroll down



		var didScroll;



		var lastScrollTop = 0;



		var delta = 5;



		var navbarHeight = jQuery('.header').outerHeight();



		



		jQuery(window).scroll(function(event){



			didScroll = true;



		});



		



		setInterval(function() {



			if (didScroll) {



				hasScrolled();



				didScroll = false;



			}



		}, 250);



		



		function hasScrolled() {



			var st = jQuery(this).scrollTop();



			



			// Make sure they scroll more than delta



			if(Math.abs(lastScrollTop - st) <= delta)



				return;



			



			// If they scrolled down and are past the navbar, add class .nav-up.



			// This is necessary so you never see what is "behind" the navbar.



			if (st > lastScrollTop && st > navbarHeight){



				// Scroll Down



				jQuery('.header').addClass('open');



			} else {



				// Scroll Up



				if(st + jQuery(window).height() < jQuery(document).height()) {



					jQuery('.header').removeClass('open');



				}



			}



			



			lastScrollTop = st;



		}



		







		if(jQuery(window).width() < 768){

			

			/*

			jQuery('.grid-item, .post-box').on('inview', function(event, isInView) {



			  if (isInView) {



				jQuery(this).addClass('triggered');



			  } else {



				jQuery(this).removeClass('triggered');



			  }



			});

			*/

			

			jQuery('.grid-item, .post-box').on('click', 'a',  function(e) {

				

				

				if(!jQuery(this).hasClass('triggered')){

					e.preventDefault();

				}

				//$("#panel").animate({marginLeft:"-547px"}, 500 );

				//$(this).removeClass('nav_hidepanel');

				jQuery(this).addClass('triggered');

				

			});

			/*

			jQuery('.triggered').live('click', function() {

				

				var link = jQuery(this).attr('href');

				console.log(link);

				window.location.href = link;

				return true;

			});

*/

		} else {

			jQuery('.grid-item, .post-box').removeClass('triggered');

		}



		



		



		



		jQuery('#post-filter').on('click', 'li a' ,function(e) {



			e.preventDefault();



			jQuery('ul#post-filter li').removeClass('active');



			jQuery(this).parent().addClass('active');



			



			var category_id = jQuery(this).attr('data-filter');



			console.log(category_id);



						



			



			jQuery( '<div class="loadingClass"></div>' ).insertBefore( "#ajax-container" );



			var data = {};



			data.category_id = category_id;



			data.action = "home_post_ajax";



			jQuery.post(ajaxurl,data,function(result){



				jQuery('.loadingClass').remove();



				jQuery('div#ajax-container').html(result);



				



			});		



		});



		



		



    });



	



	



	



	jQuery('.acc-trigger').click(function(){



		if( jQuery(this).next().is(':hidden') ) {



			jQuery('.acc-trigger').removeClass('active').next().slideUp(); 



			jQuery(this).toggleClass('active').next().slideDown();



		} else {



			jQuery('.acc-trigger').removeClass('active').next().slideUp(); 



		}



		return false;



	});



	



	jQuery(".slideToggle > a").click(function () {



		



		jQuery(".slideToggle > a").removeClass('gray-color')



		jQuery('.slideTogglebox').slideUp();



		



		if(jQuery(this).next().is(':hidden')) {



			jQuery(this).next('.slideTogglebox').slideUp();



			jQuery(this).toggleClass('gray-color').next().slideDown();



		} else {



			jQuery(this).removeClass('gray-color').next('.slideTogglebox').slideUp();



		}



			 



	   	return false;  



	});



	



	jQuery('input.case-study').on('click',function(){



		jQuery(".slideToggle > a").removeClass('gray-color');



		jQuery('.slideTogglebox').slideUp();



	});



	



	/*Flex Slider*/



	jQuery('.flexslider').flexslider({



		animation: "slide",



		animationLoop: false,



		pausePlay: false,



		controlNav: false,



		slideshow: false,



		prevText: "",



		nextText: "",



		smoothHeight: false,



		start: function(slider){



		  jQuery('body').removeClass('loading');



		}



	});



	



	//var $grid = jQuery('.grid');



	



	// init Isotope



	var $grid = jQuery('.grid').isotope({



	  itemSelector: '.grid-item',



	  percentPosition: true	 



	});



	// layout Isotope after each image loads



	$grid.imagesLoaded().progress( function() {



	  $grid.isotope('layout');



	});  



	



	var $checkboxes = jQuery('#options input');



	



	var flag = false;







	$checkboxes.change(function(){



		var filterName = jQuery( this ).attr('data-name');



		var filterSlugID = jQuery( this ).attr('data-slug');







		



		



		if(jQuery(this).is(':checked')) {



			//jQuery(this).prop('disabled', true);



			var noreasion = '<li class="'+filterSlugID+'" rel="'+filterSlugID+'"><a href="#"><i class="fa fa-times"></i>'+filterName+'</a></li>';



			jQuery( "#selected-tags" ).append( jQuery( noreasion ) );



		} else {



			jQuery( "#selected-tags").find('.'+filterSlugID).remove();



		}



		



		//jQuery('#selected-tags').html(filterText);



	  });







		jQuery( document ).on('click', '#selected-tags > li', function(){



			



			var relSlug = jQuery(this).attr('rel');



			



			jQuery(this).remove();



			jQuery('#options input#'+relSlug).prop('checked',false).prop( "disabled", false ).trigger('change');



		



			return false;



		



		});



		//tab



		jQuery('.tabs-menu li').click(function(){



		var index = jQuery(this).index();



		jQuery('.tabs-menu li').removeClass('activated');



		jQuery(this).addClass('activated');



		jQuery('.panes').hide();



		jQuery('.panes').eq(index).show();



		return false;



	});



	



	jQuery("#project-filter").on('change', 'input[type=checkbox]', function(e) {



			e.preventDefault();











			var protypeId = [];



			jQuery("input[name='project_protype[]']:checked").each(function (){



				protypeId.push(parseInt(jQuery(this).val()));



			});



			



			var businessId = [];



			jQuery("input[name='project_business[]']:checked").each(function (){



				businessId.push(parseInt(jQuery(this).val()));



			});



		



			var locationId = [];



			jQuery("input[name='project_location[]']:checked").each(function (){



				locationId.push(parseInt(jQuery(this).val()));



			});



		



			var moreId = [];



			jQuery("input[name='project_more[]']:checked").each(function (){



				moreId.push(parseInt(jQuery(this).val()));



			});



		



			var caseonly = jQuery("input[name='case_study']:checked").val();



					



			jQuery( '<div class="loading-project"></div>' ).insertBefore( "#projectAjax" );



			



			var data = {};



			data.protypeId = protypeId;



			data.businessId = businessId;



			data.locationId = locationId;



			data.moreId = moreId;



			data.caseonly = caseonly;



			data.action = "projectfilterAjax";







			jQuery.post(ajaxurl,data,function(result){



				var jsonObj = jQuery.parseJSON( result );



				



				jQuery( '.loading-project' ).remove();



				jQuery('#projectAjax').html(jsonObj.showHtml);



				



			});



			



	});



	



	



	jQuery(document).mouseup(function (e)



	{



	   var container = jQuery(".slideTogglebox");







	   if (!container.is(e.target)



		   && container.has(e.target).length === 0)



	   {







		   jQuery(".slideToggle > a").removeClass('gray-color');



			jQuery('.slideTogglebox').slideUp();







	   }



	});



	



	// Add smooth scrolling to project page



	



	  jQuery("a#project_btn").on('click', function(event) {



	



		// Make sure this.hash has a value before overriding default behavior



		if (this.hash !== "") {



		  // Prevent default anchor click behavior



		  event.preventDefault();



	



		  // Store hash



		  var hash = this.hash;



	



		  // Using jQuery's animate() method to add smooth page scroll



		  // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area



		  jQuery('html, body').animate({



			scrollTop: jQuery(hash).offset().top



		  }, 800, function(){



	   



			// Add hash (#) to URL when done scrolling (default click behavior)



			window.location.hash = hash;



		  });



		} // End if



	  });



	



	var profiles = {







		windowCenter:



		{



			height:400,



			width:600,



			center:1,



			location:0,



			status:0



		}







	};



	



	jQuery(".popupwindow").popupwindow(profiles);



	



});







jQuery(window).on('load resize', function(e){



	



	if(jQuery(window).width() <= 768){



	



		jQuery('.projects-menu').hide();



		jQuery('.mega-menu > ul > li > a').click(function() {



			var isOpen = jQuery(this).hasClass('active');



			//alert(isOpen);



			jQuery('.mega-menu > ul > li > a').removeClass('active');



			if (isOpen === false) {



				jQuery(this).addClass('active');



			}



			return false;



		});







  		jQuery(window).scroll(function () { 



    			if( jQuery(window).scrollTop() > 300 ) {



      			//if (st > lastScrollTop && st > navbarHeight + 200){



					jQuery('.mega-menu').hide();



				//}







    			}



  		})



		



	}else{



		



		jQuery('.projects-menu .projects-menu-tab ul > li:first-child').addClass('current');



		



	



						



		jQuery('ul#tab-menu-1 li').hover(function(){



			var index = jQuery(this).index();



			jQuery('ul#tab-menu-1 li').removeClass('current');



			jQuery(this).addClass('current');



			jQuery('#tab-content-1 > .project-content').hide();



			jQuery('#tab-content-1 > .project-content').eq(index).fadeIn({ queue: false, duration: '1000'});



			return false;



		});



		



		jQuery('ul#tab-menu-2 li').hover(function(){



			var index = jQuery(this).index();



			jQuery('ul#tab-menu-2 li').removeClass('current');



			jQuery(this).addClass('current');



			jQuery('#tab-content-2 > .project-content').hide();



			jQuery('#tab-content-2 > .project-content').eq(index).fadeIn({ queue: false, duration: '1000'});



			return false;



		});



		



		jQuery('ul#tab-menu-3 li').hover(function(){



			var index = jQuery(this).index();



			jQuery('ul#tab-menu-3 li').removeClass('current');



			jQuery(this).addClass('current');



			jQuery('#tab-content-3 > .project-content').hide();



			jQuery('#tab-content-3 > .project-content').eq(index).fadeIn({ queue: false, duration: '1000'});



			return false;



		});



		



		jQuery('ul#tab-menu-4 li').hover(function(){



			var index = jQuery(this).index();



			jQuery('ul#tab-menu-4 li').removeClass('current');



			jQuery(this).addClass('current');



			jQuery('#tab-content-4 > .project-content').hide();



			jQuery('#tab-content-4 > .project-content').eq(index).fadeIn({ queue: false, duration: '1000'});



			return false;



		});



		



		jQuery('ul#tab-menu-contact li').hover(function(){



			var index = jQuery(this).index();



			jQuery('ul#tab-menu-contact li').removeClass('current');



			jQuery(this).addClass('current');



			jQuery('#tab-content-contact > .white-content').hide();



			jQuery('#tab-content-contact > .white-content').eq(index).fadeIn({ queue: false, duration: '1000'});



			return false;



		});



		



	}



		



})







/*  



jQuery('video').mediaelementplayer();



	setTimeout(function(){ jQuery('video[ctrl="false"]').parents('.mejs__mediaelement').nextAll('.mejs__controls').css({"visibility":"hidden"}); }, 0.5);    



*/







jQuery(".close-popup").click(function(){



	jQuery(".leader-profile").fadeOut();



	return false;



});







jQuery('a.open-box').click(function(){



	jQuery(".leader-profile").fadeOut();



	



	var activeTab = jQuery(this).attr("href"); 



	jQuery(activeTab).fadeIn();



	return false;



});











var swiper = new Swiper('.swiper-container', {



	nextButton: '.swiper-button-next',



	prevButton: '.swiper-button-prev',



	slidesPerView: 6,



	slidesPerColumn: 2,



	paginationClickable: true,



	spaceBetween: 20,



	centeredSlides: false,



	autoplay: 1500,



	autoplayDisableOnInteraction: true,



	// Responsive breakpoints



	  breakpoints: {



		320: {



		  slidesPerView: 1,



		  spaceBetween: 10



		},



		480: {



		  slidesPerView: 2,



		  spaceBetween: 20



		},



		640: {



		  slidesPerView: 3,



		  spaceBetween: 20



		},



		768: {



		  slidesPerView: 4,



		  spaceBetween: 20



		},



		1400: {



		  slidesPerView: 5,



		  spaceBetween: 20



		}



	}



});







jQuery(document).ready(function () {



   jQuery('.swiper-container').on('mouseenter', function () {



        console.log('Enter');



      swiper.stopAutoplay();



    });



    jQuery('.swiper-container').on('mouseleave', function () {



        console.log('Leave');



      swiper.startAutoplay();



    }); 







});



jQuery(document).ready(function () {



	var browser = {

        	isIe: function () {

            	return navigator.appVersion.indexOf("MSIE") != -1;

        	},

        	navigator: navigator.appVersion,

        	getVersion: function() {

            	var version = 999; // we assume a sane browser

            	if (navigator.appVersion.indexOf("MSIE") != -1)

                	// bah, IE again, lets downgrade version number

                	version = parseFloat(navigator.appVersion.split("MSIE")[1]);

            	return version;

        	}

    	};



	if (browser.isIe() && browser.getVersion() < 9) {

		isIE = true;

	} else {

    		isIE = false;

	}

	//var tridentOffset = navigator.appVersion.indexOf('Trident/');

	//if (jQuery('html').hasClass('ie') || (Function('/*@cc_on return document.documentMode===10@*/')())){

    	//	isIE = true;

	//}else{

    	//	isIE = false;

	//}



	if (isIE === true){

		jQuery('html, body').animate({scrollTop: '0px'}, 300);

		jQuery('#browser-msg').show();

		document.body.style.overflow = "hidden";

	}



	jQuery('#close').click(function(){

		jQuery('#browser-msg').hide();

		document.body.style.overflow = "visible";

		return false;

	});



});


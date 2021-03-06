$(document).ready(function(){

	"use strict";
	
	/* =================================
	LOADER 
	=================================== */
	$(".loader").delay(500).fadeOut();
    $(".animationload").delay(500).fadeOut("fast");

	/* =================================
	MAGNIFIC POPUP
	=================================== */
	$('.popup-gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1]
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			titleSrc: function(item) {
			  return item.el.attr('title') + '';
			}
		}
	});


});




  
  
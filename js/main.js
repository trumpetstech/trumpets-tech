(function ($) {
"use strict";

	//* Navbar Fixed
	var nav_offset_top = $('header').height() + 50;
	/*-------------------------------------------------------------------------------
	  Navbar 
	-------------------------------------------------------------------------------*/
$(window).on('scroll', function () {
	var scroll = $(window).scrollTop();
	if (scroll < 400) {
    $("#sticky-header").removeClass("navbar_fixed");
    $('#back-top').fadeOut(500);
	} else {
    $("#sticky-header").addClass("navbar_fixed");
    $('#back-top').fadeIn(500);
	}
});

// back to top 
$('#back-top a').on("click", function () {
  $('body,html').animate({
    scrollTop: 0
  }, 1000);
  return false;
});

// #######################
//   MOBILE MENU          
// #######################

var menu = $('ul#mobile-menu');
if (menu.length) {
    menu.slicknav({
        prependTo: ".mobile_menu",
        closedSymbol: '<i class="ti-angle-down"></i>',
        openedSymbol: '<i class="ti-angle-up"></i>'
    });
};



// wow js
  new WOW().init();

// nice select 
$('select').niceSelect();


// #######################
//  review-active        
// #######################
// #######################
$('.brand_active').owlCarousel({
  loop:true,
  margin:0,
items:1,
autoplay:true,
navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
  nav:false,
dots:true,
autoplayHoverPause: true,
autoplaySpeed: 800,
  responsive:{
      0:{
          items:2
      },
      767:{
          items:3
      },
      992:{
          items:5
      }
  }
});

// ####################### 
// case_actove       
// #######################

$('.case_actove').owlCarousel({
loop:true,
margin:20,
items:1,
// autoplay:true,
navText:['<i class="ti-angle-left"></i>','<i class="ti-angle-right"></i>'],
nav:true,
dots:false,
autoplayHoverPause: true,
autoplaySpeed: 800,
  responsive:{
      0:{
          items:1,
          nav:false
      },
      767:{
          items:2,
          nav:false
      },
      992:{
          items:3
      },
      1200:{
          items:4
      }
  }
});

// ####################### 
// testmonial_active     
// #######################

$('.testmonial_active').owlCarousel({
loop:true,
margin:20,
items:1,
autoplay:true,
navText:['<i class="flaticon-back"></i>','<i class="flaticon-next"></i>'],
nav:true,
dots:false,
autoplayHoverPause: true,
autoplaySpeed: 800,
  responsive:{
      0:{
          items:1
      },
      767:{
          items:1
      },
      992:{
          items:1
      }
  }
});

  // counter 
  $('.counter').counterUp({
    delay: 10,
    time: 10000
  });

/* magnificPopup img view */
$('.popup-image').magnificPopup({
  type: 'image',
	gallery: {
	  enabled: true
	}
});

/* magnificPopup video view */
$('.popup-video').magnificPopup({
  type: 'iframe',
  mainClass: 'mfp-fade',
  removalDelay: 160,
  preloader: false,
  fixedContentPos: false
});

// for filter
  // init Isotope
  var $grid = $('.grid').isotope({
    itemSelector: '.grid-item',
    percentPosition: true,
    masonry: {
      // use outer width of grid-sizer for columnWidth
      columnWidth: 1
    }
  });

  // filter items on button click
  $('.portfolio-menu').on('click', 'button', function () {
    var filterValue = $(this).attr('data-filter');
    $grid.isotope({ filter: filterValue });
  });

  //for menu active class
  $('.portfolio-menu button').on('click', function (event) {
    $(this).siblings('.active').removeClass('active');
    $(this).addClass('active');
    event.preventDefault();
	});


// $('#back-top a').on("click", function () {
//   $('body,html').animate({
//     scrollTop: 0
//   }, 1000);
//   return false;
// });
// nice select 


// focus contact
$(window).load(function(){
  $(".bordered_1 input").val("");
  
  $(".input-effect input").focusout(function(){
    if($(this).val() != ""){
      $(this).addClass("has-content");
    }else{
      $(this).removeClass("has-content");
    }
  })
});

  /*=============================================== 
        Parallax business_image
  ================================================*/
  if ($('.business_image').length > 0) {
    $('.business_image').parallax({
        scalarX: 7.0,
        scalarY: 0.0,
    });
}

$('.SeeMore2').click(function(){
  var $this = $(this);
  $this.toggleClass('SeeMore2');
  if($this.hasClass('SeeMore2')){
    $this.text('Read More');			
  } else {
    $this.text('Read Less');
  }
});


})(jQuery);	


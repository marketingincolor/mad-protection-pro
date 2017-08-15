$(window).scroll(function(){
	navSlideDown();
});

$(document).ready(function(){
	navSlideDown();
	scrollDown();
	productCarousel();
	fullBodyCarousel();
	columnHeight();
});

$(window).resize(function(){
	columnHeight();
});

// product table carousel for mobile
function productCarousel(){
	$('.compare-carousel').owlCarousel({
    center: false,
    stagePadding: 30,
    items:1,
    loop:false,
    margin:0,
    responsive:{
      640:{
          items:2
      }
    }
	});

	$('.compare-carousel').on('translated.owl.carousel', function(event) {
		var $lastSlide = $('.hardware-table').find('.owl-item')[2];
		var $firstSlide = $('.hardware-table').find('.owl-item')[0];

	  if ($lastSlide.classList.contains('active')) {
	  	$('.slide-img').css('display','none');
	  	$('.slide-img-right').css('display','block');
	  }else if($firstSlide.classList.contains('active')){
	  	$('.slide-img-right').css('display','none');
	  	$('.slide-img').css('display','block');
	  }
	});

	$('.slide-img-right').on('click',function(){
		$('.compare-carousel').trigger('prev.owl.carousel');
	});

	$('.slide-img').on('click',function(){
		$('.compare-carousel').trigger('next.owl.carousel');
	});
}

// Full Body Protection Carousel on product page
function fullBodyCarousel(){
	$('.full-body-carousel').owlCarousel({
    items:1,
    loop:false,
    center:true,
    margin:0,
    URLhashListener:true,
    autoplayHoverPause:true,
    startPosition: 'URLHash',
    animateOut: 'fadeOut',
    animateIn: 'fadeIn'
  });
}

// make columns on product page always stay equal height
function columnHeight(){
	// var leftColHeight  = $('.carousel-column').outerHeight();
	// var rightColHeight = $('.black-column').outerHeight();

	// $('.carousel-column').find('.owl-item').find('img').each(function(){
	// 	$(this).css({'height':leftColHeight});
	// });

	// if (leftColHeight > rightColHeight){
	// 	$('.black-column').css({'height':leftColHeight});
	// }else{
	// 	$('.carousel-column').css({'height':rightColHeight});
	// }
}

// Scroll down to second section on home page
function scrollDown(){
	$('.scroll-down').on('click',function(){
		var height = $('.large-hero').outerHeight();
		$('html,body').animate({
      scrollTop: height
    }, 1000);
	});
}

// Adds a disabled option to the beginning of <select> elements
// in contact forms, since Ninja Forms can't do it.
setTimeout(function(){
	(function addDisabledSelect(){
		var $form = $('.nf-form-cont');
		$form.find('#nf-field-5').find('option').removeAttr("selected");
		$form.find('#nf-field-5').find('option:first').before('<option disabled="disabled" selected="selected">Select one</option>');
		$form.find('#nf-field-9,#nf-field-17').find('option').removeAttr("selected");
		$form.find('#nf-field-9,#nf-field-17').find('option:first').before('<option disabled="disabled" selected="selected">Select country</option>');
	})();
},150);

// makes nav slide down after scrolling past 1st section
function navSlideDown(){
	var viewportHeight = $(window).height();
	if ($('body').hasClass('home') || $('body').hasClass('page-template-page-products')) {
		if ($(window).scrollTop() > 200 && $(window).scrollTop() < viewportHeight) {
			$('.top-bar').removeClass('slide-down').addClass('opacity0');
		}
		if ($(window).scrollTop() >= viewportHeight) {
			$('.top-bar').addClass('slide-down');
		}
		if ($(window).scrollTop() < 200) {
			$('.top-bar').removeClass('opacity0');
		}
	}else{
		var topHeight = $('.top-bg').outerHeight();
		if ($(window).scrollTop() > 0 && $(window).scrollTop() < topHeight) {
			$('.top-bar').removeClass('slide-down').addClass('opacity0');
		}
		if ($(window).scrollTop() >= topHeight) {
			$('.top-bar').addClass('slide-down');
		}
		if ($(window).scrollTop() < 200) {
			$('.top-bar').removeClass('opacity0');
		}
	}
}
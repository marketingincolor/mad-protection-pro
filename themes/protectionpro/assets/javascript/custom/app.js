$(window).scroll(function(){
	navSlideDown();
});

$(document).ready(function(){
	navSlideDown();
	scrollDown();
	productCarousel();
	fullBodyCarousel();
	columnHeight();
	activeSwatch();
	ajaxFAQsearch();
});

$(window).resize(function(){
	columnHeight();
});

function changeCountryValue(){
	if ($('body').hasClass('page-template-page-distributor')) {
		$('#nf-field-17').find('option').each(function(){
		  var country = $(this).text();
		  $(this).attr('value',country)
		});
	}
}

// change active swatch on full body product section
function activeSwatch(){
	var $imgs = $('.img-ul').find('img');
	$imgs.on('click',function(){
		$imgs.removeClass('active-swatch');
		$(this).addClass('active-swatch');
	});
}

// Search FAQs using AJAX
function ajaxFAQsearch(){
	$('#faq-page').on('keyup','#s',function(e){
		e.preventDefault();
		var $form    = $(this).parent().parent();
    var query    = $(this).val();
    var $content = $('#accordion-container');
    var url      = '';

    if ($('body').hasClass('es')) {
    	url = templateURL + '/ajax-search-es.php';
    }else if($('body').hasClass('it')){
    	url = templateURL + '/ajax-search-it.php';
    }else{
    	url = templateURL + '/ajax-search.php';
    }

		$.ajax({
			url: url,
			type: 'POST',
			data: {query : query},
			success: function(response) {
        $content.html(response).foundation();
      }
		});
	});
}

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
	var rightColHeight = $('.black-column').outerHeight();

	$('.full-body').find('.item').each(function(){
		$(this).css({'height':rightColHeight});
	});
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

// change placeholder text on mobile for first and last name
setTimeout(function(){
	if ($(window).width() < 640) {
		// first name
		$('.page-template-page-contact').find('#nf-field-1').attr('placeholder','First name');
		// last name
		$('.page-template-page-contact').find('#nf-field-6').attr('placeholder','Last name');
		// Italian first name
		$('.page-template-page-contact').find('#nf-field-23').attr('placeholder','Nome');
		// Italian last name
		$('.page-template-page-contact').find('#nf-field-28').attr('placeholder','Cognome');
	}
},250);

// Adds a disabled option to the beginning of <select> elements on Contact Page
// in contact forms, since Ninja Forms can't do it.
setTimeout(function(){
	(function addDisabledSelect(){
		var $form = $('#nf-form-1-cont');
		$form.find('#nf-field-5').find('option').removeAttr("selected");
		$form.find('#nf-field-5').find('option:first').before('<option disabled="disabled" selected="selected">Please Choose One</option>');
		$form.find('#nf-field-27').find('option').removeAttr("selected");
		$form.find('#nf-field-27').find('option:first').before('<option disabled="disabled" selected="selected">Scegli una opzione</option>');
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
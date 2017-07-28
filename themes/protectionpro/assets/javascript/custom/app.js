$(window).scroll(function(){
	navSlideDown();
});

$(document).ready(function(){
	navSlideDown();
});

$(window).resize(function(){
	
});


// Adds a disabled option to the beginning of <select> elements
// in contact forms, since Ninja Forms can't do it.
setTimeout(function(){
	(function addDisabledSelect(){
		var $form = $('.nf-form-cont');
		$form.find('#nf-field-5').find('option').removeAttr("selected");
		$form.find('#nf-field-5').find('option:first').before('<option disabled="disabled" selected="selected">Select one</option>');
		$form.find('#nf-field-9').find('option').removeAttr("selected");
		$form.find('#nf-field-9').find('option:first').before('<option disabled="disabled" selected="selected">Select country</option>');
	})();
},150);

// makes nav slide down after scrolling past 1st section
function navSlideDown(){
	var viewportHeight = $(window).height();
	if ($('body').hasClass('home') || $('body').hasClass('page-template-page-products')) {
		console.log('home');
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
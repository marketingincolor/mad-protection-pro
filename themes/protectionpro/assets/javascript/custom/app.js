$(window).scroll(function(){
	navSlideDown();
});

function navSlideDown(){
	if ($(window).scrollTop() > 200 && $(window).scrollTop() < 500) {
		$('.top-bar').removeClass('slide-down').addClass('opacity0');
	}
	if ($(window).scrollTop() > 700) {
		$('.top-bar').addClass('slide-down');
	}
	if ($(window).scrollTop() < 200) {
		$('.top-bar').removeClass('opacity0');
	}
}
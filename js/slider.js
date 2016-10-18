$(document).ready(function(){
	// options
	var speed = 500; //transition speed - fade
	var autoswitch = true; //auto slider options
	var autoswitch_speed = 5000; //auto slider speed
	
	// add first initial active class
	$(".slide").first().addClass("slide-active");
	
	// hide all slides
	$(".slide").hide;
	
	// show only active class slide
	$(".slide-active").show();
	
	// Next Event Handler
	$('#next').on('click', nextSlide);// call function nextSlide
	
	// Prev Event Handler
	$('#prev').on('click', prevSlide);// call function prevSlide
	
	// Auto Slider Handler
	if(autoswitch == true){
		setInterval(nextSlide,autoswitch_speed);// call function and value 4000
	}
	
	// Switch to next slide
	function nextSlide(){
		$('.slide-active').removeClass('slide-active').addClass('oldActive');
		if($('.oldActive').is(':last-child')){
			$('.slide').first().addClass('slide-active');
		} else {
			$('.oldActive').next().addClass('slide-active');
		}
		$('.oldActive').removeClass('oldActive');
		$('.slide').fadeOut(speed);
		$('.slide-active').fadeIn(speed);
	}
	
	// Switch to prev slide
	function prevSlide(){
		$('.slide-active').removeClass('slide-active').addClass('oldActive');
		if($('.oldActive').is(':first-child')){
			$('.slide').last().addClass('slide-active');
		} else {
			$('.oldActive').prev().addClass('slide-active');
		}
		$('.oldActive').removeClass('oldActive');
		$('.slide').fadeOut(speed);
		$('.slide-active').fadeIn(speed);
	}
});
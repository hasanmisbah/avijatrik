$(document).ready(function() {
  //set variables
  var slide = $('.slide');
  var prev = $('#prev');
  var next = $('#next');
  //var lastActive = $('.lastActive');

  slide.first().addClass('active');

  slide.hide();

  $('.active').show();

  next.on('click', nextSlide);

  prev.on('click', prevSlide);

  var autoswitch = true;
  
  if (autoswitch == true) {
    setInterval(nextSlide, 2500);
  }
  //Switch to next slide
  function nextSlide() {
    $('.active').removeClass('active').addClass('lastActive');
    //if it's the last slide
    if ($('.lastActive').is(':last-child')) {
      slide.first().addClass('active');
    } else {
      $('.lastActive').next().addClass('active');
    }
    $('.lastActive').removeClass('lastActive');
    slide.fadeOut(500);
    $('.active').fadeIn(500);
  };

  function prevSlide() {
    $('.active').removeClass('active').addClass('lastActive');
    //if it's the last slide
    if ($('.lastActive').is(':first-child')) {
      slide.last().addClass('active');
    } else {
      $('.lastActive').prev().addClass('active');
    }
    $('.lastActive').removeClass('lastActive');
    slide.fadeOut(500);
    $('.active').fadeIn(500);
  };
});
$(window).scroll(function() {
  if ($(document).scrollTop() > 50) {
    $('nav').addClass('shrink');
		$('body').addClass('shrink');
  } else {
    $('nav').removeClass('shrink');
		$('body').removeClass('shrink');
  }
});
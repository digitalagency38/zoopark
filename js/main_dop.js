$(function() {
  $('.menu').on('click', function() {
	  $('.burger').addClass('isOpened');
	  $(this).addClass('isHidden');
	  $('.menu-close').addClass('isActive');
  });
  $('.menu-close').on('click', function() {
	  $('.burger').removeClass('isOpened');
	  $('.menu').removeClass('isHidden');
	  $(this).removeClass('isActive');
  });
  new WOW( {
    boxClass: 'wow',
    animateClass: 'animated',
    offset: 0,
    mobile: false,
    live: true
  }).init();
});
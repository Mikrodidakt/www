/* Closes menu when clicking on an item */
$(document).on('click','.navbar-collapse.in',function(e) {
	if( $(e.target).is('a') && $(e.target).attr('class') != 'dropdown-toggle' ) {
		$(this).collapse('hide');
	}
});

/* Closes menu when clicking outside the menu */
$(document).click(function (e) {
	var clickover = $(e.target);
	var $navbar = $(".navbar-collapse");               
	var _opened = $navbar.hasClass("in");
	if (_opened === true && !clickover.hasClass("navbar-toggle")) {      
		$navbar.collapse('hide');
	}
});
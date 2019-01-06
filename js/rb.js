function adjustHome(){
	if($(window).width() >= 992) {
		$('.first-column').addClass('pull-left');
		$('.second-column').addClass('pull-right');
	}
	else {
		$('.first-column').removeClass('pull-left');
		$('.second-column').removeClass('pull-right');
	}
}

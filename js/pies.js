var scrolled = false;

$(window).scroll(function() {
	scrolled = true;
});

setInterval(function() {
	if (scrolled) {
		scrolled = false;
		if ($(window).scrollTop() > 75) {
			console.log('scroll is >75');
			$('nav').animate({
	            backgroundColor: 'background: rgba(40,99,115,0.9)'
	    	}, 250 );
		} else {
			$('nav').animate({
	            backgroundColor: 'rgba(255,255,255,0.5)'
	    	}, 250 );
		}
	}
}, 250);


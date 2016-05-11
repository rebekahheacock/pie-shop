/* Rebekah Heacock Jones
 * rebekah.heacock@gmail.com
 * CSCI E-12, Spring 2016
 * pies.js
 */


/* Check to see whether the window has scrolled.
 * If it has by more than 75px,
 * then change the background color of the nav bar.
 * Using jQuery.color: https://github.com/jquery/jquery-color
 */

var scrolled = false;

// change 'scrolled' to true when window scrolls
$(window).scroll(function() {
	scrolled = true;
});

// every 250 ms, check to see if window has scrolled
setInterval(function() {
	if (scrolled) {
		scrolled = false;
		if ($(window).scrollTop() > 75) {

			// fade nav to dark teal
			$('nav').animate({
	            backgroundColor: 'background: rgba(40,99,115,0.9)'
	    	}, 250 );
		} else {

			// fade nave to semi-transparent white
			$('nav').animate({
	            backgroundColor: 'rgba(255,255,255,0.5)'
	    	}, 250 );
		}
	}
}, 250);


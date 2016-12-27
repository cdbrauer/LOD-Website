function getWindowSize() {
	var viewPortWidth;
	var viewPortHeight;

	// the more standards compliant browsers (mozilla/netscape/opera/IE7) use window.innerWidth and window.innerHeight
	if (typeof window.innerWidth != 'undefined') {
		viewPortWidth = window.innerWidth,
		viewPortHeight = window.innerHeight
	}

		// IE6 in standards compliant mode (i.e. with a valid doctype as the first line in the document)
		else if (typeof document.documentElement != 'undefined'
		&& typeof document.documentElement.clientWidth !=
		'undefined' && document.documentElement.clientWidth != 0) {
		viewPortWidth = document.documentElement.clientWidth,
		viewPortHeight = document.documentElement.clientHeight
	}

	// older versions of IE
	else {
		viewPortWidth = document.getElementsByTagName('body')[0].clientWidth,
		viewPortHeight = document.getElementsByTagName('body')[0].clientHeight
	}

	return [viewPortWidth, viewPortHeight];
}
	
$(window).scroll(function () {
	[viewPortWidth, viewPortHeight] = getWindowSize();

	$("#navbar").css("top", Math.min(0, (4*viewPortHeight) - $(this).scrollTop()));
	$("#mainMenu").css("top", Math.min(0, (4*viewPortHeight) - $(this).scrollTop()));
	$("#floatingFooter").css("bottom", Math.max(0, $(this).scrollTop() - (4*viewPortHeight)));
});

// Scroll to specific section
function scroll(multiplier) {
	[viewPortWidth, viewPortHeight] = getWindowSize();

	closeMenu();

	$('html, body').animate({
		scrollTop: viewPortHeight*multiplier,
		scrollLeft: 0
	}, 1000);
}

// Toggle Main Menu
function openMenu() {
	var h = document.getElementById('navbar').clientHeight;
	h += "px";
	
	document.getElementById('navbarBack').style.height = h;
	$("#navbarBack").slideDown(500);
	$("#mainMenu").slideDown(500);
	$("#menuOpen").hide();
	$("#menuClose").show();
}

function closeMenu() {
	$("#navbarBack").slideUp(500);
	$("#mainMenu").slideUp(500);
	$("#menuClose").hide();
	$("#menuOpen").show();
}

// Change displayed content based on hash
$(function () {
	// Bind the event.
	$(window).hashchange(function () {
		// Alerts every time the hash changes
		if (window.location.hash && window.location.hash != "#home") {
			// Hash found
			var hash = window.location.hash;
			hash += 'Body';
			//alert(hash);
			closeMenu();
			$("#floatingFooter").slideUp(750);
			$("#homepage").slideUp(500);

			/*
			$("#banner").slideUp();
			$("#bannerSpacer").slideUp();
			$("#logo").animate({ margin: '20px 0 0 0' });
			$(".footer").fadeOut(400).delay(400);
			$(".bodycontent").fadeOut(400).delay(400);
			$(hash).fadeIn(400).delay(400);
			$("#footerPage").fadeIn(400);
			*/
		}
		else {
			// No hash found
			closeMenu();
			scroll(0);
			$("#floatingFooter").slideDown(750);
			$("#homepage").slideDown(2000);


			/*
			$(".footer").fadeOut(400).delay(400);
			$(".bodycontent").fadeOut(400).delay(400);
			$("#banner").slideDown();
			$("#bannerSpacer").slideDown();
			$("#logo").animate({ margin: '20px 0 20px 0' });
			$("#footerHome").fadeIn(400);
			*/
		}
	});
});

$(document).ready(function() {
	$('.popup-youtube').magnificPopup({type:'iframe'});
});
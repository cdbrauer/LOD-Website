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

function setHeaderFooter(){
	[viewPortWidth, viewPortHeight] = getWindowSize();

	var v = viewPortHeight;
	var h = document.getElementById('bodyContent').clientHeight;
	h -= v;
	h = Math.min(0, abs(h));

	$("#navbar").css("top", Math.min(0, (h) - $(this).scrollTop()));
	$("#mainMenu").css("top", Math.min(0, (h) - $(this).scrollTop()));
	$(".floatingFooter").css("bottom", Math.max(0, $(this).scrollTop() - (h)));
}

$(window).scroll(function () {
	setHeaderFooter();
});

// Detect Navbar Height
function setNavbarSpacer() {
	var h = document.getElementById('navbar').clientHeight;
	h += "px";

	var elements = document.getElementsByClassName('navbarSpacer');

	for(i = 0; i < elements.length; i++) {
		elements[i].style.height = h;
	}
}

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
			hash += 'page';
			var hashFooter = hash;
			hashFooter += 'Footer';
			//alert(hash);
			closeMenu();
			$(".floatingFooter").slideUp(500);
			$(".page").fadeOut(500);

			$("#fixedFooter").fadeOut(500).delay(50).fadeIn(500);

			$(hash).delay(550).fadeIn(500);
			$(hashFooter).delay(550).slideDown(500);

			//$("#logo").animate({ margin: '20px 0 0 0' });
		}
		else {
			// No hash found or #home
			closeMenu();
			$(".floatingFooter").not("#homepageFooter").slideUp(500);
			$(".page").not("#homepage").fadeOut(500);

			$("#fixedFooter").fadeOut(500).delay(50).fadeIn(500);

			$("#homepage").delay(550).fadeIn(500);
			$("#homepageFooter").delay(550).slideDown(500);
		}
	});
});

$(document).ready(function() {
	$(window).hashchange();
	setNavbarSpacer();
	setHeaderFooter();
	$('.popup-youtube').magnificPopup({type:'iframe'});
});
var lastHash = "#home";
var lightboxOpen = false;

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
	h = Math.max(0, h);

	$("#navbar").css("top", Math.min(0, (h) - $(this).scrollTop()));
	$("#mainMenu").css("top", Math.min(0, (h) - $(this).scrollTop()));
	$(".floatingFooter").css("bottom", Math.max(0, $(this).scrollTop() - (h)));
}

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
	//alert("test");
	
	[viewPortWidth, viewPortHeight] = getWindowSize();
	viewPortHeight = viewPortHeight * multiplier;

	closeMenu();

	$('html, body').animate({scrollTop: viewPortHeight}, 1000, function(){
		//callback
	});
}

// Toggle Lightboxes
function openLightbox(name){
	if (name) {
		name = "#" + name + "Lightbox";

		$(name).show();
		$(name).animate({
			marginTop: "20vh",
			marginBottom: "20vh",
			height: "60vh"
		}, 500, function () {
			lightboxOpen = true;
		});
	}
}

function showLightbox(newLightbox){
	if (lightboxOpen) {
		$(".lightbox").animate({
			marginTop: "50vh",
			marginBottom: "50vh",
			height: "0px"
		}, 500, function () {
			$(".lightbox").hide();
			lightboxOpen = false;
			openLightbox(newLightbox);
		});
	}
	else{
		openLightbox(newLightbox);
	}
}

/*$(document).click(function (event) {
	if (!$(event.target).closest('.lightbox').length) {
		showLightbox(null);
	}
})*/

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

$(document).click(function (event) {
	if (!$(event.target).closest('#mainMenu').length) {
		if ($('#mainMenu').is(":visible")) {
			closeMenu();
		}
	}
})

// Change displayed content based on hash
$(window).hashchange(function () {
	// Alerts every time the hash changes
	var hash = window.location.hash;

	if (hash) {
		// Hash found
		closeMenu();

		var section = hash.slice(-1);

		if (!isNaN(section)) {
			section -= 1;
			hash = hash.slice(0, -1);
		}
		else {
			section = 0;
		}

		var scrollDelay = 0;

		if (hash != lastHash) {
			lastHash = hash;
			scrollDelay = 1050;

			hash += 'page';
			var hashFooter = hash;
			hashFooter += 'Footer';

			$(".floatingFooter").slideUp(500);
			$(".page").fadeOut(500);
			$("#fixedFooter").fadeOut(500).delay(50).fadeIn(500);
			$(hash).delay(550).fadeIn(500);
			$(hashFooter).delay(550).slideDown(500);
		}

		$(this).delay(scrollDelay).queue(function () {
			scroll(section);
			$(this).dequeue();
		});
	}
	else {
		// No hash found
		lastHash = "#home";
		closeMenu();
		window.location.hash = "#home";

		$(".floatingFooter").not("#homepageFooter").slideUp(500);
		$(".page").not("#homepage").fadeOut(500);
		$("#fixedFooter").fadeOut(500).delay(50).fadeIn(500);
		$("#homepage").delay(550).fadeIn(500);
		$("#homepageFooter").delay(550).slideDown(500);
	}
});

$(window).scroll(function () {
	setHeaderFooter();
});

$(document).ready(function () {
	setNavbarSpacer();
	setHeaderFooter();

	if (window.location.hash && window.location.hash != "#home") {
		$(window).delay(500).hashchange();
	}

	$('.popup-youtube').magnificPopup({ type: 'iframe' });
});
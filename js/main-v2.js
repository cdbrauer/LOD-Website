var lastHash = "#home";
var lightboxOpen = false;
var nameCount = 1;

function getWindowSize() {
	var viewPortWidth;
	var viewPortHeight;

	// the more standards compliant browsers (mozilla/netscape/opera/IE7) use window.innerWidth and window.innerHeight
	if (typeof window.innerWidth != 'undefined') {
		viewPortWidth = window.innerWidth;
		viewPortHeight = window.innerHeight;
	}

		// IE6 in standards compliant mode (i.e. with a valid doctype as the first line in the document)
		else if (typeof document.documentElement != 'undefined'
		&& typeof document.documentElement.clientWidth !=
		'undefined' && document.documentElement.clientWidth != 0) {
		viewPortWidth = document.documentElement.clientWidth;
		viewPortHeight = document.documentElement.clientHeight;
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

// Toggle Lightboxes
function openLightbox(name){
	if (name) {
		name = "#" + name + "Lightbox";

		$("#lightboxBack").fadeIn(500);
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
		$("#lightboxBack").fadeOut(500);
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

function addNameField() {
    nameCount++;
    
    $(`
        <div class="halfCellL">
            <div class="inputBack">
                <input class="textInput" type="text" name="firstname` + nameCount.toString() + `" placeholder="First Name">
            </div>
        </div>

        <div class="halfCellR">
            <div class="inputBack">
                <input class="textInput"  type="text" name="lastname` + nameCount.toString() + `" placeholder="Last Name">
            </div>
        </div>
    `).insertBefore("#addName");
}

$(document).click(function (event) {
	if (!$(event.target).closest('#mainMenu').length) {
		if ($('#mainMenu').is(":visible")) {
			closeMenu();
		}
	}
})

$(window).scroll(function () {
	setHeaderFooter();
});

$(document).ready(function () {
	setNavbarSpacer();
	setHeaderFooter();
});

var allowSubmit = false;

function captchaCompleted() {
	allowSubmit = true;
}

function captchaExpired() {
	allowSubmit = false;
}

function captchaCheck(e) {
	if (allowSubmit) return true;
	e.preventDefault();
	alert("Please complete reCaptcha before submitting");
	return false;
}

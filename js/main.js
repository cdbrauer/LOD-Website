// Toggle Main Menu
function openMenu() {
    $("#main-menu").slideDown(300);
    $("#menu-open").hide();
    $("#menu-close").show();
    // $("#sidebar").animate({opacity: '0'}, 300);
}

function closeMenu() {
    $("#main-menu").slideUp(300);
    $("#menu-close").hide();
    $("#menu-open").show();
    // $("#sidebar").animate({opacity: '1'}, 300);
}

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
    var h = document.getElementById('body-content').clientHeight;
    h -= v;
    h = Math.max(0, h);

    $("#navbar").css("top", Math.min(0, (h) - $(this).scrollTop()));
    $("#main-menu").css("top", Math.min(0, (h) - $(this).scrollTop()));
    $(".floating-footer").css("bottom", Math.max(0, $(this).scrollTop() - (h)));
}

$(document).click(function (event) {
    if (!$(event.target).closest('#main-menu').length) {
        if ($('#main-menu').is(":visible")) {
            closeMenu();
        }
    }
})

window.onscroll = function() {
    setHeaderFooter();
    scrollFunction();
};

function scrollFunction() {
    const $sidebar = $("#sidebar");
    let rect = document.getElementById("sidebar-container")

    if(!rect){return;}

    rect = rect.getBoundingClientRect();
    const currentOpacity = $sidebar.css("opacity")

    console.log(currentOpacity);

    if (rect.top < 0) {
        // if (currentOpacity == 0){
        //     $sidebar.animate({opacity: '1'}, 300);
        // }
        document.getElementById("sidebar").style.top = -rect.top + "px";
    } else {
        // if (currentOpacity == 1) {
        //     $sidebar.animate({opacity: '0'}, 300);
        // }
        document.getElementById("sidebar").style.top = "0";
    }
}
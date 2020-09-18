// Redirect old links
// Trigger hashchange event on load
$(document).ready(function () {
    if (window.location.hash && window.location.hash.toString() != "#home") {
        $(window).hashchange();
    }
});

// Redirect based on hash if needed
$(window).hashchange(function () {
    // Alerts every time the hash changes
    var hash = window.location.hash.toString();

    if (hash) {
        // Hash found
        hash = hash.substring(1);
        console.log(hash);

        if (hash == 'mission'){
            window.location.href = "about/index.html";
        } else if (hash == 'stream'){
            window.location.href = "stream/index.html";
        } else if (hash == 'connect'){
            window.location.href = "connect/index.html#card";
        } else if (hash == 'give'){
            window.location.href = "give/index.html";
        }
    }
});
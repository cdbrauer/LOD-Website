/**
 * Function for retrieving lists of data from Firebase.
 *
 * This will retrieve the data from the given path in the database,
 * convert the JSON object into formatted text using the given function,
 * and insert the data into HTML inside the specified div.
 */
function getDataList(path, dataConverter, divId) {
    firebase.database().ref(path).once("value").then(function(snapshot) {
        var events = snapshot.val();

        events.map(function(event) {
            return addTextToDiv(divId, dataConverter(events[index]));
        });
        
        for (var index in events) {
            if (events.hasOwnProperty(index)) {
                addTextToDiv(divId, dataConverter(events[index]));
            }
        }
    });
}

/**
 * Function for retrieving data from Firebase.
 *
 * This will retrieve the data from the given path in the database,
 * convert the JSON object into formatted text using the given function,
 * and insert the data into HTML inside the specified div.
 */
function getData(path, dataConverter, divId) {
    firebase.database().ref(path).once("value").then(function(snapshot) {
        addTextToDiv(divId, dataConverter(snapshot.val()));
    });
}

/**
 * Helper function for inserting text into a div in HTML
 */
function addTextToDiv(divId, text) {
    document.getElementById(divId).innerHTML += text;
    return text;
}

/**
 * Helper function for converting text into HTML elements
 */
function addElement(elementType, content) {
    if (content != null && content != "" && content != "Null") {
        var emailRegex = /([a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z0-9._-]+)/gi;
        content = content.replace(emailRegex, '<a href="mailto:$1">$1</a>');

        return "<" + elementType + ">" + content + "</" + elementType + ">";
    }
    else {
        return "";
    }
}

/**
 * Collection of functions for converting different types of JSON data from Firebase into HTML
 */
var DataConverters = {
    /**
     * Function that converts the JSON data representing a event on the In Our Church page into formatted HTML
     */
    event: function(event) {
        var html = "";

        html += addElement("h2", event.title); //'<h2>' + event.title + '</h2>';
        html += addElement("p", event.subtitle);
        html += addElement("p", event.age);
        html += addElement("p", event.time);
        html += addElement("p", event.room);
        html += addElement("p", event.d1);
        html += addElement("p", event.d2);
        html += addElement("p", event.contact);

        return html;
    },

    /**
     * Function that converts the JSON data representing a ministry on the Community page into formatted HTML
     */
    ministry: function(ministry) {
        var html = "";

        html += addElement("h2", ministry.title);
        html += addElement("p", ministry.d);
        html += addElement("p", ministry.d1);

        var link = ministry.link;

        if (link != null && link != "" && link != "Null") {
            html += `<p>For more information, see <a href="http://${link}" target="_blank">${link}</a></p>`;
        }

        return html;
    },

    /**
     * Function that converts the JSON data representing a website on the Links page into formatted HTML
     */
    website: function(site) {
        var html = "";

        html += addElement("h2", site.title);

        var link = site.link;

        if (link != null && link != "" && link != "Null") {
            html += `<p><a href="http://${link}" target="_blank">${link}</a></p>`;
        }

        html += addElement("p", site.d);

        return html;
    },

    /**
     * Function that converts the JSON data representing an app on the Links page into formatted HTML
     */
    app: function(app) {
        var html = "";

        html += '<div class="appIcons">';
        html += `<a href="${app.gpLink}" target="_blank"><img alt="Googly Play" src="img/google-play.png"/></a>`;
        html += `<a href="${app.asLink}" target="_blank"><img alt="Apple App Store" src="img/apps-store.png"/></a>`;
        html += '</div>';
        html += addElement("h2", app.title);
        html += addElement("p", app.d);

        var link = app.onlineVersion;

        if (link != null && link != "" && link != "Null") {
            html += `<p>Check out the online version at <a href="http://${link}" target="_blank">${link}</a></p>`;
        }

        html += '<div class="blankline" style="height: 0;">&nbsp;</div>';

        return html;
    },

    /**
     * Function that converts a string into a HTML list item
     */
    listItem: function(item) {
        var html = addElement("li", item);

        return html;
    },

    /**
     * Function that converts a string into HTML bold text
     */
    boldText: function(text) {
        var html = addElement("b", text);

        return html;
    }
}

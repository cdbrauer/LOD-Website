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
}

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
     * Function that converts the JSON data representing a church event into formatted HTML
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

    ministry: function(ministry) {
        var html = "";

        html += addElement("h2", ministry.title);
        html += addElement("p", ministry.d);
        html += "<a href=\"http://" + ministry.link + "\">" + ministry.link + "</a>";

        return html;
    }
}

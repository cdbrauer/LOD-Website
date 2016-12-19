/**
 * Function for retrieving lists of data from Firebase.
 *
 * This will retrieve the data from the given path in the database,
 * convert the JSON object into formatted text using the given function,
 * and insert the data into HTML inside the specified div.
 */
function getDataList(path, dataAdder, divId) {
    firebase.database().ref(path).once('value').then(function(snapshot) {
        var events = snapshot.val();

        for (var index in events) {
            if (events.hasOwnProperty(index)) {
                dataAdder(divId, events[index]);
            }
        }
    });
}

/**
 * Function for retrieving data from Firebase.
 *
 * This will retrieve the data from the given path in the database,
 * convert the JSON object into formatted text using the given function,
 * and insert the data into HTML inside the provided divId.
 */
function getData(path, dataAdder, divId) {
    firebase.database().ref(path).once('value').then(function(snapshot) {
        dataAdder(divId, snapshot.val());
    });
}

/**
 * Function that converts the JSON data representing a church event into formatted HTML
 */
function addEvent(divId, event) {
    var html = '';

    html = '<h2>' + event.title + '</h2>';
    html += '<p>' + event.age + '</p>';
    html += '<p>' + event.time + '</p>';
    html += '<p>' + event.room + '</p>';
    html += '<p>' + event.contact + '</p>';

    addTextToDiv(html);
}

/**
 * Helper function for inserting text into a div in HTML
 */
function addTextToDiv(divId, text) {
    document.getElementById(divId).innerHTML += text;
}

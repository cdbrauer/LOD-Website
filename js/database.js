function getEventsForGroup(divId, group) {
    var i = 0;

    while(true) {
        var success = getChurchEventBlocking(divId, group, i);

        if(success == false) {
            break;
        }

        i++;
    }
}

function getChurchEventBlocking(divId, group, index) {
    var success = true;
    var done = false;

    firebase.database().ref('church/' + group + '/' + index).once('value').then(function(snapshot) {
        if(snapshot.exists()) {
            var event = snapshot.val();
            var html = '<h2>' + event.title + '</h2>';
            html += '<p>' + event.age + '</p>';
            html += '<p>' + event.time + '</p>';
            html += '<p>' + event.room + '</p>';
            html += '<p>' + event.contact + '</p>';

            document.getElementById(divId).innerHTML = html;

            success = true;
        }
        else {
            success = false;
        }

        done = true;
    });

    while(done == false);

    return success;
}

function getChurchEvent(divId, group, index) {
    firebase.database().ref('church/' + group + '/' + index).once('value').then(function(snapshot) {
        var event = snapshot.val();
        var html = '<h2>' + event.title + '</h2>';
        html += '<p>' + event.age + '</p>';
        html += '<p>' + event.time + '</p>';
        html += '<p>' + event.room + '</p>';
        html += '<p>' + event.contact + '</p>';

        document.getElementById(divId).innerHTML = html;
    });
}

function testing() {
    firebase.database().ref('/church/adult/0').once('value').then(function(snapshot) {
        document.write(snapshot.val().d1);
    });
}

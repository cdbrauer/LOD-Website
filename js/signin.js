function onLoad() {
    console.log("onload");

    var user = firebase.auth().currentUser;

    if (user) {
        var email = user.email;
        var password = user.password;

        console.log(email + ", " + password);

        document.getElementById("username").value = email;
        document.getElementById("password").value = password;
    }
}

function signIn() {
    var user = firebase.auth().currentUser;

    if (!user) {
        console.log("Not signed in!");

        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;

        firebase.auth().signInWithEmailAndPassword(username, password).catch(function(error) {
            // Handle Errors here.
            var errorMessage = error.message;

            alert(errorMessage);
            // ...
        });

        firebase.auth().onAuthStateChanged(function(user) {
            if (user) {
                alert(`Signed in as: ${user.email}`);
            }
        });
    }
}

function testWrite() {
    var ref = firebase.database().ref("test");
    ref.set(new Date().getSeconds());
}

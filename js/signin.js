function signIn() {
    var user = firebase.auth().currentUser;

    if (!user) {
        console.log("Not signed in!");

        var password = document.getElementById("passwordField").value;

        firebase.auth().signInWithEmailAndPassword("jxxb0000@gmail.com", password).catch(function(error) {
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

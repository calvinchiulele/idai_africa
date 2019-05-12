// This should be added to every page that requires
// an authenticated user

firebase.auth().onAuthStateChanged(function(user) {
    if (!user) {
        // No user is signed in
        // Redirect him to our sign in page
        window.location.href = '/login'
    }
});

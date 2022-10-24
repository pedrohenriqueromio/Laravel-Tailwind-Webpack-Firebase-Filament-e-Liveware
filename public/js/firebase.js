var firebaseConfig = {
    apiKey: "AIzaSyDwkkPG4mKku3JrK_Z0Ehe323qW6F7IzaI",
    authDomain: "fir-filament.firebaseapp.com",
    projectId: "fir-filament",
    storageBucket: "fir-filament.appspot.com",
    messagingSenderId: "118337708025",
    appId: "1:118337708025:web:f2674b58df5f23d4dc2728"
};

firebase.initializeApp(firebaseConfig);
const messaging = firebase.messaging();

function closeFirebase() {
    var d = document.getElementById("toast-interactive");
    d.className += " hidden ";
}

function acceptFirebase() {
    var element = document.getElementById("toast-default-accept");
    element.classList.remove("hidden");
    (function test() {
        setTimeout(function() {
            element.classList.add("hidden");
            closeFirebase()
        }, 2000)
    })()
}

function initFirebaseMessagingRegistration() {
    messaging
        .requestPermission()
        .then(function() {
            return messaging.getToken()
        })
        .then(function(token) {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: '/save-token',
                type: 'POST',
                data: {
                    token: token
                },
                dataType: 'JSON',
                success: function(response) {
                    acceptFirebase();
                },
                error: function(err) {
                    console.log('User Chat Token Error' + err);
                    console.log(err);
                },
            });

        }).catch(function(err) {
            console.log('User Chat Token Error' + err);
        });
}

messaging.onMessage(function(payload) {
    const noteTitle = payload.notification.title;
    const noteOptions = {
        body: payload.notification.body,
        icon: payload.notification.icon,
    };
    new Notification(noteTitle, noteOptions);
});
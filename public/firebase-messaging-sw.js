 /*
  Give the service worker access to Firebase Messaging.
  Note that you can only use Firebase Messaging here, other Firebase libraries are not available in the service worker.
  */
 importScripts('https://www.gstatic.com/firebasejs/7.23.0/firebase-app.js');
 importScripts('https://www.gstatic.com/firebasejs/7.23.0/firebase-messaging.js');
 /*
 Initialize the Firebase app in the service worker by passing in the messagingSenderId.
 * New configuration for app@pulseservice.com
 */
 firebase.initializeApp({
     apiKey: "AIzaSyDwkkPG4mKku3JrK_Z0Ehe323qW6F7IzaI",
     authDomain: "fir-filament.firebaseapp.com",
     projectId: "fir-filament",
     storageBucket: "fir-filament.appspot.com",
     messagingSenderId: "118337708025",
     appId: "1:118337708025:web:f2674b58df5f23d4dc2728"
 });
 /*
 Retrieve an instance of Firebase Messaging so that it can handle background messages.
 */
 const messaging = firebase.messaging();
 messaging.setBackgroundMessageHandler(function(payload) {
     console.log(
         "[firebase-messaging-sw.js] Received background message ",
         payload,
     );
     /* Customize notification here */
     const notificationTitle = "Background Message Title";
     const notificationOptions = {
         body: "Background Message body.",
         icon: "/itwonders-web-logo.png",
     };
     return self.registration.showNotification(
         notificationTitle,
         notificationOptions,
     );
 });
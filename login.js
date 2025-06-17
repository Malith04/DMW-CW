import { initializeApp } from "https://www.gstatic.com/firebasejs/10.11.1/firebase-app.js";
import { getAuth, signInWithEmailAndPassword } from "https://www.gstatic.com/firebasejs/10.11.1/firebase-auth.js";

// Firebase config
const firebaseConfig = {
    apiKey: "AIzaSyACM92FuOGDM8dniwRSikrMKBWOQC5K1EA",
    authDomain: "driveease-4edf1.firebaseapp.com",
    projectId: "driveease-4edf1",
    storageBucket: "driveease-4edf1.firebasestorage.app",
    messagingSenderId: "133410369604",
    appId: "1:133410369604:web:1942af33e3129cf9424c11"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const auth = getAuth(app);

// Utility function to show messages
function showMessage(message, divId) {
    const messageDiv = document.getElementById(divId);
    messageDiv.style.display = "block";
    messageDiv.innerHTML = message;
    messageDiv.style.opacity = 1;
    setTimeout(() => {
        messageDiv.style.opacity = 0;
    }, 9000);
}

// Sign-in logic
const signInBtn = document.getElementById('submitSignIn');
signInBtn.addEventListener('click', (event)=>{
    event.preventDefault();
    const email = document.getElementById("email").value.trim();
    const pwd = document.getElementById("password").value;
    const auth=getAuth();

    signInWithEmailAndPassword(auth, email, pwd)
        .then((userCredential) => {
            showMessage('login is successfull', 'signInMessage')
            const user = userCredential.user;
            localStorage.setItem('loggedInUserId', user.uid);
            window.location.href='index.html'; // Redirect on success
        })
        .catch((error) => {
            const errorCode = error.code;
            if (errorCode === 'auth/invalid-credential' || errorCode === 'auth/wrong-password') {
                showMessage('Incorrect Email or Password', 'signInMessage');
            } else if (errorCode === 'auth/user-not-found') {
                showMessage('Account does not exist', 'signInMessage');
            } else {
                showMessage('Login failed: ' + error.message, 'signInMessage');
            }
        });
});

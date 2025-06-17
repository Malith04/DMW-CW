
  import { initializeApp } from "https://www.gstatic.com/firebasejs/11.9.1/firebase-app.js";
  import {getAuth, createUserWithEmailAndPassword, signInWithEmailAndPassword} from "https://www.gstatic.com/firebasejs/11.9.1/firebase-auth.js";
  import { getFirestore, setDoc, doc } from "https://www.gstatic.com/firebasejs/11.9.1/firebase-firestore.js";

  // Your web app's Firebase configuration
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

   function showMessage(message, divId){
    var messageDiv=document.getElementById(divId);
    messageDiv.style.display="block";
    messageDiv.innerHTML=message;
    messageDiv.style.opacity=1;
    setTimeout(function(){
        messageDiv.style.opacity=0;
    },5000);
  }

  const signUp = document.getElementById('submitSignUp');
  signUp.addEventListener('click', (event)=>{
    event.preventDefault();
    const name = document.getElementById('fullName').value.trim();    const email = document.getElementById('email');
    const phoneNo = document.getElementById('phone');
    const licenseNo = document.getElementById('license');
    const pwd = document.getElementById('password');
    const confirmPwd = document.getElementById('confirmPassword');

    const auth = getAuth();
    const db = getFirestore();

    createUserWithEmailAndPassword(auth, email.value, pwd.value)
    .then((userCredential)=>{
        const user = userCredential.user;
        const userData = {
          email: email.value,
          name: name,
          license: licenseNo.value,
          phone: phoneNo.value
};
        showMessage('Account Created Successfully', 'signUpMessage');

        const docRef = doc(db, "users", user.uid);
        setDoc(docRef, userData)
        .then(() => {
            window.location.href = 'login.html'; 
        })
        .catch((error) => {
            console.error("Error writing document", error);
            showMessage('Failed to save user data', 'signUpMessage');
        });
    })
    .catch((error) => {
        const errorCode = error.code;
        if (errorCode === 'auth/email-already-in-use') {
            showMessage('Email Address Already Exists!', 'signUpMessage');
        } else if (errorCode === 'auth/weak-password') {
            showMessage('Password should be at least 6 characters', 'signUpMessage');
        } else {
            showMessage('Unable to create User. Please try again.', 'signUpMessage');
        }
    });
});


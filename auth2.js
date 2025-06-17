// Import Firebase SDKs
import { initializeApp } from "https://www.gstatic.com/firebasejs/11.9.1/firebase-app.js";
import { getAuth, sendPasswordResetEmail } from "https://www.gstatic.com/firebasejs/11.9.1/firebase-auth.js";

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

// Show message function
function showMessage(message, isError = false) {
  const messageDiv = document.createElement('div');
  messageDiv.style.padding = "12px";
  messageDiv.style.marginTop = "15px";
  messageDiv.style.borderRadius = "8px";
  messageDiv.style.fontWeight = "500";
  messageDiv.style.textAlign = "center";
  messageDiv.style.backgroundColor = isError ? "#ffe5e5" : "#e6ffed";
  messageDiv.style.color = isError ? "#b20000" : "#006600";
  messageDiv.textContent = message;

  const form = document.getElementById("forgotPasswordForm");
  form.appendChild(messageDiv);

  setTimeout(() => {
    messageDiv.remove();
  }, 5000);
}

// Submit listener
document.getElementById("forgotPasswordForm").addEventListener("submit", function (e) {
  e.preventDefault();
  const email = document.getElementById("email").value.trim();

  sendPasswordResetEmail(auth, email)
    .then(() => {
      showMessage("✅ Reset link sent! Please check your inbox.");
    })
    .catch((error) => {
      if (error.code === "auth/user-not-found") {
        showMessage("⚠️ No account found with this email.", true);
      } else if (error.code === "auth/invalid-email") {
        showMessage("⚠️ Invalid email address.", true);
      } else {
        showMessage("❌ Something went wrong. Please try again later.", true);
      }
      console.error("Reset error:", error);
    });
});

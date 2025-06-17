import { initializeApp } from "https://www.gstatic.com/firebasejs/10.11.1/firebase-app.js";
import { getAuth, onAuthStateChanged } from "https://www.gstatic.com/firebasejs/10.11.1/firebase-auth.js";
import { getFirestore, addDoc, collection, serverTimestamp } from "https://www.gstatic.com/firebasejs/10.11.1/firebase-firestore.js";


// Firebase config
const firebaseConfig = {
  apiKey: "AIzaSyACM92FuOGDM8dniwRSikrMKBWOQC5K1EA",
  authDomain: "driveease-4edf1.firebaseapp.com",
  projectId: "driveease-4edf1",
  storageBucket: "driveease-4edf1.appspot.com",
  messagingSenderId: "133410369604",
  appId: "1:133410369604:web:1942af33e3129cf9424c11"
};

const app = initializeApp(firebaseConfig);
const auth = getAuth(app);
const db = getFirestore(app);

onAuthStateChanged(auth, (user) => {
  const form = document.getElementById("reservationForm");
  const section = document.getElementById("reservationSection");
  const overlay = document.getElementById("loginOverlay");

  if (user) {
    // Unblur section
    section.style.filter = "none";
    section.style.pointerEvents = "auto";
    overlay.style.display = "none";

    // Handle form submission
    form.addEventListener("submit", async (e) => {
      e.preventDefault();

      const carType = document.getElementById("carType").value;
      const pickup = document.getElementById("pickup").value;
      const dropoff = document.getElementById("dropoff").value;
      const pickupDate = document.getElementById("pickupDate").value;
      const pickupTime = document.getElementById("pickupTime").value;
      const dropoffDate = document.getElementById("dropoffDate").value;
      const dropoffTime = document.getElementById("dropoffTime").value;

      console.log("Saving reservation:", {
        carType, pickup, dropoff, pickupDate, pickupTime, dropoffDate, dropoffTime, userId: user.uid
      });

      try {
        await addDoc(collection(db, "reservations"), {
          userId: user.uid,
          carType,
          pickup,
          dropoff,
          pickupDate,
          pickupTime,
          dropoffDate,
          dropoffTime,
          createdAt: serverTimestamp()
        });

        alert("✅ Reservation stored successfully!");
        form.reset();
      } catch (err) {
        console.error("❌ Error storing reservation:", err);
        alert("Something went wrong. Please try again.");
      }
    });

  } else {
    // Blur and show overlay
    section.style.filter = "blur(4px)";
    section.style.pointerEvents = "none";
    overlay.style.display = "block";

    form.addEventListener("submit", (e) => {
      e.preventDefault();
      alert("⚠️ You must be logged in to make a reservation.");
      window.location.href = "login.html";
    });
  }
});

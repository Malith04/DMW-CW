// Handle Forgot Password Form Submission
document.getElementById('forgotPasswordForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const email = document.getElementById('email').value;
    
    if (!email) {
        alert('Please enter your email address.');
        return;
    }
    
    console.log('Sending reset link to:', email);
    
    alert('Password reset link sent! Check your email.');
});
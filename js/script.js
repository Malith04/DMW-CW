document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('registrationForm');
    const passwordInput = document.getElementById('password');
    const confirmPasswordInput = document.getElementById('confirm-password');
    const dobInput = document.getElementById('dob');
    
    // Real-time password validation
    passwordInput.addEventListener('input', function() {
        const password = passwordInput.value;
        const lengthReq = document.getElementById('length');
        const numberReq = document.getElementById('number');
        
        // Check length
        if (password.length >= 8) {
            lengthReq.style.color = '#34a853';
            lengthReq.innerHTML = '<i class="fas fa-check-circle"></i> 8+ characters';
        } else {
            lengthReq.style.color = '#666';
            lengthReq.innerHTML = '<i class="fas fa-circle"></i> 8+ characters';
        }
        
        // Check for number
        if (/\d/.test(password)) {
            numberReq.style.color = '#34a853';
            numberReq.innerHTML = '<i class="fas fa-check-circle"></i> 1 number';
        } else {
            numberReq.style.color = '#666';
            numberReq.innerHTML = '<i class="fas fa-circle"></i> 1 number';
        }
    });
    
    // Form submission validation
    form.addEventListener('submit', function(event) {
        let isValid = true;
        
        // Clear previous error messages
        document.querySelectorAll('.error-message').forEach(el => el.textContent = '');
        
        // Email validation
        const email = document.getElementById('email').value;
        if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
            document.getElementById('email-error').textContent = 'Please enter a valid email address';
            isValid = false;
        }
        
        // Password validation
        const password = passwordInput.value;
        if (password.length < 8) {
            document.getElementById('password-error').textContent = 'Password must be at least 8 characters';
            isValid = false;
        }
        if (!/\d/.test(password)) {
            document.getElementById('password-error').textContent = 'Password must contain at least one number';
            isValid = false;
        }
        
        // Confirm password validation
        const confirmPassword = confirmPasswordInput.value;
        if (password !== confirmPassword) {
            document.getElementById('confirm-password-error').textContent = 'Passwords do not match';
            isValid = false;
        }
        
        // Age validation (minimum 21 years)
        if (dobInput.value) {
            const dob = new Date(dobInput.value);
            const today = new Date();
            let age = today.getFullYear() - dob.getFullYear();
            const monthDiff = today.getMonth() - dob.getMonth();
            
            if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < dob.getDate())) {
                age--;
            }
            
            if (age < 20) {
                document.getElementById('dob-error').textContent = 'You must be at least 21 years old to rent a vehicle';
                isValid = false;
            }
        }
        
        if (!isValid) {
            event.preventDefault();
        }
    });
    
    // Set max date for date of birth (minimum 21 years old)
    const today = new Date();
    const minDate = new Date();
    minDate.setFullYear(today.getFullYear() - 20);
    dobInput.max = minDate.toISOString().split('T')[0];
});
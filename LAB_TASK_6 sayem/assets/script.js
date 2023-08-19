function validateRegistrationForm() {
    const usernameInput = document.getElementById('username');
    const passwordInput = document.getElementById('password');
    const usernameError = document.getElementById('usernameError');
    const passwordError = document.getElementById('passwordError');
    let valid = true;

    // Reset error messages
    usernameError.textContent = '';
    passwordError.textContent = '';

    // Validate username
    if (usernameInput.value.length < 4) {
        usernameError.textContent = 'Username must be at least 4 characters';
        valid = false;
    }

    // Validate password
    if (passwordInput.value.length < 6) {
        passwordError.textContent = 'Password must be at least 6 characters';
        valid = false;
    }

    return valid;
}

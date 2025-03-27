document.getElementById('password').addEventListener('input', function() {
    var password = this.value;
    var strengthStatus = document.getElementById('password-strength-status');
    var strength = 'Weak';
    var color = 'red';

    if (password.length >= 8) {
        strength = 'Medium';
        color = 'orange';
    }
    if (password.length >= 12 && /[A-Z]/.test(password) && /\d/.test(password) && /[@$!%*?&#]/.test(password)) {
        strength = 'Strong';
        color = 'green';
    }

    strengthStatus.textContent = `Strength: ${strength}`;
    strengthStatus.style.color = color;
});

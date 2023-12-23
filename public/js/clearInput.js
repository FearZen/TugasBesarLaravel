// public/js/clearInput.js
document.addEventListener('DOMContentLoaded', function () {
    var clearEmail = document.getElementById('clearEmail');
    var emailInput = document.getElementById('email');
    var placeholderText = document.getElementById('emailPlaceholder');

    if (clearEmail && emailInput && placeholderText) {
        clearEmail.addEventListener('click', function () {
            emailInput.value = '';
            placeholderText.style.display = 'block';
        });

        emailInput.addEventListener('input', function () {
            if (emailInput.value !== '') {
                placeholderText.style.display = 'none';
            } else {
                placeholderText.style.display = 'block';
            }
        });
    }

    var loginForm = document.getElementById('loginForm');
    if (loginForm) {
        loginForm.addEventListener('submit', function (event) {
            // Pastikan reCAPTCHA terisi (dikomentari untuk menonaktifkan reCAPTCHA)
            var recaptchaResponse = grecaptcha.getResponse();
            if (!recaptchaResponse) {
                alert('Mohon lengkapi reCAPTCHA.');
                event.preventDefault(); // Hentikan pengiriman formulir jika reCAPTCHA kosong
            }
        });

        var clearPassword = document.getElementById('clearPassword');
        var passwordInput = document.getElementById('password');
        var passwordPlaceholder = document.getElementById('passwordPlaceholder');
        var togglePassword = document.getElementById('togglePassword');

        if (clearPassword && passwordInput && passwordPlaceholder && togglePassword) {
            clearPassword.addEventListener('click', function () {
                passwordInput.value = '';
                passwordPlaceholder.style.display = 'block';
            });

            passwordInput.addEventListener('input', function () {
                if (passwordInput.value !== '') {
                    passwordPlaceholder.style.display = 'none';
                } else {
                    passwordPlaceholder.style.display = 'block';
                }
            });

            togglePassword.addEventListener('click', function () {
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    togglePassword.className = 'fas fa-eye-slash';
                } else {
                    passwordInput.type = 'password';
                    togglePassword.className = 'fas fa-eye';
                }
            });
        }
    }
});

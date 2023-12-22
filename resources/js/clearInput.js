// public/js/clearInput.js
document.addEventListener('DOMContentLoaded', function () {
    var clearEmail = document.getElementById('clearEmail');
    var emailInput = document.getElementById('email');

    if (clearEmail && emailInput) {
        clearEmail.addEventListener('click', function () {
            emailInput.value = '';
        });
    }
});

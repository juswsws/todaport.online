function handleForgotPassword() {
    window.location.href = 'login.html'; 
}

document.getElementById('forgot-password-link').addEventListener('click', function(event) {
    event.preventDefault(); 
    handleForgotPassword(); 
});


function handleLogin(event) {
    event.preventDefault(); 
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    if (email === '' || password === '') {
        alert('Please fill in all fields.');
        return;
    }

    window.location.href = 'appointment.html'; 
}
document.addEventListener('DOMContentLoaded', function() {
    const loginForm = document.querySelector('form');
 
    loginForm.addEventListener('submit', handleLogin);
});






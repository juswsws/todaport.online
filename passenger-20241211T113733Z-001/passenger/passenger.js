function submitForm() {
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const username = document.getElementById('username').value;

    
    if (name === '' || email === '' || password === '' || username === '') {
        alert('Please fill in all fields.');
        return;
    }

    if (password.length < 6) {
        alert('Password must be at least 6 characters long.');
        return;
    }

    
    console.log('Form submitted successfully!');
    console.log('Name:', name);
    console.log('Email:', email);
    console.log('Password:', password);
    console.log('Username:', username);
}
function submitForm() {
    
    alert("Registration form submitted!");
    window.location.href = 'termpol.html';
}

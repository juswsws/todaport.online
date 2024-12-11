document.getElementById('termsForm').addEventListener('submit', function(event) {
    event.preventDefault();
    if (document.getElementById('acceptTerms').checked) {
        alert('Thank you for accepting the terms and conditions.');
    } else {
        alert('You must accept the terms and conditions before submitting.');
    }
    window.location.href = 'cover.html'; 
});


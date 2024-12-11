document.getElementById('paymentForm').addEventListener('submit', function(event) {
    event.preventDefault(); 

    
    const name = document.getElementById('name').value;
    const modeOfPayment = document.getElementById('modeOfPayment').value;
    const cardNumber = document.getElementById('cardNumber').value;
    const amount = document.getElementById('amount').value;

    
    if (!name || !modeOfPayment || !cardNumber || !amount) {
        alert('Please fill in all fields.');
        return;
    }

   
    alert('SUCCESSFUL PAYMENT');
    window.location.href = 'arrival.html';

   
    document.getElementById('paymentForm').reset();
});
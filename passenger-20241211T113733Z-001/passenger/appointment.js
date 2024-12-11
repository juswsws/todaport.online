function bookAppointment(event) {
    event.preventDefault(); 

    const formData = new FormData(document.getElementById('bookingForm'));

    
    const appointmentData = {};
    formData.forEach((value, key) => {
        appointmentData[key] = value;
    });

    
    console.log(appointmentData);
    window.location.href = 'payment.html'; 

   

}
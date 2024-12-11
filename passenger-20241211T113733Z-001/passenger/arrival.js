function calculateArrivalTime() {
    const bookingTime = document.getElementById('bookingTime').value;
    const distance = parseFloat(document.getElementById('distance').value);

    if (bookingTime && distance >= 0) {
        const bookingDateTime = new Date(`1970-01-01T${bookingTime}Z`);
        const minTravelTime = distance * 10; 
        const maxTravelTime = distance * 15; 
        const averageTravelTime = (minTravelTime + maxTravelTime) / 2;
        
        const destinationArrivalDateTime = new Date(bookingDateTime.getTime() + averageTravelTime * 60000);
        const destinationArrivalTimeString = destinationArrivalDateTime.toISOString().substr(11, 5);

        document.getElementById('destinationArrival').value = destinationArrivalTimeString;
        document.getElementById('totalTime').textContent = `${averageTravelTime.toFixed(1)} minutes`;
    }
}

function rate(stars) {
    alert(`You rated ${stars} stars.`);
}

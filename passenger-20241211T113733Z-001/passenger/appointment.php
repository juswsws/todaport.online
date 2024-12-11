<?php 
include 'action/database.php';
session_start();
if(isset($_SESSION['userlog']) && ($_SESSION['userlog'])== true)
{
    $userlog = true;
    $Id = $_SESSION['userId'];
}
else
{
    $userlog = false;
    $Id = 0;
}
if($userlog)
{

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Map with Toda's Appointment</title>
    <link rel="stylesheet" href="appointment.css">
    <script src="appointment.js"></script>
</head>
<body>
    <div class="map-container mb-4 md:w-1/2">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d123779.51672146322!2d121.0338283297237!3d14.188341005401982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd63655ce077d3%3A0x39dd1f59c6edaced!2sCalamba%2C%204027%20Laguna!5e0!3m2!1sen!2sph!4v1732857492525!5m2!1sen!2sph"
             width="600" height="500" style="border:0;" allowfullscreen="" loading="lazy" 
             referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

        <div class="container">
            <h2>Tricycle Appointment Booking</h2>
            <form method="post" action="action/appointment.php">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="fname" required>
        
                <label for="contact">Contact Number:</label>
                <input type="tel" id="contact" name="number" required>
        
                <label for="date">Appointment Date:</label>
                <input type="date" id="date" name="date" required>
        
                <label for="time">Appointment Time:</label>
                <input type="time" id="time" name="time" required>
        
                <label for="pickupLocation">Pickup Location:</label>
                <input type="text" id="pickupLocation" name="pick-up" required>
        
                <label for="destination">Destination:</label>
                <input type="text" id="destination" name="destination" required>
                <input type="hidden" id="user_id" name="user_id" value="<?php echo $Id;?>">
        
                <button type="submit" name="book" >Book Appointment</button>

        </form>
        <a href="action/logout.php" style="color:black; text-decoration:none;"><button type="submit" name="book" >Logout</button></a>
        </div>
    </div>
</body> 
</html>

<?php } ?>
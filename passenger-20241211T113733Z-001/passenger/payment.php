<?php
$id = $_GET["id"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment and Ratings</title>
    <link rel="stylesheet" href="payment.css">
</head>

<body>
    <div class="container">
        <h1>Payment Form</h1>
        <form method="post" action="action/appointment.php"> 
            <label for="modeOfPayment">Mode of Payment:</label>
            <select id="modeOfPayment" required name="mode">
                <option value="" disabled selected>Select a payment method</option>
                <option value="cash">Cash</option>
                <option value="gcash">GCASH</option>
            </select>
    
            <label for="amount">Amount:</label>
            <input type="text" id="amount" placeholder="₱" name="amount" required>
            <input type="hidden"  name="id" value="<?php echo $id; ?>">
    
            <button name="payment" type="submit">Submit Payment</button>
        </div>
        </form>
    </div>


    <script src="payment.js"></script>
</body>
</html>
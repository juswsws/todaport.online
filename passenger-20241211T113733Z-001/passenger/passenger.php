<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="passenger.css">
    <title>User's Registration</title>
    <script src="passenger.js"></script>
</head>
<body>
    <div class="wrapper">
        <form method="post" action="action/register.php">   
            <h1>Register Here!</h1>

            <div class="input-box">
                <div class="input-field">
                    <input type="text" placeholder="First Name" name="fname" required>
                    <i class='bx bxs-user'></i>
                </div> 
                <div class="input-field">
                    <input type="text" placeholder="Last Name" name="lname" required>
                    <i class='bx bxs-user'></i>
                </div>
            </div>

            <div class="input-box">
                <div class="input-field">
                    <input type="email" placeholder="Email" name="email" required>
                    <i class='bx bxs-envelope'></i>
                </div>
                <div class="input-field">
                    <input type="number" placeholder="Phone Number" name="phone" required>
                    <i class='bx bxs-phone'></i>
                </div>
            </div>

            <div class="input-box">
                <div class="input-field">
                    <input type="password" placeholder="Password" name="pass" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <div class="input-field">
                    <input type="password" placeholder="Confirm Password"  name="pass1" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
            </div>
        
            <label><input type="checkbox" required>I hereby declare that the above information 
                provided is true and correct</label>

            <button type="submit" value="Register" name="register" class="button" >Register</button>
        </form>
    </div>
</body>
</html>
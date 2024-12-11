<?php 
include 'action/database.php';
if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['login'])) {
        $email = $_POST["email"];
        $pass = $_POST["pass"];

        $select= "SELECT * FROM `register` WHERE `email` = '$email' and `pass`= '$pass'";
        $result = mysqli_query($conn, $select);
        $row = mysqli_fetch_assoc($result);
        $count=mysqli_num_rows($result);
        if ($count>0){
        session_start();
        $Id = $row['Id'];
            $_SESSION['userlog'] = true;
            $_SESSION['userId'] = $Id;
            echo "<script>alert('welcome to todaport!');
            window.location.href = 'appointment.php';
               </script>";  
    }
    else{
        echo "<script>alert('Invalid Account!');
                 window.location=document.referrer;
                </script>"; 
      }  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODAPORT</title>
    <link rel="stylesheet" href="login.css">
    <script src="login.js"></script>
</head>
<body>

    <div class="wrapper">
        <form action="" method="post" >
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" id="email" placeholder="Email Address" name="email" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" id="password" placeholder="Password" name="pass" required>
                <i class='bx bxs-lock-alt'></i>
            </div>

            <div class="Remember-forgot">
                <label><input type="checkbox" id="remember-me"> Remember me</label> 
                <a href="#" id="forgot-password-link">Forgot password</a>
            </div>

            <button type="submit" class="button" name="login">LOGIN</button>
           
        </form>
    </div>
    
</body>
</html>
<?php 
include 'database.php';
if($_SERVER["REQUEST_METHOD"] == "POST") {

    if(isset($_POST['register'])) {
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $pass = $_POST["pass"];
        $pass1 = $_POST["pass1"];


        $select= "SELECT * FROM `register` WHERE `email` = '$email'";
        $result = mysqli_query($conn, $select);
        $count=mysqli_num_rows($result);
        if ($count>0){

            echo "<script>alert('email already exist!');
                 window.location=document.referrer;
                </script>"; 
    }
       else{
        if($pass == $pass1){
            $insert = "INSERT INTO `register`(`email`,  `fname`, `lname`, `phone`, `pass`) VALUES ('$email','$fname','$lname','$phone','$pass')";

            $result = mysqli_query($conn, $insert);
            if ($result){


                echo "<script>alert('account successfully created!');
             window.location.href = '../termpol.html';
                </script>"; 

        }
        


    }
 else{
    echo "<script>alert('password does not match'); 
        window.location=document.referrer;
        
        </script> "; 
 }
       }

    }
}

?>
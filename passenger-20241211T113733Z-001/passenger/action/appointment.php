<?php 
include 'database.php';
if($_SERVER["REQUEST_METHOD"] == "POST") {

    if(isset($_POST['book'])) {
        $fname = $_POST["fname"];
        $number = $_POST["number"];
        $date = $_POST["date"];
        $time = $_POST["time"];
        $pickup = $_POST["pick-up"];
        $destination = $_POST["destination"];
        $user_id = $_POST["user_id"];


   
      
            $insert = "INSERT INTO `appointment`(`user_id`,`fname`, `num`, `date`, `time`, `pick-up`, `destination`) VALUES ('$user_id','$fname','$number','$date','$time','$pickup', '$destination')";
            $result = mysqli_query($conn, $insert);
            $id=$conn->insert_id;
            if ($result){


                echo "<script>alert('Booking Successful!');
             window.location.href = '../payment.php?id=$id';
                </script>"; 

        
        


    }

       }
    if(isset($_POST['payment'])) {
        $mode = $_POST["mode"];
        $payment = $_POST["amount"];
        $id = $_POST["id"];
    
   
      
            $insert = "UPDATE `appointment` SET `mode`='$mode',`payment`='$payment' WHERE id = $id";
            $result = mysqli_query($conn, $insert);
            
            if ($result){


                echo "<script>alert('Payment Successful!');
             window.location.href = '../arrival.php';
                </script>"; 

        
        


    }

       }

    
}

?>
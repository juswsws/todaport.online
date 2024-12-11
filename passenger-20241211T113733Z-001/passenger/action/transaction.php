<?php 
include 'database.php';
if($_SERVER["REQUEST_METHOD"] == "POST") {

    if(isset($_POST['pass1'])) {
        $price = $_POST["price1"];
        $id = $_POST["id"];
            $insert = "INSERT INTO `history`(`user_id`,`price`) VALUES ('$id','$price')";

            $result = mysqli_query($conn, $insert);
            if ($result){


                echo "<script>alert('transaction successfully created!');
             window.location=document.referrer;
                </script>"; 

        }
        


    }
    if(isset($_POST['pass2'])) {
        $price = $_POST["price2"];
        $id = $_POST["id"];

        $insert = "INSERT INTO `history`(`user_id`,`price`) VALUES ('$id','$price')";

            $result = mysqli_query($conn, $insert);
            if ($result){


                echo "<script>alert('transaction successfully created!');
             window.location=document.referrer;
                </script>"; 

        }
        


    }
    if(isset($_POST['pass3'])) {
        $price = $_POST["price3"];
        $id = $_POST["id"];

        $insert = "INSERT INTO `history`(`user_id`,`price`) VALUES ('$id','$price')";

            $result = mysqli_query($conn, $insert);
            if ($result){


                echo "<script>alert('transaction successfully created!');
             window.location=document.referrer;
                </script>"; 

        }
        


    }
    if(isset($_POST['pass4'])) {
        $price = $_POST["price4"];
        $id = $_POST["id"];

        $insert = "INSERT INTO `history`(`user_id`,`price`) VALUES ('$id','$price')";

            $result = mysqli_query($conn, $insert);
            if ($result){


                echo "<script>alert('transaction successfully created!');
             window.location=document.referrer;
                </script>"; 

        }
        


    }

       }


?>
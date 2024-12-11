<?php
session_start();

unset($_SESSION["userlog"]);
unset($_SESSION["userId"]);

echo "<script>alert('Thankyou!');
window.location.href = '../login.php';
   </script>";  
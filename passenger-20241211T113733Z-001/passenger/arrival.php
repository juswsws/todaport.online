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
    <link rel="stylesheet" href="arrival.css"/>
    <script src="arrival.js"></script>
    <title>Transaction History for Toda</title>
</head>
<body>
    <h1>Transaction History for Toda Passenger</h1>
    <table>
        <thead>
            <tr>
                <th>Transaction ID</th>
                <th>Amount</th>
                <th>Mode</th>
                <th>Destination</th>
                <th>Date</th>
              
            </tr>
        </thead>
        <tbody>
            <?php 
            $count = '0';
            $sql = "SELECT * FROM `appointment` where `user_id` = $Id order by created desc";
            $result = mysqli_query($conn, $sql);
            while($row=mysqli_fetch_assoc($result))
            {
                $price = $row['payment'];
                $mode = $row['mode'];
                $destination = $row['destination'];
                $id = $row['id'];
                $created = $row['created'];
                $count++;
                $created = date('F/d/Y - h:i:s A', strtotime($created));
            ?>
            <tr>
                <td><?php echo $count;?></td>
                <td>₱<?php echo $price;?></td>
                <td><?php echo $mode;?></td>
                <td><?php echo $destination;?></td>
                <td><?php echo $created;?></td>
            </tr>
         
            <?php } ?>
        </tbody>
    </table>
    <a href="appointment.php"><button >Back</button></a>
</body>
</html>
<?php } ?>
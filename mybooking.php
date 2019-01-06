<?php
session_start();

if (isset($_SESSION['loggedin'])){
    $loggedin = $_SESSION['loggedin'];
}

$login_link = '';
$username = '';
$logout_link = '';
$registration = '';

$email = $_SESSION['email'];

include_once ('config.php');
$sql_all = "SELECT * FROM bookings where  Email = '$email'";
//$result = mysqli_query($connect, $sql_all);
$result = $connect->query($sql_all);

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DREAM LAND | Catering</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link href="style.css" rel="stylesheet">
<!--    <link href="mybooking.css" rel="stylesheet">-->
    <link rel="icon" type="image/x-icon" href="img/icon.png" />
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #9b1700;
            text-align: left;
            padding: 5px;
            text-align: center;
        }

        tr:nth-child(even) {
            background-color: rgba(0, 57, 221, 0.2);
        }
    </style>

</head>
<body>

<!--NAVIGATION BAR-->
<?php
include ("includes/header.php");
?>

<h2 class="text-success" style="text-align: center"><span class="underline">MY BOOKING</span></h2>

<div style="min-height: 150px">
    <table>

        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Event Type</th>
            <th>Event Name</th>
            <th>Package</th>
            <th>Decoration</th>
            <th>Food</th>
            <th>Total Cost</th>
        </tr>

        <?php

        while($res = mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td>".$res['user_id']."</td>";
            echo "<td>".$res['fullname']."</td>";
            echo "<td>".$res['event_type']."</td>";
            echo "<td>".$res['event_name']."</td>";
            echo "<td>".$res['event_package_name']."</td>";
            echo "<td>".$res['decoration_name']."</td>";
            echo "<td>".$res['food_name']."</td>";
            echo "<td>".$res['total_cost']."</td>";
            echo "</tr>";

//        echo "<td><a href=\"edit.php?id=$res[Stu_id]\">Edit</a> | <a href=\"delete.php?id=$res[Stu_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
        }
        ?>
    </table>
</div>


<!--- Footer -->
<?php
include ('includes/footer.php');
?>

</body>

<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.js"></script>

</html>

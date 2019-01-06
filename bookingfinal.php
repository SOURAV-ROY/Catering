<?php
session_start();
include_once ('config.php');

if (isset($_SESSION['loggedin'])){
    $loggedin = $_SESSION['loggedin'];
}
if (isset($_SESSION['uid'])){
    $userid = $_SESSION['uid'];
}

if (isset($_SESSION['fullname'])){
    $fullname = $_SESSION['fullname'];
}
if (isset($_SESSION['email'])){
    $email = $_SESSION['email'];
}

$login_link = '';
$username = '';
$logout_link = '';
$registration = '';

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DREAM LAND | Catering</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link href="style.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="img/icon.png" />

    <style>
        .hidden{
            display: none;
        }
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


<div style="height: 100%;">
    <div class="flex-center flex-column">
        <form method="post" action="bookingfinal.php">
            <table>

                <tr>
                    <th>Event Type</th>
                    <th>Event Name</th>
                    <th>Package</th>
                    <th>Decoration</th>
                    <th>Food</th>
                    <th>Total</th>
                </tr>

                <?php

                $package_price = $decoration_price = $food_price = 0;

                echo "<tr>";
                if (isset($_SESSION['event'])){
                    $event = $_SESSION['event'];
                    echo "<td>".$event."</td>";
                }

                if (isset($_SESSION['wed_event'])){
                    $event_name = $_SESSION['wed_event'];
                    echo "<td>".$event_name."</td>";
                }

                elseif (isset($_SESSION['birthday'])) {
                    $event_name = "N/A";
                    echo "<td>" . $event_name . "</td>";
                }
                elseif (isset($_SESSION['meeting'])) {
                    $event_name = "N/A";
                    echo "<td>" . $event_name . "</td>";
                }

                if (isset($_SESSION['package'])){
                    $string = $_SESSION['package'];
                    $info = explode('_', $string);
                    $package = $info[0];
                    $package_price = $info[1];
                    echo "<td>".$package."</td>";
                }

                if (isset($_SESSION['wd'])){
                    $string = $_SESSION['wd'];
                    $info = explode('_', $string);
                    $decoration = $info[0];
                    $decoration_price = $info[1];
                    echo "<td>".$decoration."</td>";
                }

                elseif (isset($_SESSION['bd'])){
                    $string = $_SESSION['bd'];
                    $info = explode('_', $string);
                    $decoration = $info[0];
                    $decoration_price = $info[1];
                    echo "<td>".$decoration."</td>";
                }
                elseif (isset($_SESSION['md'])){
                    $string = $_SESSION['md'];
                    $info = explode('_', $string);
                    $decoration = $info[0];
                    $decoration_price = $info[1];
                    echo "<td>".$decoration."</td>";
                }

                if (isset($_SESSION['food'])){
                    $string = $_SESSION['food'];
                    $info = explode('_', $string);
                    $food = $info[0];
                    $food_price = $info[1];
                    echo "<td>".$food."</td>";
                }

                $total= $package_price+$decoration_price+$food_price;
                echo "<td>".$total."</td>";
                echo "</tr>";

                $confirm_btn = "";
                if (isset($_POST['confirm'])){

                    $query = "INSERT INTO bookings(user_id,fullname,email,event_type,event_name,event_package_name,decoration_name,food_name,total_cost) VALUES('$userid','$fullname','$email','$event','$event_name','$package','$decoration','$food','$total')";
                    $result  = mysqli_query($connect,$query) or die(mysqli_error($connect));

                    if($result){
                        $confirm_btn = "hidden";
                        echo "<h1 class='text-center text-success'>Booking done.</h1>";

                        unset($_SESSION["event"]);
                        unset($_SESSION["wed_event"]);
                        unset($_SESSION["package"]);
                        unset($_SESSION["wd"]);
                        unset($_SESSION["bd"]);
                        unset($_SESSION["md"]);
                        unset($_SESSION["food"]);

                    }else{
                        exit("An error occured! Try again.");
                    }
                }
                ?>
            </table>
            <div class="text-center">
                <a href="index.php"><button style="margin-top: 5%" type="button" class="my-btn">Cancel</button></a>
                <button class="final-btn <?=$confirm_btn?>" name="confirm" type="submit">Booking Confirm</button>
            </div>
        </form>
    </div>
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
<?php
session_start();
if (isset($_SESSION['loggedin'])){
    $loggedin = $_SESSION['loggedin'];
}
$login_link = '';
$username = '';
$logout_link = '';
$registration = '';

//echo "<br> <br> <br>";
//echo "<br> w ".$_SESSION['wedding'];
//echo "<br> b ".$_SESSION['birthday'];
//echo "<br> m ".$_SESSION['meeting'];


if(isset($_SESSION['wedding']) && $_SESSION['wedding']== true)
{
    $prevlink = "wedding.php";
}
elseif(isset($_SESSION['birthday']) && $_SESSION['birthday']== true)
{
    $prevlink = "index.php";
}
elseif(isset($_SESSION['meeting']) && $_SESSION['meeting']== true)
{
    $prevlink = "index.php";
}
else{
    $prevlink = "index.php";
}

if (isset($_POST['next'])){

    if (isset($_POST['package'])&& !empty($_POST['package'])){
        $_SESSION['package']=$_POST['package'];

        if(isset($_SESSION['wedding']) && $_SESSION['wedding']== true)
        {
            header("location: weddingstage.php");
        }
        elseif (isset($_SESSION['birthday']) && $_SESSION['birthday']== true)
        {
            header("location: birthday.php");
        }
        elseif (isset($_SESSION['meeting']) && $_SESSION['meeting']== true)
        {
            header("location: meeting.php");
        }
    }
    else{
        header("location: booking.php");
        exit();
    }
}
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

</head>

<body>

<!--NAVIGATION BAR-->
<?php
include ("includes/header.php");
?>

<div class="container">
    <div class="col-sm-12 text-center">
        <h1><span class=" text-success display-4">Select Venue Package</span></h1>
    </div>

    <form action="booking.php" method="post">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="package-photo">
                        <img class="card-img-top img-responsive" src="img/Bronze-HN.jpg">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title text-center text-info">Guest Capacity: <span style="color: #ab47bc; font-weight: bolder">500</span></h4>
                        <h3 class="card-title text-center text-success">$55000</h3>
                        <div class="text-center">

                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="cr-1" name="package" value="Bronze-HN_55000" class="custom-control-input">
                                <label class="custom-control-label" for="cr-1">
                                    <span class="text-danger font-weight-bold"> Bronze-HN </span>
                                </label>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="package-photo">
                        <img class="card-img-top img-responsive" src="img/Silver-HN.jpg">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title text-center text-info">Guest Capacity: <span style="color: #ab47bc; font-weight: bolder">800</span></h4>
                        <h3 class="card-title text-center text-success">$88000</h3>
                        <div class="text-center">

                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="cr-2" name="package" value="Silver-HN_88000" class="custom-control-input">
                                <label class="custom-control-label" for="cr-2">
                                    <span class="text-danger font-weight-bold"> Silver-HN </span>
                                </label>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="package-photo">
                        <img class="card-img-top img-responsive" src="img/Gold-HN.png">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title text-center text-info">Guest Capacity: <span style="color: #ab47bc; font-weight: bolder">1000</span></h4>
                        <h3 class="card-title text-center text-success">$100000</h3>
                        <div class="text-center">

                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="cr-3" name="package" value="Gold-HN_100000" class="custom-control-input">
                                <label class="custom-control-label" for="cr-3">
                                    <span class="text-danger font-weight-bold"> Gold-HN </span>
                                </label>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 text-center">

                <a href="<?=$prevlink;?>"><button type="button" class="my-btn">PREVIOUS</button></a>
                <button type="submit" name="next" class="next-btn">NEXT</button>
            </div>
        </div>
    </form>

</div>


<!--- Footer -->
<?php
include ('includes/footer.php');
?>


</body>

<script src="js/jquery.min.js"></script>
<!--<script src="js/popper.min.js"></script>-->
<script src="js/bootstrap.min.js"></script>
<script src="js/all.js"></script>

</html>














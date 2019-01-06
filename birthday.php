<?php
session_start();
if (isset($_SESSION['loggedin'])){
    $loggedin = $_SESSION['loggedin'];
}
$login_link = '';
$username = '';
$logout_link = '';
$registration = '';

if (isset($_POST['next'])){

    if (isset($_POST['bd']) && !empty($_POST['bd'])) {
        $_SESSION['bd'] = $_POST['bd'];
        header("location: booking3.php");
        exit();
    }
    else{
        header("location: birthday.php");
        exit();
    }
}

?>z
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
        <h1><span class=" text-success display-4">Select Decoration:</span></h1>
    </div>

    <form action="birthday.php" method="post">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="package-photo">
                        <img class="card-img-top img-responsive" src="img/birthday/bd1.jpg">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title text-center text-info">Decoration: <span style="color: #ff0503">BIRTHDAY-S</span></h4>
                        <h3 class="card-title text-center text-success">$50000</h3>
                        <div class="text-center">

                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="cr-1" name="bd" value="BIRTHDAY-S_50000" class="custom-control-input">
                                <label class="custom-control-label" for="cr-1">
                                    <span class="text-danger font-weight-bold"> BIRTHDAY-S </span>
                                </label>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="package-photo">
                        <img class="card-img-top img-responsive" src="img/birthday/bd2.jpg">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title text-center text-info">Decoration:<span style="color: #ff0503">BIRTHDAY-M</span></h4>
                        <h3 class="card-title text-center text-success">$100000</h3>
                        <div class="text-center">

                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="cr-2" name="bd" value="BIRTHDAY-M_100000" class="custom-control-input">
                                <label class="custom-control-label" for="cr-2">
                                    <span class="text-danger font-weight-bold"> BIRTHDAY-M </span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="package-photo">
                            <img class="card-img-top img-responsive" src="img/birthday/bd3.jpg">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title text-center text-info">Decoration: <span style="color: #ff0503">BIRTHDAY-L</span></h4>
                        <h3 class="card-title text-center text-success">$150000</h3>
                        <div class="text-center">

                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="cr-3" name="bd" value="BIRTHDAY-L_150000" class="custom-control-input">
                                <label class="custom-control-label" for="cr-3">
                                    <span class="text-danger font-weight-bold"> BIRTHDAY-L </span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 text-center">
                <a href="booking.php"><button type="button" class="my-btn">PREVIOUS</button></a>
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














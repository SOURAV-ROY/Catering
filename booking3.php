<?php
session_start();
if (isset($_SESSION['loggedin'])){
    $loggedin = $_SESSION['loggedin'];
}
$login_link = '';
$username = '';
$logout_link = '';
$registration = '';

if(isset($_SESSION['wedding']) && $_SESSION['wedding']== true)
{
    $prevlink = "weddingstage.php";
}
elseif(isset($_SESSION['birthday']) && $_SESSION['birthday']== true)
{
    $prevlink = "birthday.php";
}
elseif(isset($_SESSION['meeting']) && $_SESSION['meeting']== true)
{
    $prevlink = "meeting.php";
}
else{
    $prevlink = "index.php";
}

//echo "<br> <br> <br>";
//echo "<br> w ".$_SESSION['wedding'];
//echo "<br> b ".$_SESSION['birthday'];
//echo "<br> m ".$_SESSION['meeting'];

if (isset($_POST['next'])){

    if (isset($_POST['food']) && !empty($_POST['food'])) {
        $_SESSION['food'] = $_POST['food'];
        header("location: bookingfinal.php");
        exit();
    }
    else{
        header("location: booking3.php");
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
        <h1><span class=" text-success display-4">Select Food Set-Menu</span></h1>
    </div>

    <form action="booking3.php" method="post">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="package-photo">
                        <img class="card-img-top img-responsive" src="weeding/WeddingFood1.jpg">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title text-center text-primary">Food Package: <span style="color: #ff0503; font-weight:initial">LIGHT</span></h4>
                        <h3 class="card-title text-center text-success">$200</h3>
                        <div class="text-center">

                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="cr-1" name="food" value="LIGHT_200" class="custom-control-input">
                                <label class="custom-control-label" for="cr-1">
                                    <span class="text-danger font-weight-bold"> LIGHT </span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="package-photo">
                        <img class="card-img-top img-responsive" src="weeding/WeddingFood2.jpg">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title text-center text-primary">Food Package: <span style="color: #ff0503; font-weight:inherit;">HEAVY</span></h4>
                        <h3 class="card-title text-center text-success">$350</h3>
                        <div class="text-center">

                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="cr-2" name="food" value="HEAVY_350" class="custom-control-input">
                                <label class="custom-control-label" for="cr-2">
                                    <span class="text-danger font-weight-bold">HEAVY</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="package-photo">
                        <img class="card-img-top img-responsive" src="weeding/WeddingFood4.jpg">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title text-center text-info">Food Package: <span style="color: #ff0503; font-weight: revert;">PREMIUM</span></h4>
                        <h3 class="card-title text-center text-success">$500</h3>
                        <div class="text-center">

                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="cr-3" name="food" value="PREMIER_500" class="custom-control-input">
                                <label class="custom-control-label" for="cr-3">
                                    <span class="text-danger font-weight-bold">PREMIUM</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 text-center">
                <a href="<?=$prevlink?>"><button type="button" class="my-btn">PREVIOUS</button></a>
                <a><button type="submit" name="next" class="next-btn">NEXT</button></a>
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














<?php
session_start();

if (isset($_SESSION['loggedin'])){
    $loggedin = $_SESSION['loggedin'];
}

$login_link = '';
$username = '';
$logout_link = '';
$registration = '';

unset($_SESSION["event"]);
unset($_SESSION["wed_event"]);
unset($_SESSION["package"]);
unset($_SESSION["wd"]);
unset($_SESSION["bd"]);
unset($_SESSION["md"]);
unset($_SESSION["food"]);

if (isset($_POST['wedding'])) {
    $_SESSION['wedding'] = true;
    $_SESSION['event'] = 'Wedding';

    header("Location: wedding.php");
}
else
{
    $_SESSION['wedding'] = false;
}

if (isset($_POST['birthday'])) {
    $_SESSION['birthday'] = true;
    $_SESSION['event'] = 'Birthday';
    header("Location: booking.php");
}
else
{
    $_SESSION['birthday'] = false;
}

if (isset($_POST['meeting'])) {
    $_SESSION['meeting'] = true;
    $_SESSION['event'] = 'Meeting';
    header("Location: booking.php");
}
else
{
    $_SESSION['meeting'] = false;
}

include_once ('config.php');
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

<!-- Navigation -->
<?php
    include ('includes/header.php');
?>
<!--- Image Slider -->
<div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
        <li data-target="#demo" data-slide-to="3"></li>
        <li data-target="#demo" data-slide-to="4"></li>
        <li data-target="#demo" data-slide-to="5"></li>
        <li data-target="#demo" data-slide-to="6"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="img-slide" src="weeding/p2.jpg" alt="Chicago">
        </div>
        <div class="carousel-item">
            <img class="img-slide" src="weeding/bou.jpg" alt="Chicago">
        </div>
        <div class="carousel-item">
            <img class="img-slide" src="weeding/weeding.jpg" alt="Chicago">
        </div>
        <div class="carousel-item">
            <img class="img-slide" src="img/bg1.jpg" alt="Chicago">
        </div>
        <div class="carousel-item">
            <img class="img-slide" src="weeding/slider3.jpg" alt="Los Angeles">
        </div>
        <div class="carousel-item">
            <img class="img-slide" src="img/birthday1.jpg" alt="Chicago">
        </div>
        <div class="carousel-item">
            <img class="img-slide" src="img/meeting1.jpg" alt="New York">
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>

<!--- Two Column Section -->
<div class="container-fluid padding">
    <div class="row welcome text-center">
        <div class="col-12">
            <h1 class="display-1 text-success"><i>Our Services</i></h1>
            <hr>
        </div>
    </div>
    <form method="post" action="index.php">
        <div class="row padding">
            <div class="col-lg-6">
                <img src="img/weeding2.jpg" width="100%" height="100%" class="img-fluid">
            </div>

            <div class="col-lg-6 text-center sou">
                <h1 class="display-4 text-info"><span class="underline">WEDDING</span></h1>
                <p style="color: #ff13e5; padding-top: 2%">
                    Resize the browser window tm see the effect. Responsive
                    web design has become more important as the amount of mobile
                    traffic now account for more than half of total internet traffic.
                </p>
                <br>
                <div class="text-center">
                    <?php
                    if(isset($_SESSION['loggedin'])){
                        echo '<a href="wedding.php"><button class="btn btn-default my-btn my-margin" name="wedding" type="submit">Booking</button></a>';
                    }
                    else{

//                        echo '<a href="registration.php"><button class="my-btn-join">Please Join With Us</button></a>';
                    }
                    ?>
                    <!--                <button class="btn btn-default my-btn my-margin">Booking</button>-->
                </div>
            </div>
        </div>
    </form>


    <hr class="my-4">
    <form method="post" action="index.php">
        <div class="row padding">

            <div class="col-lg-6 text-center sou">

                <h1 class="display-4  text-primary"><span class="underline">BIRTHDAY</span></h1>
                <p style="color: #c013ff; padding-top: 2%">
                    Resize the browser window tm see the effect. Responsive
                    web design has become more important as the amount of mobile
                    traffic now account for more than half of total internet traffic.
                </p>
                <br>
                <div class="text-center">
                    <?php
                    if(isset($_SESSION['loggedin'])){
                        echo '<a href="booking.php"><button type="submit" name="birthday" class="btn btn-default my-btn my-margin">Booking</button></a>';
                    }
                    else{

//                        echo '<a href="registration.php"><button class="my-btn-join">Please Join With Us</button></a>';
                    }
                    ?>
                    <!--                <button class="btn btn-default my-btn my-margin">Booking</button>-->
                </div>
            </div>
            <div class="col-lg-6">
                <img src="img/birthday/birthday3.jpg" width="100%" height="100%" class="img-fluid">
            </div>
        </div>
    </form>


    <hr class="my-4">
    <form method="post" action="index.php">
        <div class="row padding">
            <div class="col-lg-12 no-padding">
                <img src="img/meeting1.jpg" width="100%" height="100%" class="img-fluid">
                <div class="text-center sou">
                    <h1 class="display-4 text-info"><span class="underline">CORPORATE MEETING</span></h1>
                    <p style="color: #c7009c; padding:2% 5%">
                        Resize the browser window tm see the effect. Responsive
                        web design has become more important as the amount of mobile
                        traffic now account for more than half of total internet traffic.
                    </p>
                    <br>
                    <div class="text-center">
                        <?php
                        if(isset($_SESSION['loggedin'])){
                            echo '<a href="booking.php"><button type="submit" name="meeting" class="btn btn-default my-btn my-margin">Booking</button></a>';
                        }
                        else{

//                            echo '<a href="registration.php"><button class="my-btn-join">Please Join With Us</button></a>';
                        }
                        ?>
                        <!--                    <button class="btn btn-default my-btn my-margin">Booking</button>-->
                    </div>
                </div>
            </div>
        </div>
    </form>

</div>


<hr class="my-4">
<!--- Meet the team -->
<div id="teem" class="container-fluid padding">
    <div class="row welcome text-center">
        <div class="col-12">
            <h1 class="text-success" ><span class=" display-3 underline">Meet The Team</span></h1>
        </div>
    </div>
</div>
<!--- Cards -->
<div class="container-fluid padding">
    <div class="row padding">
        <div class="col-md-4">
            <div class="card">
                <div class="team-photo">
                    <img class="card-img-top img-responsive" src="img/sourav1.jpg" alt="Cinque Terre">
                </div>
                <div class="card-body">
                    <h4 class="card-title text-center">SOURAV ROY</h4>
                    <p class="card-text text-center">
                        Sourav Roy Is Developer.
                    </p>
                    <div class="text-center">
                    <a href="#" class="btn btn-outline-secondary profile-btn"> See Profile</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="team-photo">
                    <img class="card-img-top img-responsive" src="img/adity.jpg">
                </div>
                <div class="card-body">
                    <h4 class="card-title text-center">FARIA ADITY</h4>
                    <p class="card-text text-center">Fariya Adity Is Designer.
                    </p>
                    <div class="text-center">
                        <a href="#" class="btn btn-outline-secondary profile-btn"> See Profile</a>
                     </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="team-photo">
                    <img class="card-img-top img-responsive" src="img/sk.jpg">
                </div>
                <div class="card-body">
                    <h4 class="card-title text-center">SK SHAKHAWAT</h4>
                    <p class="card-text text-center">SK Shakhawat Is Designer.
                    </p>
                    <div class="text-center">
                        <a href="#" class="btn btn-outline-secondary profile-btn"> See Profile</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

<!--- Connect -->
<div class="container-fluid padding">
    <div class="row text-center padding text-info">
        <div class="col-12">
            <h2 class="text-uppercase">Connect</h2>
        </div>
    <div class="col-12 social padding">
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-google-plus-g"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
    </div>
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














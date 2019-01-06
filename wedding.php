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

    if (isset($_POST['we']) && !empty($_POST['we'])) {

        if ($_POST['we']=='engagement'){
            $_SESSION['engagement'] = true;
            $_SESSION['wed_event'] = 'Engagement';
        }
        elseif ($_POST['we']=='haldi'){
            $_SESSION['haldi'] = true;
            $_SESSION['wed_event'] = 'Haldi';
        }
        elseif ($_POST['we']=='reception'){
            $_SESSION['reception'] = true;
            $_SESSION['wed_event'] = 'Reception';
        }
        elseif ($_POST['we']=='muslim'){
            $_SESSION['muslim'] = true;
            $_SESSION['wed_event'] = 'Muslim';
        }
        elseif ($_POST['we']=='hindu'){
            $_SESSION['hindu'] = true;
            $_SESSION['wed_event'] = 'Hindu';
        }

        header("location: booking.php");
        exit();
    }
    else{
        header("location: wedding.php");
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

<section id="banner">
    <div class="inner">
        <header>
            <h1>Decor Your Dream Weeding</h1>
        </header>
    </div>
</section>

<!--- Title name -->
<div id="teem" class="container-fluid padding">
    <div class="row welcome text-center">
        <div class="col-12">
            <h1 class="text-success" ><span class=" display-4 underline">Select Event Name</span></h1>
        </div>
    </div>
</div>

<form method="post" action="wedding.php">
    <div class="container-fluid padding">
        <div class="row padding">
            <div class="col-md-4">
                <div class="card">
                    <div class="package-photo">
                        <img class="card-img-top img-responsive img-resize" src="weeding/engagement2.jpg">
                    </div>
                    <div class="card-body">
<!--                        <h4 class="card-title text-center text-danger"> Engagement Ceremony</h4>-->
                        <div class="text-center">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="cr-1" class="custom-control-input" name="we" value="engagement">
                                <label class="custom-control-label" for="cr-1">
                                    <span class="text-danger font-weight-bold"> Engagement Ceremony </span>
                                </label>
                            </div>
<!--                            <button type="submit" name="engagement" class="btn btn-outline-secondary profile-btn">Booking</button>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="package-photo">
                        <img class="card-img-top img-responsive img-resize" src="weeding/haldi.jpg">
                    </div>
                    <div class="card-body">
<!--                        <h4 class="card-title text-center text-danger">Haldi Function</h4>-->
                        <div class="text-center">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="cr-2" class="custom-control-input" name="we" value="haldi">
                                <label class="custom-control-label" for="cr-2">
                                    <span class="text-danger font-weight-bold"> Haldi Function </span>
                                </label>
                            </div>
<!--                            <button type="submit" name="haldi" class="btn btn-outline-secondary profile-btn">Booking</button>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="package-photo">
                        <img class="card-img-top img-responsive img-resize" src="weeding/reception.jpg">
                    </div>
                    <div class="card-body">
<!--                        <h4 class="card-title text-center text-danger">Reception</h4>-->
                        <div class="text-center">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="cr-3" class="custom-control-input" name="we" value="reception">
                                <label class="custom-control-label" for="cr-3">
                                    <span class="text-danger font-weight-bold"> Reception </span>
                                </label>
                            </div>
<!--                            <button type="submit" name="reception" class="btn btn-outline-secondary profile-btn">Booking</button>-->
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="large-thumble">
                        <img class="card-img-top img-responsive" src="weeding/muslim%20weeding.jpg">
                    </div>
                    <div class="card-body">
<!--                        <h4 class="card-title text-center text-danger">Muslim Wedding</h4>-->
                        <div class="text-center">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="cr-4" class="custom-control-input" name="we" value="muslim">
                                <label class="custom-control-label" for="cr-4">
                                    <span class="text-danger font-weight-bold"> Muslim Wedding </span>
                                </label>
                            </div>
<!--                            <button type="submit" name="muslim" class="btn btn-outline-secondary profile-btn">Booking</button>-->
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="large-thumble">
                        <img class="card-img-top img-responsive" src="weeding/hinduWed.png">
                    </div>
                    <div class="card-body">
<!--                        <h4 class="card-title text-center text-danger">Hindu Wedding</h4>-->
                        <div class="text-center">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="cr-5" class="custom-control-input" name="we" value="hindu">
                                <label class="custom-control-label" for="cr-5">
                                    <span class="text-danger font-weight-bold"> Hindu Wedding </span>
                                </label>
                            </div>
<!--                            <button type="submit" name="hindu" class="btn btn-outline-secondary profile-btn">Booking</button>-->
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-sm-12 text-center">
            <a href="index.php"><button type="button" class="my-btn">PREVIOUS</button></a>
            <button type="submit"  name="next" class="next-btn">NEXT</button>
        </div>
    </div>
<!--    <script>-->
<!--        var value = 5;-->
<!--        $("input[name=radio][value=" + value + "]").attr('checked', 'checked');-->
<!--    </script>-->
</form>


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














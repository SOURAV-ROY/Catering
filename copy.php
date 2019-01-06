<?php
session_start();
if (isset($_SESSION['loggedin'])){
    $loggedin = $_SESSION['loggedin'];
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

</head>
<body>

<!--NAVIGATION BAR-->
<?php
include ("includes/header.php");
?>


<div style="height: 100%;">
    <div class="flex-center flex-column">
        <form action="create_photo_gallery.php" method="post" enctype="multipart/form-data">

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
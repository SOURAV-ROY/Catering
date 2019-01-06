<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top my-navbar">
    <div class="container-fluid">
        <!--<h1 class="navbar-brand display-4 text-primary" href="index.php"><b><i>DREAM LAND</i></b></h1>-->
        <a class="navbar-brand" href="index.php"><img src="img/logo2.png" height="75px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link text-primary" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-primary" href="#teem">About</a>
                </li>
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link text-primary" href="index.php">Menu </a>-->
<!--                </li>-->
                <li class="nav-item">
                    <a class="nav-link text-primary" href="weeding/gallery/index.html">Gallery</a>
                </li>
                <li class="nav-item">
                    <?php
                    if(isset($_SESSION['loggedin'])){
                        echo '<a class="nav-link text-success" href="mybooking.php"><span style="font-weight:bolder">'.$_SESSION['fullname'].'</span></a>';
                    }
                    else{

                        echo '<a class="nav-link text-info" href="registration.php">Registration</a>';
                    }
                    ?>
                </li>
                <li class="nav-item">
                    <?php
                    if(isset($_SESSION['loggedin'])){

                        echo '<a class="nav-link text-danger" href="logout.php">Log Out</a>';
                    }
                    else{
                        echo '<a class="nav-link text-success" href="login.php">Log In</a>';
                    }
                    ?>
                </li>
            </ul>
        </div>
    </div>
</nav>
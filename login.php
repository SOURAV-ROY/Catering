<?php
include("config.php");
session_start();
$error = "";
$userfullname = "";

if(!empty($_POST['login_btn'])){
    // username and password sent from form

    $email = mysqli_real_escape_string($connect,$_POST['email']);
    $password = mysqli_real_escape_string($connect,$_POST['password']);

    $sql2 = "SELECT * FROM users WHERE email = '$email' and password = '$password'";
    $result = mysqli_query($connect,$sql2);
    $count = count($result);
//    echo $sql2;
//    header("location: index.php");

    if(mysqli_num_rows($result)) {

        while ($row=mysqli_fetch_assoc($result))
        {
            $userid = $row['ID'];
            $userfullname = $row['FullName'];
            $email = $row['Email'];

            echo $userfullname;
        }

        $_SESSION['uid'] = $userid;
        $_SESSION['fullname'] = $userfullname;
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;

        header("location: index.php");

//        if(isset($_SESSION['fullname']))
//            echo  $_SESSION['fullname'];
//        else
//            echo "session not saved";
    }
    else {
        $_SESSION['loggedin'] = false;
        $error = "Invalid Email or Password";
//        header('Location:login.php');
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>LOG IN</title>
	<link rel="stylesheet" type="text/css" href="login-style.css">
</head>
<body class="log-body">
	<div class="loginBox">
		<div class="log-title">
			LOG IN
		</div>
		<form method="post" action="login.php">
			<p>Email</p>
			<input type="email" placeholder="email@gmail.com" name="email" required>

			<p>Password</p>
            <input type="Password" placeholder="••••••" name="password" required>
            <div style="color: red; padding: 2% 15%; font-weight: bold">
                <?php
                echo $error;
                $_POST['login_btn']= "";
                ?>
            </div>
            <input type="submit" name="login_btn" value="LOG IN">
		</form>
		<div>
        	<a href="registration.php"><button class="my-btn">Registration First</button></a>
		</div>
	</div>

</body>
</html>

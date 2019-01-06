<?php
    session_start();
    include_once("config.php");
    $_SESSION['warning'] = "";
    $_SESSION['tempfullname'] = "";
    $_SESSION['tempemail'] = "";


if(isset($_POST['register_btn'])){
    $_SESSION['tempfullname'] = mysqli_real_escape_string($connect, $_POST['fullname']);
    $_SESSION['tempemail'] = mysqli_real_escape_string($connect, $_POST['email']);

        $fullname = mysqli_real_escape_string($connect, $_POST['fullname']);
        $email = mysqli_real_escape_string($connect, $_POST['email']);
        $password = mysqli_real_escape_string($connect, $_POST['password']);
        $password2 = mysqli_real_escape_string($connect, $_POST['password2']);

//        echo "$username, $email, $password, $password2";

        if($password==$password2){
            //create user

            //Hash Password
//            $password = md5($password2);

            //Normal Password
            $username =($password2);

            $sql = "INSERT INTO users (FullName, Email,Password) VALUES ('$fullname','$email','$password')";
            mysqli_query($connect, $sql);
//            echo $check;
            if($sql){
                $_SESSION['message'] = "<span style='color: green'>Registration Successful !!!</span>";
//                $_SESSION['fullname'] = $fullname;
                $_SESSION["warning"] = "";
                $_SESSION['tempfullname'] = "";
                $_SESSION['tempemail'] = "";
                header("Location: login.php");

            }
        }
        else{
            $_SESSION['warning']= "<span style='color:orange'>Password Did not match</span>";
//            header("Location: registration.php");
        }
 }

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="reg-style.css">
</head>
<body class="reg_body">
	<div class="loginBox">
        <img src="img/user/user.png" class="user">
		<h2 class="reg-title">Registration Here</h2>

		<form method="post" action="registration.php">
			<p>Full Name</p>
			<input type="text" placeholder="Full Name" name="fullname" value="<?php echo $_SESSION['tempfullname']?>" required>

			<p>Email</p>
			<input type="email" placeholder="Enter Email" name="email" value="<?php echo $_SESSION['tempemail']?>" required>

			<p>Password</p>
            <input type="Password" placeholder="••••••" name="password" required>
            
            <p>Confirm Password</p>
            <input type="Password" placeholder="••••••" name="password2" required>

			<input type="submit" name="register_btn" value="Registration">
        </form>
        <div>
            <?php
            echo $_SESSION['warning'];
            ?>
        </div>
        <a href="login.php"><button class="my-btn">LOG IN</button></a>
<!--        <div>-->
<!--            <p>--><?php //echo $_SESSION['warning']?><!--</p>-->
<!--        </div>-->
	</div>

</body>
</html>

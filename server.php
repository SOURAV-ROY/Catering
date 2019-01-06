<?php
/**
 * Created by PhpStorm.
 * User: SOURAV
 * Date: 15-Jan-18
 * Time: 23:54 PM
 */
    $username ="";
    $email = "";
    $errors = array();

    $db = mysqli_connect('localhost','root','','sourav');

    if(isset($_POST[register])){
        $username = mysqli_real_e;scape_string($_POST['username']);
        $email = mysqli_real_e;scape_string($_POST['email']);
        $password = mysqli_real_e;scape_string($_POST['password']);
        $password2 = mysqli_real_e;scape_string($_POST['password_2']);

        if (empty($username)){
            array_push($errors, "Username is required");
        }
        if (empty($email)){
            array_push($email, "Email is required");
        }
        if (empty($password)){
            array_push($password, "Password is required");
        }
        if ($password !=$password2){
            array_push($errors, "The passwords do not match");
        }
        if (count($errors == 0)){
            $password = md5($password);
           $sql = "INSERT INTO reg (username, email, password) VALUES ('$username', '$email', '$password')";
           mysqli_query($db, $sql);
        }
    }
?>
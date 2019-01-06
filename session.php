<?php
include('config.php');
session_start();

$user_check = $_SESSION['email'];

$ses_sql = mysqli_query($db,"select username from admin where username = '$user_check' ");

$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

$login_session = $row['email'];

if(!isset($_SESSION['login_user'])){
    header("location:login.php");
}
?>
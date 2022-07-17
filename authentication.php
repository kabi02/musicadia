<?php session_start();
include "connection.php";
$email = $_POST['email'];
$pass = $_POST['password'];

$email = stripcslashes($email);
$pass = stripcslashes($pass);

$sql = "SELECT * FROM registration_user WHERE email = '$email' AND password = '$pass'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if($count==1) {
    $_SESSION['email']=$email;
    echo ("<script>window.alert('Login successful'); window.location.href='index.php';</script>");
}
else {
    echo ("<script>window.alert('Email/Password incorrect'); window.location.href='login.html';</script>");
}
?>
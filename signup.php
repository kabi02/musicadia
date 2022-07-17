<?php
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];

if (!empty($first_name) || !empty($last_name) || !empty($email) || !empty($password)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "user_data";

    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

    if(mysqli_connect_error()) {
        die('Connect Error('. mysqli_connect_error().')'.mysqli_connect_error());
    } else {
        $SELECT = "SELECT email from registration_user where email = ? Limit 1";
        $INSERT = "INSERT into registration_user (first_name, last_name, email, password) values(?, ?, ?, ?)";

        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if($rnum==0) {
            $stmt->close();

            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("ssss",$first_name, $last_name, $email, $password);
            $stmt->execute();
            echo ("<script>window.alert('Registered successfully'); window.location.href='homepage.html';</script>");
        } else {
            echo ("<script>window.alert('Email already in use'); window.location.href='signup.html';</script>");
        }
        $stmt->close();
        $conn->close();
    }
}
else {
    echo "Please fill out all fields";
    die();
}
?>
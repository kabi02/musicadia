<?php
include "connection.php";
$txtName = $_POST['name'];
$txtEmail = $_POST['email'];
$txtPhone = $_POST['phone'];
$txtAddress = $_POST['address'];
$paymentMethod = $_POST['payment_method'];
$subtotal = $_POST['subtotal'];

$sql = "INSERT INTO `order_details` (`order_id`, `name`, `email`, `phone`, `address`, `payment_method`, `subtotal`) VALUES (NULL, '$txtName', '$txtEmail', '$txtPhone', '$txtAddress', '$paymentMethod', '$subtotal')";

$rs = mysqli_query($conn, $sql);
if(!empty($txtEmail) || !empty($txtName) || !empty($txtPhone || !empty($txtAddress))) {
    header('Location: prodfunc.php?page=placeorder');
}
?>
<?php
include "connection.php";
$txtName = $_POST['name'];
$txtEmail = $_POST['email'];
$txtPhone = $_POST['phone'];
$txtMessage = $_POST['msg'];

$sql = "INSERT INTO `msg_inquiry` (`id`, `fldName`, `fldEmail`, `fldPhone`, `fldMessage`) VALUES ('0', '$txtName', '$txtEmail', '$txtPhone', '$txtMessage')";

$rs = mysqli_query($conn, $sql);
if(!empty($txtEmail) || !empty($txtName) || !empty($txtPhone || !empty($txtMessage))) {
    echo ("<script>window.alert('Message sent'); history.back(); location.reload();</script>");
}
?>
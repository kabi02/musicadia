<?php
session_start();
// Include functions and connect to the database using PDO MySQL
include 'functions2.php';
$pdo = pdo_connect_mysql();

$page = isset($_GET['page']) && file_exists($_GET['page'] . '.php') ? $_GET['page'] : 'prod2';
// Include and show the requested page
include $page . '.php';
?>
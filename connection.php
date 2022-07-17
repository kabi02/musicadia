<?php
   $host = "localhost";
   $dbUsername = "root";
   $dbPassword = "";
   $dbName = "user_data";
   $conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbName);

   if(!$conn) {
    echo "Connection failed";
   }
?>
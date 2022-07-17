<?php
session_start();
if(empty($_SESSION['email'])):
    header('Location: login.html');
endif;
?>
<!DOCTYPE html>
<html>
    <body>
        <div style="width:150px; margin:auto; heigth:500px; margin-top:300px;">
        <?php
            include "connection.php";
            session_destroy();
        ?>
        </div>
    </body>
</html>
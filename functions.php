<?php
function pdo_connect_mysql() {
    // Update the details below with your MySQL details
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'user_data';
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error.
    	exit('Failed to connect to database!');
    }
}
// Template header, feel free to customize this
function template_header($title) {
echo <<<EOT
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>$title</title>
		<link href="style.css" rel="stylesheet" type="text/css">
        <link href="style2.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
        <header>
            <div class="banner-top">
            <a href="index.php"><img src="header.png" width="220" height="220" style="position: relative; top: -50px;"></a>
            <a href="prodfunc.php?page=cart"><button class="t_button"><img src="cart.png" width="33.5625" height="30" style="position:relative; top: -3px;"></button></a>
            <a href="homepage.html"><button class="button_signup">Logout</button></a>
            <a href=""><button class="t_button"></button></a>
            <a href="contact.php"><button class="t_button">Contact us</button></a>
            <a href="prodfunc.php"><button class="t_button">Products</button></a>
            <a href="index.php"><button class="t_button">Home</button></a>
        </div>
        </header>
        <main>
EOT;
}
// Template footer
function template_footer() {
$year = date('Y');
echo <<<EOT
        </main>
        <div class="banner-bottom">
        <p style="color: white; position:relative; padding-top: 25px; padding-left: 20px;">@2022 Musicadia Philippines</p>
    </div>
</html>
EOT;
}
?>
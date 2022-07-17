<?php
session_start();
if(empty($_SESSION['email'])):
    header('Location: login.html');
endif;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Contact Us - Musicadia
        </title>
        <link rel="stylesheet" href="style.css">
        <!--Top Banner-->
        <div class="banner-top">
            <a href="index.php"><img src="header.png" width="220" height="220" style="position: relative; top: -50px;"></a>
            <a href="prodfunc.php?page=cart"><button class="t_button"><img src="cart.png" width="33.5625" height="30" style="position:relative; top: -3px;"></button></a>
            <a href="homepage.html"><button class="button_signup">Logout</button></a>
            <a href=""><button class="t_button"></button></a>
            <a href="contact.php"><button class="t_button">Contact us</button></a>
            <a href="prodfunc.php"><button class="t_button">Products</button></a>
            <a href="index.php"><button class="t_button">Home</button></a>
        </div>
    </head>
    <body>
        <h1 style="position: relative; text-align:center; top: 30px;">Contact Us</h1>
        <div class="container-contact">
            <form action="sendmsg.php" method="post">
              <input type="text" id="name" name="name" placeholder="Name" required>
          
              <input type="text" id="email" name="email" placeholder="Email" required>
          
              <input type="text" id="Phone" name="phone" placeholder="Phone Number" required>
          
              <textarea id="msg" name="msg" placeholder="Message" style="height:200px" required></textarea>
          
              <button style="padding-left: 25px; padding-right: 25px; padding-top: 10px; padding-bottom: 10px; background-color: rgb(0, 223, 148); font-family: Outfit; font-size: 16px; border-radius: 12px; border: none; cursor: pointer;">Send</button>
            </form>
          </div>

          <div class="banner-bottom">
            <p style="color: white; position: relative; padding-top: 25px; padding-left: 20px;">@2022 Musicadia Philippines</p>
        </div>
    </body>
</html>
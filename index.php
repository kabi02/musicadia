<?php

?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Musicadia PH - Home
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
    <body style="background: #161616">
        <!--Image Slides-->
        <div class="slideshow-container">
            <div class="mySlides fade">
                <a href="prodfunc.php"><img src="salebanner.png" style="width:100%"></a>
            </div>

            <div class="mySlides fade">
                <img src="banner1.png" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="banner2.png" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="banner3.png" style="width:100%">
            </div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
        </div>
        
        <script>
            let slideIndex = 1;
            showSlides(slideIndex);

            // Next/previous controls
            function plusSlides(n) {
            showSlides(slideIndex += n);
            }

            // Thumbnail image controls
            function currentSlide(n) {
            showSlides(slideIndex = n);
            }

            function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
            }
        </script>
        <div class="banner-bottom">
            <p style="color: white; position:relative; padding-top: 25px; padding-left: 20px;">@2022 Musicadia Philippines</p>
        </div>
    </body>
</html>
<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "nabeela0809@gmail.com";
include 'connect.php';
// ini_set()
mail($recipient, $subject, $message, $mailheader)
or die("Error!");

echo'

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel ="stylesheet" href="contact.css">
    <script src="https://kit.fontawesome.com/925865b64f.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="header">
        <div class="container">
          <nav>
            <img src="images/logo.png" class="logo">
            <ul id="sidemenu">
              <li><a href="home.html">Home</a></li>
              <li><a href="about.html">About Us</a></li>
              <li><a href="services.html">Services</a></li>
              <li><a href="#blog">Blog</a></li>
              <li><a href="#testimonials">Testimonials</a></li>
              <li><a href="contact.html">Contact Us</a></li>
              <li><button type="button" class="login-btn" href="#login">Login</button></li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="container-2">
        <div class="text">
            <h1>Get in Touch With Us!</h1>
        </div>
      </div>
    <div class="container-3">
      <h2>Thank you for contacting. We will revert you as soon as possible.</h2>
      <p class="back">Go back to the<a href="contact.html">Contact Page</a></p>
    </div>
    <div class="footer">
        <div class="col1">
            <img src="images/logo.png" alt="consultjet" class="consultjet">
            <!-- <hr> -->
            <br>
            <h2>Placing People at<span> Best!</span></h2>
        </div>
    <div class="col2">
        <h1>
            Explore
        </h1>
        <br>
        <ul>
            <li><a href="index.html">Home</a></li>
              <li><a href="">About Us</a></li>
              <li><a href="">Services</a></li>
              <li><a href="">Blog</a></li>
              <li><a href="">Testimonials</a></li>
              <li><a href="contact.html">Contact Us</a></li>
        </ul>
    </div>
    <div>
        <div class="col3">
            <h1>Quick Links</h1>
            <ul>
                <li><a href="#"><img src="Images/Rectangle 11.jpg" alt ="Facebook"></a></li>
                <li><img src="Images/Rectangle 12.jpg" alt="Twitter"></li>
                <li><a target="_blank" href="https://www.instagram.com/consultjet/"><img src="Images/Rectangle 13.jpg" alt="Instagram"></a></li>
                <li><img src="Images/Rectangle 14.jpg" alt ="LinkedIn"></li>
            </ul>
        </div>
        <div class="col4">
            <hr>
        </div>
        <div class="col5">
            <a>+91000000000</a>
            <a>contact@consultjet.in</a>
        </div>
    </div>
    </div>
</body>
</html>

';

?>
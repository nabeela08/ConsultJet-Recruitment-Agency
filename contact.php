<?php
include "nav.php";
echo'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel ="stylesheet" href="contact.css">
    <script src="https://kit.fontawesome.com/925865b64f.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="header">
        <div class="container">
        </div>
      </div>
      <div class="container-2">
        <div class="text">
            <h1>Get in Touch With Us!</h1>
        </div>
      </div>
    <div class="container-3">
      <form action="https://formsubmit.co/nabeela0809@gmail.com" method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
        <label for="name">Email:</label>
        <input type="email" name="email" id="email" required>
        <label for="subject">Subject</label>
        <input type="text" name="subject" id="subject" required>
        <label for="message">Message</label>
        <textarea name="message" cols="30" rows="10" required></textarea>
        <br>
        <input type="submit" value="Submit">
      </form>
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
          <li><a href="home.html">Home</a></li>
          <li><a href="about.html">About Us</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="employee.html">Employee</a></li>
          <li><a href="recruiter.html">Recruiters</a></li>
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
</html>';
?>
<?php
   //include CSS Style Sheet
   echo "<link rel='stylesheet' type='text/css' href='nav.css' />";
?>

<?php
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin=true;
}
else{
  $loggedin=false;
}
echo '<nav>
        <img src="images/logo.png" class="logo">
        <ul id="sidemenu">
          <li><a href="home.php">Home</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="employee.php">Employee</a></li>
          <li><a href="recruiter.php">Recruiters</a></li>
          <li><a href="contact.php">Contact Us</a></li>
          <li><a href="login.php">Login</a></li>
        </ul>
      </nav>';

        if($loggedin){
        echo '<li class="nav-item">
          <a class="nav-link" href="/junior-project/logout.php">Log Out</a>
        </li>
        </ul>';
        }
?>

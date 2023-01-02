<?php
if ( isset( $_FILES['pdfFile'] ) ) {
	if ($_FILES['pdfFile']['type'] == "application/pdf") {
		$source_file = $_FILES['pdfFile']['tmp_name'];
		$dest_file = "upload/".$_FILES['pdfFile']['name'];

		if (file_exists($dest_file)) {
			print "The file name already exists!!";
		}
		else {
			move_uploaded_file( $source_file, $dest_file )
			or die ("Error!!");
			if($_FILES['pdfFile']['error'] == 0) {
				print "Pdf file uploaded successfully!";
				print "<b><u>Details : </u></b><br/>";
				print "File Name : ".$_FILES['pdfFile']['name']."<br.>"."<br/>";
				print "File Size : ".$_FILES['pdfFile']['size']." bytes"."<br/>";
				print "File location : upload/".$_FILES['pdfFile']['name']."<br/>";
			}
		}
	}
	else {
		if ( $_FILES['pdfFile']['type'] != "application/pdf") {
			print "Error occured while uploading file : ".$_FILES['pdfFile']['name']."<br/>";
			print "Invalid  file extension, should be pdf !!"."<br/>";
			print "Error Code : ".$_FILES['pdfFile']['error']."<br/>";
		}
	}
}
?>

<?php
include "nav.php";
echo'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
</head>
<body>
    <title>Services</title>
    <link rel ="stylesheet" href="employee.css">
    <script src = "js/index.js"></script>
    <script src="https://kit.fontawesome.com/925865b64f.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="header">
        <div class="container">
        </div>
    </div>


    <div class="cont2">
        <img src="images/emp1.jpg" alt="emp1" class="emp1">
    </div>

    <div style="padding: 50px 75px 10px;">
        <h2 style="color:#53132d; padding-bottom: 12px;">Upload CV :</h2>
        <form enctype="multipart/form-data"
            action="<?php print $_SERVER["PHP_SELF"]?>
<p> <input type="hidden" name="MAX_FILE_SIZE" value="200000" /> <input type="file" name="pdfFile" /><br />
    <br />
    <input type="submit" value="Upload" style="padding:6px 8px; background-color:rgb(0, 119, 255); border: none; border-radius: 5px; font-size: 15px; color: white;"/>
</p>
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
                <li><a href="#"><img src="Images/Rectangle 11.jpg" alt="Facebook"></a></li>
                <li><img src="Images/Rectangle 12.jpg" alt="Twitter"></li>
                <li><a target="_blank" href="https://www.instagram.com/consultjet/"><img src="Images/Rectangle 13.jpg"
                            alt="Instagram"></a></li>
                <li><a target="_blank" href="https://www.linkedin.com/company/consult-hut/"><img
                            src="Images/Rectangle 14.jpg" alt="LinkedIn"></a></li>

            </ul>
        </div>
        <div class="col4">
            <hr>
        </div>
        <div class="col5">
            <ul>
                <li>
                    <img src="images/Rectangle 9.jpg" alt="Phone" height="35px">
                    <a>+91000000000</a>
                </li>

                <li>
                    <img src="images/Rectangle 10.jpg" alt="Email" height="35px">
                    <a>contact@consultjet.in</a>
                </li>

            </ul>
        </div>
    </div>

    </body>

    </html>';
    ?>
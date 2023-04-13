
<!DOCTYPE html>
<html lang = "en">
<head>
    <title> Home Page - Adoption Service</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script defer src = "script.js"></script>
</head>
<body>
<?php
include_once "header.php";
?>
    <div class="video-container">
         <video id="background-video" loop autoplay muted>
            <source src="http://www.pexels.com/video/853936/download/" type="video/mp4">
         </video>
         <div class="video-overlay"></div>
         <div class="video-text">
             <h1  style="color: white; text-align: center; font-family: 'Helvetica', sans-serif; font-weight: bold;">Adopt Now.</h1>
             <p style = "font-size: 20px"> find your newest furry friend.</p>
         </div>
    </div>
    <div class="side-menu">
        <a class="home-link" href="index.php">HOME </a>
        <a href="find-dog.php">FIND A DOG</a>
        <a href = "find-cat.php">FIND A CAT</a>
        <a href="dog-care.php">DOG CARE</a>
        <a href="cat-care.php">CAT CARE</a>
        <a href="signup.php">CREATE AN ACCOUNT</a>
        <a href="pet-giveaway.php">GIVE AWAY A PET</a>
        <a href="contact-us.php">CONTACT US</a>
    </div>
    <div class="welcome-container">
        <div class="welcome-message">Our Mission.</div>
        <div class="welcome-description">
            <p>This is a platform where you can adopt a pet that fits your lifestyle and family. Browse through our selection of pets and find your new best friend today!</p>
        </div>
    </div>
   
</body>
</html>

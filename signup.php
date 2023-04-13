<?php
    session_start();
    include_once "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup - Second Chances Shelter</title>
    <link rel="stylesheet" href="signup.css">
    <script defer src = "login.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script> 
</head>
<body class = "disclaimer-gradient">
<div class="side-menu">
        <a class="home-link" href="index.php">HOME </a>
        <a href="find-dog.php">FIND A DOG</a>
        <a href = "find-cat.php">FIND A CAT</a>
        <a href="dog-care.php">DOG CARE</a>
        <a href="cat-care.php">CAT CARE</a>
        <a class = "home-link" href="signup.php">CREATE AN ACCOUNT</a>
        <a href="pet-giveaway.php">GIVE AWAY A PET</a>
        <a href="contact-us.php">CONTACT US</a>
    </div>
    <div class="wrapper">
        <div class="form-box login">
            <h2>Signup</h2>
            <form action="signupValidation.php" method="POST" onsubmit = "return validateInput()">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input id = "username" name="username" type="text">
                    <div id = "username-error" class="error"></div>
                    <label>Username</label>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input id = "password" name="password" type="password">
                    <div class="error"></div>
                    <label>Password</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-i2con name="lock-closed"></ion-icon></span>
                    <input id = "confirmpassword" name="confirmPassword" type="password">
                    <div class="error"></div>
                    <label>Confirm Password</label>
                </div>
                <button type = "submit" name = "submit" class = "btn" value="submit">Signup</button>
                <div class="login-here">
                    <h4>Already have an account?</h4>
                    <a href = "login.php">Login here</a>
                </div>
            </form>
        </div>
    </div>
        
</body>
</html>

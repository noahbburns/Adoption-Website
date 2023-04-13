<?php
    session_start();
    include_once "header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Second Chances Shelter</title>
    <link rel="stylesheet" href="login.css">
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
            <h2>Login</h2>
            <form id = "form" action="loginValidation.php" method="post" onsubmit = "return validateInputs()">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input id = "username" name = "username" type="text">
                    <div id = "username-error" class="error"></div>
                    <label>Username</label>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input id = "email" name = "email" type="email">
                    <div class="error"></div>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input id = "password" name = "password" type="password">
                    <div class="error"></div>
                    <label>Password</label>
                </div>
                <button type = "submit" class = "btn" name = "submit">Login</button>
                <div class="signup">
                    <h4>Dont have an account?</h4>
                    <a href = "signup.php">Signup here</a> 
                </div>
            </form>
        </div>
    </div>
        
</body>
</html>

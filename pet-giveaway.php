<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Have a Pet to Give Away? - Second Chances Shelter</title>
    <link rel="stylesheet" href="pet-giv.css">
    <script defer src="script.js"></script>
</head>
<body>
  <div class="pet-giv-gradient">
    <?php
      include_once "header.php";
    ?>
        <div class="side-menu">
            <a href="index.php">HOME </a>
            <a href="find-dog.php">FIND A DOG</a>
            <a href = "find-cat.php">FIND A CAT</a>
            <a href="dog-care.php">DOG CARE</a>
            <a href="cat-care.php">CAT CARE</a>
            <a href="signup.php">CREATE AN ACCOUNT</a>
            <a class = "home-link" href="pet-giveaway.php">GIVE AWAY A PET</a>
            <a href="contact-us.php">CONTACT US</a>
        </div>
    <div class="container">
        <form id="form" action="/">
            <h1>Register a pet</h1>
            <div class = "pet-give-radio">
                <input type="radio" name = "selection" id = "cat" checked = "checked">
                <label class = "radio-label" for = "cat">Cat</label>
                <input type="radio" name = "selection" id = "dog">
                <label class = "radio-label" for = "dog">Dog</label>
              </div>
            <div class="input-control">
                <label for="breed">Breed</label>
                <input id="breed" name="breed" type="text">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label>Age</label>
                <div class="custom-select">
                  <select>
                      <option value="doesnt-matter">Doesn't matter</option>
                      <option value="0-2">0-2 years old</option>
                      <option value="2-5">2-5 years old</option>
                      <option value="5-10">5-10 years old</option>
                      <option value="10+">10+ years old</option>
                  </select>
                </div>
             </div>   
              <div class="input-control">
                <label>Gender</label>
                <div class="custom-select">
                  <select>
                    <option value="doesnt-matter">Doesn't matter</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                  </select>
                </div>
             </div> 
             <div class="input-control">
                <label for="username">Owner's Name</label>
                <input id="username" name="username" type="text">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="email">Email</label>
                <input id="email" name="email" type="text">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label>Comments</label>
                <textarea class="input-textarea"></textarea>
             </div> 
            <div class="input-terms">
                <label class="input-check">
                  <input type="checkbox">
                  <span class="input-checkmark"></span>
                </label>
                <p>Good with dogs</p>
             </div> 
              <div class="input-terms">
                <label class="input-check">
                  <input type="checkbox">
                  <span class="input-checkmark"></span>
                </label>
                <p>Good with cats</p>
             </div> 
              <div class="input-terms">
                <label class="input-check">
                  <input type="checkbox">
                  <span class="input-checkmark"></span>
                </label>
                <p>Good with children</p>
             </div> 
            <button type="submit">Register</button>
        </form>
    </div>
  </div>
</body>
</html>
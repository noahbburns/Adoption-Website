<!DOCTYPE html>
<html lang = "en">
<head>
  <meta charset="UTF-8">
  <title>Find a dog - Second Chances Shelter</title>
  <link rel="stylesheet" type="text/css" href="style.css">
     <script defer src = "script.js"></script>
</head>
<body class = "fd-gradient">
    <form id = "form">
    <div class="fd-wrapper">
    <div class="fd-title">
      Man's best friend.
    </div>
    <div class="fd-form">
       <div class="fd-inputfield">
          <label>Preferred Breed</label>
          <div class="fd-custom_select">
            <select required>
                 <option value = "">Select</option>
                <option value="doesnt-matter">Doesn't matter</option>
                <option value="affenpinscher">Affenpinscher</option>
                <option value="african">African</option>
                <option value="airedale">Airedale Terrier</option>
                <option value="akita">Akita</option>
                <option value="alaskan">Alaskan Malamute</option>
                <option value="american">American Eskimo Dog</option>
                <option value="anatolian">Anatolian Shepherd</option>
                <option value="australian">Australian Cattle Dog/Blue Heeler</option>
                <option value="australianshepherd">Australian Shepherd</option>
                <option value="basenji">Basenji</option>
                <option value="beagle">Beagle</option>
            </select>
          </div>
       </div>  
        <div class="fd-inputfield">
          <label>Preferred Age</label>
          <div class="fd-custom_select">
            <select required>
                <option value = "">Select</option>
                <option value="doesnt-matter">Doesn't matter</option>
                <option value="0-2">0-2 years old</option>
                <option value="2-5">2-5 years old</option>
                <option value="5-10">5-10 years old</option>
                <option value="10+">10+ years old</option>
            </select>
          </div>
       </div>  
       
        <div class="fd-inputfield">
          <label>Gender</label>
          <div class="fd-custom_select">
            <select required>
                 <option value = "">Select</option>
                <option value="doesnt-matter">Doesn't matter</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
          </div>
       </div> 
      <div class="fd-inputfield terms">
          <label class="fd-check">
            <input type="checkbox">
            <span class="fd-checkmark"></span>
          </label>
          <p>Good with dogs</p>
       </div> 
        <div class="fd-inputfield terms">
          <label class="fd-check">
            <input type="checkbox">
            <span class="fd-checkmark"></span>
          </label>
          <p>Good with cats</p>
       </div> 
        <div class="fd-inputfield terms">
          <label class="fd-check">
            <input type="checkbox">
            <span class="fd-checkmark"></span>
          </label>
          <p>Good with children</p>
       </div> 
      <div class="fd-inputfield">
        <input type="submit" value="Submit" class="fd-submit-btn">
        <input type="reset" value="clear" class="fd-clear-btn">
      </div>
    </div>
       
</div>
   </form>
   <?php
    include_once "header.php";
    ?>
        <div class="side-menu">
            <a href="index.php">HOME </a>
            <a class = "home-link" href="find-dog.php">FIND A DOG</a>
            <a href = "find-cat.php">FIND A CAT</a>
            <a href="dog-care.php">DOG CARE</a>
            <a href="cat-care.php">CAT CARE</a>
            <a href="signup.php">CREATE AN ACCOUNT</a>
            <a href="pet-giveaway.php">GIVE AWAY A PET</a>
            <a href="contact-us.php">CONTACT US</a>
        </div>
</body>
</html>

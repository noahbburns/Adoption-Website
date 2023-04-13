<!DOCTYPE html>
<html lang = "en">
<head>
  <meta charset="UTF-8">
  <title>Find a Cat - Second Chances Shelter</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="find-cat-style.css">
     <script defer src = "script.js"></script>
</head>
<body class = "gradient">
    <form>
    <div class="wrapper">
    <div class="title">
      Feline friendship.
    </div>
    <div class="form">
       <div class="inputfield">
          <label>Preferred Breed</label>
          <div class="custom_select">
            <select required>
                 <option value = "">Select</option>
                <option value="doesnt-matter">Doesn't matter</option>
                <option value="persian">Persian</option>
                <option value="sphynx">Sphynx</option>
                <option value="siamese">Siamese</option>
                <option value="maine_coon">Maine Coon</option>
                <option value="ragdoll">Ragdoll</option>
            </select>
          </div>
       </div>  
        <div class="inputfield">
          <label>Preferred Age</label>
          <div class="custom_select">
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
       
        <div class="inputfield">
          <label>Gender</label>
          <div class="custom_select">
            <select required>
                 <option value = "">Select</option>
                <option value="doesnt-matter">Doesn't matter</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
          </div>
       </div> 
      <div class="inputfield terms">
          <label class="check">
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <p>Good with dogs</p>
       </div> 
        <div class="inputfield terms">
          <label class="check">
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <p>Good with cats</p>
       </div> 
        <div class="inputfield terms">
          <label class="check">
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <p>Good with children</p>
       </div> 
      <div class="inputfield">
        <input type="submit" value="Submit" class="submit-btn">
        <input type="reset" value="clear" class="clear-btn">
      </div>
    </div>
</div>
   </form>
   <?php
      include_once "header.php";
    ?>
        <div class="side-menu">
            <a href="index.php">HOME </a>
            <a href="find-dog.php">FIND A DOG</a>
            <a class = "home-link" href = "find-cat.php">FIND A CAT</a>
            <a href="dog-care.php">DOG CARE</a>
            <a href="cat-care.php">CAT CARE</a>
            <a href="signup.php">CREATE AN ACCOUNT</a>
            <a href="pet-giveaway.php">GIVE AWAY A PET</a>
            <a href="contact-us.php">CONTACT US</a>
        </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <link rel="stylesheet" href="css/styles.css">
  
  <title>One Destiny Designs - Contact</title>
</head>
<body>
  
<?php 
  include "includes/header.php"
  ?>
  <div class="pageContainer">
    <div id="contactContainer" class="animate__animated animate__fadeIn">
      <div id="contactText">
        <h3>Need more info? Email us or send us a message below.</h3>
        <p>We also create custom commissions!</p> 
        <p id="contactEmailText"><a href = "mailto: onedestinydesigns@gmail.com">Send Email <i class="far fa-envelope"></i></a></p>
      </div>
      <fieldset>
        <div id="contactWrapper" class="flex">
          <form method="POST" action="" >
            <input id="fullName" type="text" name="fullName" placeholder="Name" />
            <input id="email" type="text" name="email" placeholder="Email" />
            <input id="contactNumber" type="text" name="contactNumber" placeholder="Contact #">
            <textarea name="messageBox" id="messageBox" cols="30" rows="10" placeholder="Message goes here..."></textarea>
            <input id="contactSubmitBtn"type="submit" value="Send Message">
          </form>
        </div>
      </fieldset>
      </div>

  <?php
  include "includes/footer.php"
  ?>
  </div>
</body>
</html>
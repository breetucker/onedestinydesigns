<?php 
	$message_sent = false;
	if(isset($_POST['email']) && $_POST['email'] != ''){

		if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){



			//submit the form
			$fullName = $_POST['fullName'];
			$email = $_POST['email'];
			$contactNumber = $_POST['contactNumber'];
			$messageBox = $_POST['messageBox'];

			$to = 'onedestinydesigns@gmail.com';
			$body = '';
			$subject = 'One Destiny Designs Inquiry';
            
			$body .= 'From: ' .$fullName . "\r\n";
			$body .= 'Email: ' .$email . "\r\n";
			$body .= 'Contact Number: ' .$contactNumber . "\r\n";
			$body .= 'Message: ' .$messageBox . "\r\n";
            $headers = 'Reply-To: '.$email. "\r\n" ;

			mail($to, $subject, $body, $headers);
			$message_sent = true; 
		} 
		
	}
?>


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
        <?php if($message_sent): ?>
            <h2 style="color: var(--textDark)">Thanks, we'll be in touch soon!</h2>
            <br />
        <?php endif ?>
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
<?php
require_once "config.php";
if(isset($_POST['SendMessage'])){
  $fullName=$_POST['fullName'];
  $email=$_POST['email'];
  $message=$_POST['message'];

  $stmt = $conn->prepare("INSERT INTO `contactus`(`fullName`, `email`, `message`) VALUES (?,?,?)");
$stmt->bind_param("sss",$fullName,$email,$message);
$stmt->execute();
echo '<script type="text/javascript">
       window.onload = function () { alert("Your Message Has been sent Successfully"); } 
</script>';
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact US</title>
    <script
      src="https://kit.fontawesome.com/b8e0ff78ed.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="StyleSheets\contact.css"/>
    
  </head>
  <body>
    <section class="contact">
      <div class="content">
        <h2>Contact Us <i class="fas fa-phone-alt call"></i></h2>
      </div>
      <div class="container">
        <div class="contactinfo">
          <div class="box">
            <div class="text">
              <h3>Address</h3>
              <p>-----<br/>Rajpura,Punjab<br />140401</p>
            </div>
          </div>
          <div class="box">
            <div class="text">
              <h3 style="font-size: large">Contactno.</h3>
              <br />
              <p>+91-6239726566</p>
              <p>+91-8437622367</p>
            </div>
          </div>
          <div class="box">
            <div class="text">
              <h3>Email:</h3>
              <a
                href="manvi0862.be21@chitkara.edu.in"
                target="_blank"
                class="Anchor"
                >manvi0862.be21@chitkara.edu.in</a
              >
              <a
                href="mailto:naman0913.be21@chitkara.edu.in"
                target="_blank"
                class="Anchor"
                >naman0913.be21@chitkara.edu.in</a
              >
              
            </div>
          </div>
        </div>
        <div class="contactform">
        <form method="POST">
            <h2>Send message</h2>
            <div class="inputBox">
              <input type="text" required name="fullName"/>
              <span>Full name</span>
            </div>
            <div class="inputBox">
              <input type="email" required name="email" />
              <span>Email</span>
            </div>
            <div class="inputBox">
              <textarea required name="message"></textarea>
              <span>Type Your Message</span>
            </div>
            <button type="submit" name ="SendMessage" class="Sbutton">Send</button>
          </form>
        </div>
      </div>
    </section>
  </body>
</html>

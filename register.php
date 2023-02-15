<?php
require_once "config.php";
$username = $password = $confirm_password = $contact = "" ;
$username_err = $password_err = $confirm_password_err = $contact_err ="";

if ($_SERVER['REQUEST_METHOD'] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Username cannot be blank";
    }
    else{
        $sql = "SELECT id FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set the value of param username
            $param_username = trim($_POST['username']);

            // Try to execute this statement
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    $username_err = "This username is already taken"; 
                }
                else{
                    $username = trim($_POST['username']);
                }
            }
            else{
                echo "Something went wrong";
            }
        }
    }

    mysqli_stmt_close($stmt);


// Check for password
if(empty(trim($_POST['password']))){
    $password_err = "Password cannot be blank";
}
elseif(strlen(trim($_POST['password'])) < 5){
    $password_err = "Password cannot be less than 5 characters";
}
else{
    $password = trim($_POST['password']);
}

// Checking for Contact Number
if(empty(trim($_POST['contact']))){
    $contact_err = "Contact cannot be blank";
}

else{
    $contact = trim($_POST['contact']);
}

// Check for confirm password field
if(trim($_POST['password']) !=  trim($_POST['confirm_password'])){
    $password_err = "Passwords should match";
}


// If there were no errors, go ahead and insert into the database
if(empty($username_err) && empty($password_err) && empty($confirm_password_err) && empty($contact_err))
{
    $sql = "INSERT INTO users (username, password,contact) VALUES (?, ?,?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt)
    {
        mysqli_stmt_bind_param($stmt, "ssi", $param_username, $param_password,$param_contact);

        // Set these parameters
        $param_username = $username;
        $param_password = password_hash($password, PASSWORD_DEFAULT);
        $param_contact = $contact;

        // Try to execute the query
        if (mysqli_stmt_execute($stmt))
        {
            header("location:login.php");
        }
        else{
            echo "Something went wrong... cannot redirect!";
        }
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login / SignUp</title>
    <script src="https://kit.fontawesome.com/b8e0ff78ed.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="register.css"/>
    
  </head>
  <body>
    <section class="container animate__animated animate__backInDown">
      <div id="left-part">
        <h1>Welcome</h1>
        <p class=text>
          To keep connected with us please <br />
          login with your personal info
        </p> 
        <br>
        <p><i class="fas fa-users member-logo fa-2x"></i><br><b class=member-login>Member Login</b></p>
        <a href="login.php"><button class=member-login-button>Login</button></a>
      </div>
      <div id="right-part">
        <h1>Create Account</h1>
        <div class=social-icons>
          <a href='https://www.facebook.com/' target="_blank"><button class="facebook icon"><i class="fab fa-facebook-f fa-2x"></i></button></a>&nbsp;&nbsp;&nbsp;&nbsp;
          <a href='https://www.google.com/' target='_blank' ><button class="google icon"><i class="fab fa-google fa-2x"></i></button></a>&nbsp;&nbsp;&nbsp;&nbsp;
          <a href='https://twitter.com/' target='_blank'><button class="twitter icon"><i class="fab fa-twitter fa-2x"></i></button></a>
        </div>
        <br>
        <div class="or">
          <span><hr width="50" /></span>
          <span>&nbsp;&nbsp; OR &nbsp;&nbsp;</span>
          <span><hr width="50" /></span>
        </div>
        <br><br>
        <form method="POST" action="">
          <p class='input-container'><i class="fas fa-user user input-icons"></i><input class=signup-inputs type="text" placeholder="Username" required name="username"></p>
          <!-- <p class='input-container'><i class="fas fa-envelope envelope input-icons"></i><input class=signup-inputs type="email" placeholder="Email" name="email" required></p> -->
          <p class='input-container'><i class="fas fa-phone input-icons"></i><input class=signup-inputs type="tel" placeholder="Contact Number" required name="contact"></p>
          <p class='input-container'><i class="fas fa-key key input-icons"></i><input class=signup-inputs type="password" placeholder="Password" required name="password"></p>
          <p class='input-container'><i class="fas fa-lock lock input-icons"></i><input class=signup-inputs type="password" placeholder="Confirm Password" required name="confirm_password" ></p>
          <br>
          <button type="submit" class="signup-button" name="submit">Register</button>
        </form>
      </div>
    </section>
  </body>
</html>


<!-- <script>     
  let Btn = document.querySelector('button.signup-button');
    Btn.addEventListener('click',ShowMsg);

  function ShowMsg(){
       alert("You Have Signed Up Successfully.")
    }
</script> -->




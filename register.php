<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login / SignUp</title>
    <script src="https://kit.fontawesome.com/b8e0ff78ed.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap");
      @import url("https://fonts.googleapis.com/css2?family=Roboto&display=swap");
        body{
          background-color:rgba(219, 240, 240, 0.575);
        }

        /*----------------------------------------------------------- CONTAINER ---------------------------------- */

        .container {
          margin: auto;
          margin-top: 60px;
          margin-bottom:50px;
          background: white;
          height: auto;
          width: 140vh;
          border-radius: 20px;
          box-shadow: 0px 10px 20px rgb(43, 42, 42);
          opacity: 0.9;
          display: flex;
        }

        /* ------------------------------------------------------------LEFT PART -------------------------------- */

        #left-part {
          width: 40%;
          height: inherit;
          border-radius: 20px 0px 0px 20px;
          background-color: rgba(17, 129, 194, 0.884);
          display: flex;
          flex-direction: column;
          align-items: center;
          justify-content: center;
          font-family: "Merriweather", serif;
          font-size: 25px;
          color: white;
        }
        #left-part p {
          font-family: "Roboto", sans-serif;
          font-size: 20px;
          text-align: center;
        }

        .member-logo {
          padding: 10px;
          border-radius: 50%;
        }
        .member-login {
          font-size: 25px;
          font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
        }
        .member-login-button {
          background-color: transparent;
          color: white;
          border: 2px solid white;
          padding: 13px 60px;
          border-radius: 40px;
          font-size: 25px;
        }
        .member-login-button:hover {
          color: rgba(17, 129, 194, 0.884);
          background-color: white;
        }

        /* ----------------------------------------------------------RIGHT PART -----------------------------------*/

        #right-part {
          width: 60%;
          height: inherit;
          text-align: center;
        }
        #right-part h1 {
          font-family: "Roboto", sans-serif;
          font-size: 40px;
          color: rgba(31, 161, 236, 0.884);
          letter-spacing: 1px;
        }
        .social-icons {
          padding: 10px;
        }

        
        .icon {
          height: 50px;
          width: 50px;
          border-radius: 50%;
          border: none;
        }
        .icon:hover {
          box-shadow: 0px 0px 10px black;
          cursor: pointer;
        }
        .facebook {
          background-color: #1778f2;
        }
        .facebook i {
          color: white;
        }
        .twitter i {
          color: #1da1f2;
          background-color: whitesmoke;
        }
        .fa-google {
          background: conic-gradient(
              from -45deg,
              #ea4335 110deg,
              #4285f4 90deg 180deg,
              #34a853 180deg 270deg,
              #fbbc05 270deg
            )
            73% 55%/150% 150% no-repeat;
          -webkit-background-clip: text;
          background-clip: text;
          color: transparent;
          -webkit-text-fill-color: transparent;
        }

        #right-part span {
          float: left;
        }
        .or {
          display: flex;
          justify-content: center;
          color: grey;
        }
        .input-container{
          display:flex;
          justify-content: center;
        }
        .signup-inputs {
          width: 300px;
          height: 42px;
          font-size:18px;
          padding-left: 20px;
          border: 1px solid grey;
          border-left: none;
          border-radius: 0px 7px 7px 0px;
        }
        .input-icons {
          background-color: skyblue;
          border-radius: 7px 0px 0px 7px;
          border-right: none;
          border: 1px solid grey;
          padding:14px;
          color:grey;
        }
        .signup-button {
          background-color: transparent;
          color: rgba(17, 129, 194, 0.884);
          border: 2px solid rgba(17, 129, 194, 0.884);
          padding: 5px 20px;
          border-radius: 20px;
          font-size: 20px;
          margin-bottom: 40px;
        }
        .signup-button:hover {
          background-color: rgba(17, 129, 194, 0.884);
          color: white;
        }

        /*--------------------------------------------------- RESPONSIVENESS-----------------------------------------*/

        @media screen and (max-width: 1000px) {
          .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 550px;
            height: 840px;
            font-size: 10px;
          }
          #left-part {
            height:260px;
            width: 550px;
            border-radius: 20px 20px 0px 0px;
            font-size: 25px;
          }
          #left-part p {
            font-size: 17px;
          }
          #left-part h1{
            margin-top:5px;
          }
          #left-part>br{
            display:none;
          }
          .text{
            display:none;
          }
          .member-login {
            font-size: 20px;
          }
          #right-part {
            text-align: center;
            font-size: 20px;
            height: 100px;
          }
          #right-part h1 {
            font-size: 30px;
          }
          .social-icons {
            display: flex;
            justify-content: center;
          }
          .or {
            color: grey;
            font-size: 15px;
          }
          .input-container {
            display:flex;
            justify-content: center;
          }
          .signup-inputs {
            width: 280px;
            height: 36px;
            font-size: 17px;
            padding-left: 10px;
            border: 1px solid grey;
            border-left: none;
            border-radius: 0px 7px 7px 0px;
          }
          .input-icons {
            background-color: skyblue;
            border-radius: 7px 0px 0px 7px;
            border: 1px solid grey;
            border-right: none;
            padding:9px;
            color:grey;
          }
          .member-login-button {
            background-color: transparent;
            color: white;
            border: 2px solid white;
            padding: 5px 20px;
            border-radius: 40px;
            font-size: 20px;
          }
        }
        @media screen and (max-width: 768px) {
          .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 400px;
            height: 790px;
            font-size: 10px;
          }
          #left-part {
            height: 240px;
            width: 400px;
            border-radius: 20px 20px 0px 0px;
            font-size: 20px;
          }
          #left-part p {
            font-size: 15px;
          }
          #left-part h1{
            margin-top: 0px;
          }
          #left-part>br{
            display:none;
          }
          .text{
            display:none;
          }
          .member-login {
            font-size: 20px;
          }
          #right-part {
            text-align: center;
            font-size: 20px;
            height: 100px;
          }
          #right-part h1 {
            font-size: 25px;
          }
          .social-icons {
            display: flex;
            justify-content: center;
          }
          .or {
            color: grey;
            font-size: 15px;
          }
          .input-container {
            display:flex;
            justify-content: center;
          }
          .signup-inputs {
            width: 200px;
            height: 28px;
            font-size: 15px;
            padding-left: 10px;
            border: 1px solid grey;
            border-left: none;
            border-radius: 0px 7px 7px 0px;
          }
          .input-icons {
            background-color: skyblue;
            border-radius: 7px 0px 0px 7px;
            border: 1px solid grey;
            border-right: none;
            padding:5px;
            color:grey;
          }
          .member-login-button {
            background-color: transparent;
            color: white;
            border: 2px solid white;
            padding: 5px 20px;
            border-radius: 40px;
            font-size: 20px;
          }
        }
        @media screen and (max-width: 576px) {
          .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 300px;
            height: 680px;
            font-size: 10px;
          }
          #left-part {
            height: 170px;
            width: 300px;
            border-radius: 20px 20px 0px 0px;
            font-size: 20px;
          }
          #left-part h1{
            margin-top:0px;
          }
          #left-part br{
            display:none
          }
          #left-part .text {
            display:none;
          }
          .member-logo{
            margin-top: -40px;
          }
          .member-login {
            display:none;
          }
          .member-login-button{
            margin-top: -20px;
          }
          #right-part {
            text-align: center;
            font-size: 20px;
            height: 100px;
          }
          #right-part h1 {
            font-size: 22px;
          }
          .social-icons {
            display: flex;
            justify-content: center;
          }
          .or {
            color: grey;
            font-size: 12px;
          }
          .input-container {
            display:flex;
            justify-content: center;
          }
          .signup-inputs {
            width: 130px;
            height: 24px;
            font-size: 15px;
            padding-left: 10px;
            border: 1px solid grey;
            border-left: none;
            border-radius: 0px 7px 7px 0px;
          }
          .input-icons {
            background-color: skyblue;
            border-radius: 7px 0px 0px 7px;
            border: 1px solid grey;
            border-right: none;
            padding:3px 7px 3px 7px;
            color:grey;

          }
          .member-login-button {
            background-color: transparent;
            color: white;
            border: 2px solid white;
            padding: 5px 20px;
            border-radius: 40px;
            font-size: 20px;
          }
        }

    </style>
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
        <form>
          <p class='input-container'><i class="fas fa-user user input-icons"></i><input class=signup-inputs type="text" placeholder="Name" required ></p>
          <p class='input-container'><i class="fas fa-envelope envelope input-icons"></i><input class=signup-inputs type="email" placeholder="Email" required></p>
          <p class='input-container'><i class="fas fa-key key input-icons"></i><input class=signup-inputs type="password" placeholder="Password" required></p>
          <p class='input-container'><i class="fas fa-lock lock input-icons"></i><input class=signup-inputs type="password" placeholder="Confirm Password" required></p>
          <br>
          <a href="index.php"><button class="signup-button" onclick="ShowMsg">Register</button></a>
        </form>
      </div>
    </section>
  </body>
</html>


<script>     
  let Btn = document.querySelector('button.signup-button');
    Btn.addEventListener('click',ShowMsg);

  function ShowMsg(){
       alert("You Have Signed Up Successfully.")
    }
</script>




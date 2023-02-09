<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ac74cc7357.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        /* body{
            margin:0px;
            padding:0px;
            background-image:url('Wave.svg');
            background-size:cover;
        }
    form{
        background-color : #DBE9F4;
        margin-top:6em;
        margin-left:30em;
        margin-right:10em;
        padding: 40px;
        box-shadow: 9px 9px 8px 9px #abcdef;
    } */

    *{box-sizing:border-box;}
    html,body{height:100%;}

    @keyframes background {
        100% {background-size:400px 1000px;}
    }

    body{
        display: grid;
        place-items:center;
        margin:0;
        padding:0 24px;
        background-image: url("wave.svg");
        background-repeat: no-repeat;
        background-size:cover;
        color: #f9f9f9;
        font-family:"Euclid Circular A";
    }

    @media(width>=500px){
        body{padding:0;}
    }
    .login{
        width:90%;
        padding:70px 30px 44px;
        border-radius:22px;
        background:linear-gradient(to bottom right, transparent,teal);
        opacity:1;
        text-align : center;
    }
     
    @media (width>=450px) {
        .login{width:380px;}
    }
    .avatar{
        margin:0 auto 16px;
        border-radius:50%;
        background:linera-gradient(-45deg,#157ael,#c7a1ff);
        padding:2px;
        width:120px;
        height:120px;
    }
    .avatar>img{
            width:100%;
            height:100%;
            object-fit:cover;
            border-radius:50%;
            border:4px solid #161616;
    }
    .login > h2{
        font-size:36px;
        font-weight:500;
        margin:0 0 4px;

    }

    .login>h3{
        color:rgba(255,255,255,0.38);
        margin:0 0 30px;
        font-weight:500;
        font-size:16px;
    }
    .login-form{
        display:grid;
        gap:16px;
        palce-item:center;
        width:100%;
        margin:0
    }
    .textbox{
        width:100%;
        position:relative;
    }

    .textbox span{
        position:absolute;
        top:50%;
        left:16px;
        translate:0 -50%;
        color:rgba(255,255,255,0.38);
    }
    .login-form input,
    .login-form button{
        width:100%;
        height:60px;
        outline:none;
        padding:0;
        font-family:inherit;
        font-size:16px;
        border-radius:8px;
    }
    .login-form input{
        background : transparent;
        border:2px solid rgba(255,255,255,0.1);
        font-size:18px;
        padding:0 20px 0 50px;
        color:inherit;
    }
    .login-form input:focus{
        border-color:#157ae1;
    }

    .login-form input:focus~span{
        color: #157ae1;
    }
    .login-form button{
            cursor: pointer;
            background:#157ae1;
            color: #f9f9f9;
            border:0;
            font-weight:600;
            letter-spacing:2px;
    }    
    .login-form a{
        color:#157ae1;
        font-size:16px;
        text-align:left;
        text-decoration:none;
    }
    </style>
    <title>Login</title>
</head>
<body>
    <!-- <div class="container">
    <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
 <p style="text-align: center;">New User?<br>Create Account <a href="register.php">Sign Up</a></p>
</form>
    </div> -->

    <div class="login">
        <div class="avatar">
            <img src="user.jpeg" />
        </div>
        <h2>Login</h2>
        <h3>Welcome Back Manvi</h3>
        <form  class="login-form">
            <div class="textbox">
                <input type="email" placeholder="Username" />
                <span><i class="fa-solid fa-user"></i>
                </span>
            </div>
            <div class="textbox">
                <input type="email" placeholder="Password" />
                <span>
                <i class="fa-regular fa-lock"></i>
                </span>
            </div>
            <button type="Submit">LOGIN</button>
            <a href="/">Forgot your Credentials? </a>
        </form>
    </div>  
</body>
</html>
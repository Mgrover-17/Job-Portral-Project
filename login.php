<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        body{
            margin:0px;
            padding:0px;
            background-image:url('images\login.jpg');
            background-size:cover;
        }
    form{
        background-color : #DBE9F4;
        margin-top:6em;
        margin-left:30em;
        margin-right:10em;
        padding: 40px;
        box-shadow: 9px 9px 8px 9px #abcdef;
    }
    </style>
    <title>Login</title>
</head>
<body>
    <div class="container">
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
    </div>
</body>
</html>
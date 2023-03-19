<?php
//This script will handle login
session_start();

// check if the user is already logged in
// if(isset($_SESSION['username']))
// {
//     header("location: Home2.php");
//     exit;
// }
require_once "config.php";

$username = $password = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter username + password";
    }
    else{
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }
if(empty($err))
{
    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $username;
    
    
    // Try to execute this statement
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt))
                    {
                        if(password_verify($password, $hashed_password))
                        {
                            // this means the password is corrct. Allow user to login
                            session_start();
                            $_SESSION["username"] = $username;
                            $_SESSION["id"] = $id;
                            $_SESSION["loggedin"] = true;

                            //Redirect user to welcome page
                            header("location: Home2.php");
                            }}}}}}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ac74cc7357.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="StyleSheets\login.css">
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
            <img src="images\user.jpeg" />
        </div>
        <h2>Login To Your Account</h2>

    <!-- Yaha tohdi c gadbad hai yaha problem horri bss iska samjh nahi arra ki kesse krenga name print according to regiseter and kon login kra -->
         <?php
        // $sql="Select name FROM users";
        // $result = mysqli_query($conn,$sql);

        // if($result->num_rows>0){
        //     while($rows=$result->fetch_assoc()){
        //   echo '
        // <h3>Welcome '.$rows['name'].'</h3> ';
        //     }}
        ?>
        
        <form  class="login-form" method="POST">
            <div class="textbox">
                <input type="email" placeholder="Username" name="username" />
                <span><i class="fas fa-user user input-icons"></i>
                </span>
            </div>
            <div class="textbox">
                <input type="password" placeholder="Password" name="password"/>
                <span>
                <i class="fas fa-key key input-icons"></i>
                </span>
            </div>
            <button type="submit" name="Login">LOGIN</button>
            <a href="/">Forgot your Credentials? </a>
        </form>
    </div>  
</body>
</html>
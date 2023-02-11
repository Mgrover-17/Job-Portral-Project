<?php
/*
This file contains database configuration assuming you are running mysql using user "root" and password ""
*/

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'login');

// Try connecting to the Database
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//Check the connection
if($conn == false){
    dir('Error: Cannot connect');
}


//     $name=$_POST['name'];
//     $email=$_POST['email'];
//     $Phone_Number=$_POST['contact'];
//     $password=$_POST['password'];



// if($conn->connect_error){
//     die("Connection Failed : " .$conn->connect_error);
// }

// // else{
// //     $stmt = $conn->prepare("insert into users (Name, Email, Phone_Number, Password) values(?,?,?,?)" );
// //     $stmt->bind_param("ssis",$name,$email,$Phone_Number,$password);
// //     $stmt->execute();
// //     echo "Registered Succesfully..";
// //     $stmt->close();
// //     $conn->close();
// // }


// if(isset($_POST['submit'])){
//     $name=$_POST['name'];
//     $email=$_POST['email'];
//     $Phone_Number=$_POST['contact'];
//     $password=$_POST['password'];

//     $sql= "INSERT INTO `users`(`Name`, `Email`, `Phone_Number`, `Password`)VALUES ($name,$email,$Phone_Number,$password)";

//     if(mysqi_query($conn, $sql)){
//         echo "Records Inserted Successfully.";
//     }
//     else{
//         echo "ERROR: Couldn't able to execute $sql." .mysqli_error($conn);
//     }
// }

// session_start();
// if(isset($_POST['Login'])){
//     $email=$_POST['email'];
//     $password=$_POST['password'];

//     $query="SELECT * FROM users WHERE `email` = '$email' AND `password` ='$password'";

//     $result = mysqli_query($conn,$query);
//     $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

//     if(mysqli_num_row($result)==1){
//         header("location:index.php"); 
//     }
//     else{
//         $error='Enter Valid Email or Passoword';
//     }
// }
// mysqli_close($conn);
?>


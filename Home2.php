<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">

    <title>Job Portral | Home </title>
    <link rel="stylesheet" href="StyleSheets\Home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
 <header>
   <nav>
   <div class="navbar">
     <div class="logo">
      <img src="images\JobLogo.png" alt="Job Logo">
     </div>
     <ul class="menu">
        <li><a href="Home2.php">Home</a></li>
        <li><a href="career.php">Jobs</a></li>
         <li><a href="#">Services</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>

      <div class="search-box">
        <input type="text" placeholder="Search here...">
        <a href="#"><i class="fas fa-search"></i></a>
      </div>

      <!-- Loged in User -->
        <?php 
        session_start();
        echo "Welcome ".$_SESSION['username']; 
           ?> 
           <div class="avatar" style="border-radius:50%;background:linera-gradient(-45deg,#157,#c7a1ff);width:6%;">
                <img src="images\user.jpeg"style="padding:0;width:100%;border-radius:30%;border:4px solid #161616;" />
            </div> 
      
   </div>
   </nav>

   
   <div class="content ">
     <div class="text-content">
       <div class="text">Welcome To,  </div>
       <div class="name">NM Job Portral</div>
       <div class="job">
         <div class="job">
           <span>Join Us And ,</span>
            <div class="typing-text">
              <span class="one">Make Your Career</span>
              <span class="two">With Us</span>
            </div>
          </div>
       </div>
       <div class="buttons">
   <a href="AboutUs.php"><button>About Us</button></a>
   <a href="index.php"><button>Post Job</button></a>
   <a href="career.php"><button>Apply For Job</button></a>
 </div>
     </div>
    
    <div class="about-img">
            <img src="images\HomeJob.jpg" alt="">
    </div>
   </div>

   <div class="media-icons">
    <a href="#"><i class="fab fa-facebook-f"></i></a>
    <a href="#"><i class="fab fa-twitter"></i></a>
    <a href="#"><i class="fab fa-instagram"></i></a>
    <a href="https://www.linkedin.com/in/naman-malhotra-54205423b/"><i class="fab fa-linkedin-in"></i></a>
    <a href="https://www.linkedin.com/in/manvi-grover-60305623b/"><i class="fab fa-linkedin-in"></i></a>
  </div>

 </header>
</body>
</html>

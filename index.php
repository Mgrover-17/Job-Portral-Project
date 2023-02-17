<?php include 'header.php';
// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'root');
// define('DB_PASSWORD', '');
// define('DB_NAME', 'login');

// // Try connecting to the Database
// $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
// //Check the connection
// if($conn == false){
//     dir('Error: Cannot connect');
// }
require_once "config.php";
  if(isset($_POST['job'])){
    $cname=$_POST['cname'];
    $position=$_POST['position'];
    $Jdesc=$_POST['Jdesc'];
    $skills=$_POST['skills'];
    $CTC=$_POST['CTC'];
    
$stmt = $conn->prepare("INSERT INTO `jobs`(`cname`, `position`, `Jdesc`, `skills`, `CTC`) VALUES (?,?,?,?,?)");
$stmt->bind_param("sssss",$cname,$position,$Jdesc,$skills,$CTC);
$stmt->execute();
echo "New Job Posted";
}


//$conn->close();

?>
<!-- Page content -->
<div class="content">
<p>
  <!-- <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Link with href
  </a> -->
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Post Job
  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">

  <form action="" method="POST">
  <div class="mb-3">
    <label for="company name" class="form-label">Company Name</label>
    <input type="text" class="form-control" id="" name="cname">
  </div>
  <div class="mb-3">
    <label for="exampleInputPosition" class="form-label">Position</label>
    <input type="text" class="form-control" id="exampleInputPosition" name="position">
  </div>
  <div class="mb-3">
    <label for="JobDesc" class="form-label">Job Description</label>
    <input type="text" class="form-control" id="JobDesc" name="Jdesc">
  </div>
  <div class="mb-3">
    <label for="skills" class="form-label">Skills</label>
    <input type="text" class="form-control" id="skills" name="skills">
  </div>
  <div class="mb-3">
    <label for="CTC" class="form-label">CTC</label>
    <input type="text" class="form-control" id="CTC" name="CTC">
  </div>
  <button type="submit" class="btn btn-primary" name="job">Submit</button>
</form>
  </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Company Name</th>
      <th scope="col">Position</th>
      <th scope="col">CTC</th>
    </tr>
  </thead>
  <!-- <tbody>
    <tr>
      <th scope="row">1</th>
      <td>TCS</td>
      <td>Software Developer</td>
      <td>8LPA</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Google</td>
      <td>Digital Marketing</td>
      <td>12LPA</td>
    </tr>
  </tbody> -->
  <?php 
        $sql="Select cname,position,CTC FROM jobs";
        $result = mysqli_query($conn,$sql);
        $i=0;
        if($result->num_rows>0){
          // Outputing data of each row
          while($rows=$result->fetch_assoc()){
        echo "
        <tbody>
            <tr>
              <td>".++$i."</td>
              <td>".$rows['cname']."</td>
              <td>".$rows['position']."</td>
              <td>".$rows['CTC']."</td>
            </tr>";
            }}
        else{
          echo"";}?>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>
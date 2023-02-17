<?php include 'header.php';
?>

<div class ="content">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Candidate Name</th>
      <th scope="col">Position</th>
      <th scope="col">Year Passout</th>
      <th scope="col">Resume</th>
    </tr>
  </thead>
  <tbody>
    <!-- <tr>
      <th scope="row">1</th>
      <td>Naman Malhotra</td>
      <td>Software Developer</td>
      <td><a href=""><i class="fas fa-regular fa-download mx-3" ></i></a><td>
    </tr> -->

    <?php 
    require_once "config.php";
    $sql="SELECT `Name`, qualification, applyfor, Year_passout, Applied_On FROM jobapplicants";
    $result=mysqli_query($conn,$sql);
    $i=0;
    if($result->num_rows>0){
      while($rows=$result->fetch_assoc()){
        echo'
        <tr>
        <th scope="row">'.++$i.'</th>
        <td>'.$rows['Name'].'</td>
      <td>'.$rows['applyfor'].'</td>
      <td>'.$rows['Year_passout'].'</td>
      <td><a href=""><i class="fas fa-regular fa-download mx-3" ></i></a><td>
        ';          }}
    ?>

  </tbody>
</table>

</div>
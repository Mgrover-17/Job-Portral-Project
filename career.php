
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Career</title>
    <link rel="stylesheet" href="StyleSheets\career.css"/>
</head>
<body>
<div>
  <img  alt="" width="1530" height="350">
  <div class="top-left">
    <h1> Jobs Portral</h1>
    <h4>Best Jobs available matching your skills</h4>
  </div>

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Details Needed</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Name:</label>
            <input type="text" class="form-control"  name="Name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Applying For:</label>
            <textarea class="form-control" name="applyfor"></textarea>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Qualification:</label>
            <input class="form-control" name="qualification" ></input>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Year Passout:</label>
            <input class="form-control" name="Year_passout" ></input>
          </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="apply">Apply</button>
        </form>
      </div>
    </div>
  </div>
</div> 

  <div class="row " style="padding:2vh;">
  <?php 
        require_once "config.php";
        $sql="SELECT cname,position,Jdesc,skills,CTC FROM jobs";
        $result=mysqli_query($conn,$sql);
        if($result->num_rows>0){
          while($rows=$result->fetch_assoc()){
            echo'
            <div class="col-sm-3" >
            <div class = "card ">
            <div class="card-body " >
            <h5 class="card-title">'.$rows['position'].'</h5>
            <h6 class="card-subtitle text-muted">'.$rows['cname'].'</h6>
            <p class="card-text">'.$rows['Jdesc'].'</p>
            <h6><b>Skills Required :</b>'.$rows['skills'].'</h6>
            <h6><b>CTC : </b>'.$rows['CTC'].'</h6>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Apply Now</button>
            </div>
            </div>
            </div>';          }}
          // Apllying for Job
          if(isset($_POST['apply'])){
            $Name=$_POST['Name'];
            $qualification=$_POST['qualification'];
            $applyfor = $_POST['applyfor'];
            $Year_passout=$_POST['Year_passout'];
            
            $stmt = $conn->prepare("INSERT INTO `jobapplicants`(`Name`, `qualification`,`applyfor`, `Year_passout`) VALUES (?,?,?,?)");
            $stmt->bind_param("ssss",$Name,$qualification,$applyfor,$Year_passout);
            $stmt->execute();
            
            // $stmt = "INSERT INTO `jobapplicants`(`Name`, `qualification`, `applyfor`, `Year_passout`) VALUES ('$Name',$qualification','$applyfor','$Year_passout')"
            // mysqli_query($conn,$stmt);
            echo '<script type="text/javascript">
            window.onload = function () { alert("You Successfully applied for job"); } 
            </script>';
          }
          ?>        
</div>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
          

  
</div>
</body>
</html>
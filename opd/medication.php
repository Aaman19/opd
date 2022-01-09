<!doctype html>
<html lang="en">
  <head>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <title>patient profile</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a href="dashboard.php" style="margin-right: 20px;"><button type="button" class="btn btn-primary"><i class="fas fa-arrow-left"></i></button></a>
    <a class="navbar-brand" href="#">My OPD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">
            <?php

            session_start();

            if(isset($_SESSION["user_name"]) && $_SESSION["user_name"]!=""){
              echo ("Dr ".$_SESSION["user_name"]);
              $d_id = $_SESSION["d_id"];
            } else {
              
              header ("Location: doctor_login.php");  
            }
            ?>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      

      <form action="logout.php" class="form-inline">
      <button type="submit" class="btn btn-primary"  style="margin-left: 10px;">LogOut <i class="fas fa-sign-out-alt"></i></button>
      </form>
    </div>
  </div>
</nav>

<?php
if(isset($_REQUEST["msg"]) && $_REQUEST["msg"]!=""){  
    echo $_REQUEST["msg"];   
}

$id = $_GET['id'];
$d_id = $_GET['d_id'];
$opd_id = $_GET['opd_id'];
require ("function.php");
$con = dbConnect();
$query = "SELECT * FROM Patient_info WHERE p_id = '$id'" ;
$query_run = mysqli_query($con,$query);
$row = mysqli_fetch_array($query_run);

?>

<div class="card" style="width: 80%; margin: auto;margin-top: 20px;" >
  <div style="border: solid;padding: 10px; border-radius: 5px;">
    <div class="row g-3">
      <div class="col-md-4">
        <h5><span>Name : <?php echo $row['p_name'];?></span></h5>
      </div>
      <div class="col-md-4">
        <h5 class="card-title">Age : <?php echo date("Y") - date('Y', strtotime($row['p_DOB']));?> (<?php echo $row['p_gender'];?>)</h5>
      </div>
      <div class="col-md-4">
        <h5><span>Blood Group : <?php echo $row['p_blood_group'];?></span></h5>
      </div>
    </div>
    <div class="row g-3">
      <div class="col-md-4">
        <h5><span>ID : <?php echo $row['p_id'];?></span></h5>
      </div>
      <div class="col-md-4">
        <h5><span>Contact : <?php echo $row['p_contact'];?></span></h5>
      </div>
      <div class="col-md-4">
        <h5><span>Occupation : <?php echo $row['p_occupation'];?></span></h5>
      </div>
    </div>
    <div class="row g-3">
      <div class="col-md-6">
        <h5><span>Address : <?php echo $row['p_address'];?></span></h5>
      </div>
    </div>
   </div>    
  </div>
</div>
<?php 
$query2 = "SELECT * FROM doctor_info WHERE d_id = '$d_id'" ;
$query_run2 = mysqli_query($con,$query2);
$row2 = mysqli_fetch_array($query_run2);

$query3 = "SELECT * FROM diagnose WHERE opd_id = '$opd_id'" ;
$query_run3 = mysqli_query($con,$query3);
$row3 = mysqli_fetch_array($query_run3);
$timestamp = $row3['diagnosis_date'];
$doc_id = $row3['d_id'];

?>

<div class="card" style="width: 80%; margin: auto;margin-top: 20px;">
  <div class="card-header">
    <h5>Diagnosis Report</h5>
  </div>
  <div style="margin : 10px;">
    <div class="row g-3">
      <div class="col-md-4">
        <h5><span>Diagnose ID : <?php echo $row3['opd_id'];?></span></h5>
      </div>
      <div class="col-md-4">
        <h5><span>Doctor : <?php echo $row2['d_name'];?></span></h5>
      </div>
      <div class="col-md-4">
        <h5><span>Diagnosis Date : <?php echo $row3['diagnosis_date'];?></span></h5>
      </div>
    </div><hr>
    <div class="row g-3">
      <div class="col-md-4">
        <h6><span>Complaints</span></h6>
        <p><span><?php echo $row3['complaints'];?></span></p>
      </div>
      <div class="col-md-4">
        <h6><span>Past Patient Details</span></h6>
        <p><span><?php echo $row3['past_patient_details'];?></span></p>
      </div>
      <div class="col-md-4">
        <h6><span>Investigations</span></h6>
        <p><span><?php echo $row3['investigations'];?></span></p>
      </div>
    </div>
    <div class="row g-3">
      <div class="col-md-4">
        <h6><span>Findings</span></h6>
        <p><span><?php echo $row3['findings'];?></span></p>
      </div>
      <div class="col-md-4">
        <h6><span>Final Diagnostics</span></h6>
        <p><span><?php echo $row3['final_diagnostics']; ?></span></p>
      </div>
      <div class="col-md-4">
        <h6><span>Remarks</span></h6>
        <p><span><?php echo $row3['remarks']; ?></span></p>
      </div>
    </div>
  </div>
</div>

<div class="container" style="width: 81%; margin: auto;margin-top: 5px;">
  <div class="row">
    <div class="col-md-12 mt-4">
      <div class="card">
        <div class="card-header">
          <h5>Medicine Prescription</h5>
        </div>
          <div class="table-responsive">
            <table class="table table-bodererd">
              <thead>
                <tr>
                  <th scope="col">Medicine</th>
                  <th scope="col">Company</th>
                  <th scope="col">Morning</th>
                  <th scope="col">Afternoon</th>
                  <th scope="col">Evening</th>
                  <th scope="col">Remark</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $query4 = "SELECT * FROM medication WHERE p_id = '$id' AND d_id = '$doc_id' AND date= '$timestamp' " ;
                $query_run4 = mysqli_query($con,$query4);
                if(mysqli_num_rows($query_run4) > 0){
                 while ($row4 = mysqli_fetch_array($query_run4)){
                ?>
                <tr>
                  <td><?php echo $row4['medicine']; ?></td>
                  <td><?php echo $row4['company']; ?></td>
                  <td><?php echo $row4['M'] ?></td>
                  <td><?php echo $row4['A']; ?></td>
                  <td><?php echo $row4['N']; ?></td>
                  <td><?php echo $row4['Remark']; ?></td>
                </tr>
                <?php
                  }

                }else{
                ?>
                  <tr>
                    <td colspan="6">
                      No data Available
                    </td>
                  </tr>
                <?php
                  }
                ?>
              </tbody>
            </table>
            <form action="logo.php" class="form-inline">
            <button type="submit" class="btn btn-primary"  style="margin-left: 10px;">Print <i class="fa fa-print" aria-hidden="true"></i></button>
            </form>
          </div>
       
        </div>
      </div>
    </div>
  </div>
</div>


</body>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

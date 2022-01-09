<!-- <?php
echo $_POST['p_id'];
echo "         ";
echo $_POST['d_id'];
?> -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <!-- <?php  
             if(isset($_REQUEST["msg2"]) && $_REQUEST["msg2"]!=""){ 
               echo '<script>alert("patient details added to database")</script>'; 
               $_REQUEST["msg2"] = "";
           }
    ?>  -->
    <!-- medicine -->
    <script>  
 $(document).ready(function(){  
      var i=1;  
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'"><td><div class="input-group input-group-sm mb-3"><input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name= "medicine[]"></div></td><td><div class="input-group input-group-sm mb-3"><input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="company[]"></div></td><td><table><tr><td><div class="input-group input-group-sm mb-3"><span class="input-group-text" id="inputGroup-sizing-sm">M</span><input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="m[]"></div></td><td><div class="input-group input-group-sm mb-3"><span class="input-group-text" id="inputGroup-sizing-sm">A</span><input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="a[]"></div></td><td><div class="input-group input-group-sm mb-3"><span class="input-group-text" id="inputGroup-sizing-sm">N</span><input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="n[]"></div></td></tr></table></td><td><div class="input-group input-group-sm mb-3"><input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="remark[]"></div></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
      // $('#submit').click(function(){            
      //      $.ajax({  
      //           url:"action.php",  
      //           method:"POST",  
      //           data:$('#add_name').serialize(),  
      //           success:function(data)  
      //           {  
      //                alert(data);  
      //                $('#add_name')[0].reset();  
      //           }  
      //      });  
      // });  
 });  
 </script>

    <title>diagnose</title>
  </head>
  <body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
  	<a href="patient profile.php" style="margin-right: 20px;"><button type="button" class="btn btn-primary"><i class="fas fa-arrow-left"></i></button></a>
    <a class="navbar-brand" href="#">My OPD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">
            <!-- <?php

            session_start();

            if(isset($_SESSION["user_name"]) && $_SESSION["user_name"]!=""){
              echo ("Dr ".$_SESSION["user_name"]);
            } else {
              
              header ("Location: doctor_login.php");  
            }
            ?> -->
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

<div style="width: 80%; margin: auto;margin-top: 20px;">
	<div style="border: solid;padding: 10px; border-radius: 5px;">
		<?php
		$id = $_POST['p_id'];
		require ("function.php");
		$con = dbConnect();
		$query = "SELECT * FROM Patient_info WHERE p_id = '$id'" ;
		$query_run = mysqli_query($con,$query);
		$row = mysqli_fetch_array($query_run);
		?>
		<div class="row gx-3 gy-2 align-items-center">
			  <div class="col-sm-2">
			    <h5><span>ID : <?php echo $id; ?></span></h5>
			  </div>
			  <div class="col-sm-4">
			    <h5><span>name : <?php echo $row['p_name'];?></span></h5>
			  </div>
			  <div class="col-sm-2">
			    <h5><span>Age : <?php echo date("Y") - date('Y', strtotime($row['p_DOB']));?> (<?php echo $row['p_gender'];?>)</span></h5>
			  </div>
			  <div class="col-auto">
			    <h5><span>Date : <?php echo date("d/m/Y"); ?></span></h5>
			  </div>
			  <div class="col-auto">
			    <h5><span>Contact : <?php echo $row['p_contact'];?></span></h5>
			  </div>
			  
		</div>
	</div><br>
	
	<form class="row g-3" name="add_name" id="add_name" method="post" action="action.php">
	  <div class="col-md-4">
	    <label for="validationDefault01" class="form-label">Complaints</label>
	    <textarea type="text" class="form-control" id="validationDefault01" name="complaints" required ></textarea> 
	  </div>

	  <div class="col-md-4">
	    <label for="validationDefault02" class="form-label">Past Patient Details</label>
	    <textarea type="text" class="form-control" id="validationDefault02" name="past_patient_details" required></textarea>
	  </div>

	  <div class="col-md-4">
	    <label for="validationDefault03" class="form-label">Investigations</label>
	    <textarea type="text" class="form-control" id="validationDefault02" name="investigations" required></textarea>
	  </div>

	  <div class="col-md-4">
	    <label for="validationDefault01" class="form-label">Findings</label>
	    <textarea type="text" class="form-control" id="validationDefault01" name="findings" required ></textarea> 
	  </div>

	  <div class="col-md-4">
	    <label for="validationDefault02" class="form-label">Final Diagnostics</label>
	    <textarea type="text" class="form-control" id="validationDefault02" name="final_diagnostics" required></textarea>
	  </div>

	  <div class="col-md-4">
	    <label for="validationDefault03" class="form-label">Remarks</label>
	    <textarea type="text" class="form-control" id="validationDefault02" name="remarks" required></textarea>
	  </div>
    <input type="hidden" name="p_id" value="<?php echo $id; ?>">
    <input type="hidden" name="d_id" value="<?php echo $_POST['d_id']; ?>">
	  <br>

  <div class="container">  
                <br />  
                <br />  
                
                <div class="form-group">  
                       
                          <div class="table-responsive">  
                               <table class="table table-bordered" id="dynamic_field">  
                                    <tr>
                                        <th>Medicine</th>
                                        <th>Company</th>
                                        <th>Dosage</th>
                                        <th>Remark</th>
                                        <th>ADD</th>
                                      </tr>
                                      
                                   <tr>
                                   <td>
                                     <div class="input-group input-group-sm mb-3">
                                       <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name= "medicine[]">
                                     </div>
                                   </td>
                                   <td>
                                     <div class="input-group input-group-sm mb-3">
                                       <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="company[]">
                                     </div>
                                   </td>
                                   <td>
                                     <table>
                                       <tr>
                                         <td>
                                           <div class="input-group input-group-sm mb-3">
                                             <span class="input-group-text" id="inputGroup-sizing-sm">M</span>
                                             <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="m[]">
                                           </div>
                                         </td>
                                         <td>
                                           <div class="input-group input-group-sm mb-3">
                                             <span class="input-group-text" id="inputGroup-sizing-sm">A</span>
                                             <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="a[]">
                                           </div>
                                         </td>
                                         <td>
                                           <div class="input-group input-group-sm mb-3">
                                             <span class="input-group-text" id="inputGroup-sizing-sm">N</span>
                                             <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="n[]">
                                           </div>
                                         </td>
                                       </tr>
                                     </table>  
                                   </td>
                                   <td>
                                     <div class="input-group input-group-sm mb-3">
                                       <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="remark[]">
                                     </div>
                                   </td>
                                   <td> 
                                     <input type="button" class="btn btn-success" name="add" id="add" value="Add">
                                   </td>  
                                    </tr>  
                               </table>  
                               <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Submit" />  
                          </div>  
                     </form>  
                </div>  
           </div>  


<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
    <!-- modal script -->
    
    
  </body>
</html>
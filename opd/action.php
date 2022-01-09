<?php 

require ("function.php");
$conn = dbConnect();

// if ($conn) {
// 	echo "sucess";
// }
$p_id = $_POST["p_id"];
$d_id = $_POST["d_id"];
$complaints = $_POST["complaints"];
$past_patient_details = $_POST["past_patient_details"];
$investigations = $_POST["investigations"];
$findings = $_POST["findings"];
$final_diagnostics = $_POST["final_diagnostics"];
$remarks = $_POST["remarks"];

$sql = "INSERT INTO `diagnose` (  `p_id`, `d_id`, `complaints`, `past_patient_details`, `investigations`, `findings`, `final_diagnostics`, `remarks` ) VALUES (  '$p_id', '$d_id', '$complaints', '$past_patient_details', '$investigations', '$findings', '$final_diagnostics', '$remarks')";

if(mysqli_query($conn,$sql)){
	echo "success";
}else{
	echo " fail";
}

if (isset($_POST['submit'])){
	$medicine = $_POST['medicine'];
	$company = $_POST['company'];
	$m = $_POST['m'];
	$a = $_POST['a'];
	$n = $_POST['n'];
	$remark = $_POST['remark']; 

	foreach ($medicine as $key => $value) {
		$save = "INSERT INTO medication(p_id, d_id, medicine, company, M, A, N, remark) VALUES('".$p_id."','".$d_id."','".$value."','".$company[$key]."','".$m[$key]."','".$a[$key]."','".$n[$key]."','".$remark[$key]."')";
		$query = mysqli_query($conn, $save);
	}
}
//header ("Location: patient profile.php? msg2=success ");
header('Location: patient profile.php?id='.$p_id);
?>
<?php include ('header.php'); ?>
<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
	$c_id = $_POST['c_id'];
	$c_name = mysqli_real_escape_string($con,$_POST['c_name']);
	$c_contact = mysqli_real_escape_string($con,$_POST['c_contact']);
	$c_email = mysqli_real_escape_string($con,$_POST['c_email']);
	$c_age = mysqli_real_escape_string($con,$_POST['c_age']);
	$c_gender = mysqli_real_escape_string($con,$_POST['gender']);
	$c_business = mysqli_real_escape_string($con,$_POST['c_business']);
	$c_type = mysqli_real_escape_string($con,$_POST['c_type']);
	$c_region = mysqli_real_escape_string($con,$_POST['c_region']);
	$c_plan = mysqli_real_escape_string($con,$_POST['c_plan']);
	$sql = mysqli_query($con,"UPDATE customer set c_name='$c_name',c_contact='$c_contact',c_email='$c_email',c_age='$c_age',c_gender='$c_gender',c_business='$c_business',c_type='$c_type',c_region='$c_region',c_plan='$c_plan' WHERE c_id = '$c_id'");
	if($sql){
		header("location:edit_customer.php");
	}else{
		header("location:edit_customer.php");
	}
	
}
?>
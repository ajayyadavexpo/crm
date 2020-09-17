<?php
require("connect.php");
session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){
  	$email = mysqli_real_escape_string($con,$_POST['email']);
  	$password = mysqli_real_escape_string($con,$_POST['password']);

  	$sql = "select * from admin where email='$email' && password='$password'";
  	$result = $con -> query($sql);
  	if ($result -> num_rows) {
	    $_SESSION['email'] = $email;
	  	$result -> free_result();
	    header("location:pages/home.php");
	}else{
		echo 'Try Again';
	}
}

?>
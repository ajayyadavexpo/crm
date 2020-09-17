<?php include ('header.php'); ?>
<?php
$id = $_GET['id'];
$sql = mysqli_query($con,"DELETE FROM employee where e_id = '$id'");
if($sql){
	header("location:deleteemp.php");
}else{
	echo "Something Wrong...".mysqli_error($con);
}

?>

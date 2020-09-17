<?php include ('header.php'); ?>
<?php
$id = $_GET['id'];
$sql = mysqli_query($con,"DELETE FROM plan where p_id = '$id'");
if($sql){
	header("location:plan_delete.php");
}else{
	echo "Something Wrong...".mysqli_error($con);
}

?>

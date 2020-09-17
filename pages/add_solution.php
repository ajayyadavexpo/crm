<?php
require("connect.php");
session_start();
if($_SESSION['name']){

}else{
	header("index.php");
}
$id = $_POST['id'];


$solution = $_POST['solution'];
echo $id. $solution;

$sql = mysqli_query($con,"UPDATE complaint set com_solution = '$solution' where customer_id = '$id'");
if($sql){
	header("location:view_complaint.php");
}else{
	header("location:view_complaint.php");
}
?>
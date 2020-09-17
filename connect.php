<?php

$con = new mysqli("localhost","root","","crm");
$url = 'http://localhost/new-crm';
if(!$con){
	die("Error".mysqli_error($con));
}
?>

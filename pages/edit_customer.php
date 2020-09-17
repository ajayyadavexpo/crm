<?php include ('header.php'); ?>
<?php include ('../includes/app.php');?>

<div class="row justify-content-center">
	<div class="col-sm-9  pb-4">
		<h3 class="text-center">Edit Customer</h3>
		<table class="table table-bordered table-hover text-center table-responsive">
			<thead class="thead-dark">
				<th>ID</th>
				<th>Name</th>
				<th>Cotact</th>
				<th>Age</th>
				<th>Gender</th>
				<th>Business</th>
				<th>Type</th>
				<th>Region</th>
				<th>Plan</th>
				<th>Edit</th>
			</thead>
			<tbody>
				<?php
				$sql = mysqli_query($con,"SELECT * FROM customer");
				while($row = mysqli_fetch_array($sql)){
					echo '
						<tr>
						  <td>'.$row['c_id'].'</td>
						  <td>'.$row['c_name'].'</td>
						  <td>'.$row['c_contact'].'</td>
						  <td>'.$row['c_age'].'</td>
						  <td>'.$row['c_gender'].'</td>
						  <td>'.$row['c_business'].'</td>
						  <td>'.$row['c_type'].'</td>
						  <td>'.$row['c_region'].'</td>
						  <td>'.$row['c_plan'].'</td>
						  <td><a href="edit_c.php?id='.$row['c_id'].'">Edit</a></td>
						</tr>
					';
				}
				?>
			</tbody>
		</table>
	</div>
</div>
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	$c_name = mysqli_real_escape_string($con,$_POST['c_name']);
	$c_contact = mysqli_real_escape_string($con,$_POST['c_contact']);
	$c_email = mysqli_real_escape_string($con,$_POST['c_email']);
	$c_age = mysqli_real_escape_string($con,$_POST['c_age']);
	$gender = $_POST['gender'];
	$business = $_POST['c_business'];
	$type = $_POST['c_type'];
	$c_region = mysqli_real_escape_string($con,$_POST['c_region']);
	$sql = mysqli_query($con,"INSERT INTO customer(c_name,c_contact,c_email,c_age,c_gender,c_business,c_type,c_plan)
		VALUES('$c_name','$c_contact','$c_email','$c_age','$gender','$business','$type','$c_region')");
	if($sql){
		echo "<h3 style='color:green;'>Customer Addedc.</h3>";
	}else{
		echo "<h3 style='color:red;'>Failed !!..</h3>";
	}
	
}
?>
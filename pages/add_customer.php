<?php include ('header.php'); ?>
<?php include ('../includes/app.php');?>
<div class="row justify-content-center">
	<div class="col-sm-9  pb-4">
		<h3 class="text-center">Add Customer</h3>
		<form method="POST">
			<div class="form-group">
				<label for="c_name"></label>
				<input type="text" name="c_name" required="" placeholder="Enter Customer Name" class="form-control">
			</div>
			<div class="form-group">
				<label for="c_contact"></label>
				<input type="text" name="c_contact" required="" placeholder="Enter Contact " class="form-control">
			</div>
			<div class="form-group">
				<label for="c_email"></label>
				<input type="text" name="c_email" required="" placeholder="Enter Email Id" class="form-control">
			</div>
			<div class="form-group">
				<label for="c_age"></label>
				<input type="date" name="c_age" required="" placeholder="Enter Date of Birth" class="form-control">
			</div>
			<div class="form-group">
				<select name="gender" class="form-control">
					<option value="Male">Male</option>
					<option value="Female">Female</option>
				</select>
			</div>
			<div class="form-group">
				<select name="c_business" class="form-control" required="">
					<option>Select Business</option>
					<option value="No">No</option>
					<option value="Yes">Yes</option>
				</select>
			</div>
			<div class="form-group">
				<select name="c_type" class="form-control">
					<option>Business Type</option>
					<option value="no">No Business</option>
					<option value="small">Small</option>
					<option value="Medium">Medium</option>
					<option value="Large">Large</option>
				</select>
			</div>
			<div class="form-group">
				<input type="text" name="c_region" class="form-control" placeholder="Region" required="">
			</div>
			<div class="form-group">
				<select name="c_plan" class="form-control">
					<option>Select Plan</option>
					<option value="Fast Speed internet">Fast Speed Internet</option>
					<option value="ultra 600">Ultra 600</option>
					<option value="Turbo 1mbp SME">Turbo 1mbp SME</option>
				</select>
			</div>
			<button type="submit" class="btn btn-dark">Add Customer</button>
		</form>
	</div>
</div>
<?php include('../includes/footer.php'); ?>
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
	$c_plan = $_POST['c_plan'];
	$sql = mysqli_query($con,"INSERT INTO customer(c_name,c_contact,c_email,c_age,c_gender,c_business,c_type,c_region,c_plan)
		VALUES('$c_name','$c_contact','$c_email','$c_age','$gender','$business','$type','$c_region','$c_plan')");
	if($sql){
		echo "<h3 style='color:green;'>Customer Added..</h3>";
	}else{
		echo "<h3 style='color:red;'>Failed !!..</h3>";
	}
	
}
?>
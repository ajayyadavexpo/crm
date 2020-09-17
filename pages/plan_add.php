<?php include ('header.php'); ?>
<?php include ('../includes/app.php');?>
<div class="row justify-content-center">
	<div class="col-sm-9  pb-4">
		<h3 class="text-center">Create Plan</h3>
		<form method="POST">
			<div class="form-group">
				<label for="p_name"></label>
				<input type="text" name="p_name" required="" placeholder="Enter Plan Name" class="form-control">
			</div>
			<div class="form-group">
				<label for="p_speed"></label>
				<input type="text" name="p_speed" required="" placeholder="Enter Speed Limits" class="form-control">
			</div>
			<div class="form-group">
				<label for="p_cost"></label>
				<input type="text" name="p_cost" required="" placeholder="Enter Cost" class="form-control">
			</div>
			<div class="form-group">
				<label for="p_duration"></label>
				<input type="text" name="p_duration" required="" placeholder="Enter Duration in Days" class="form-control">
			</div>
			<button type="submit" class="btn btn-dark">Create</button>
		</form>
	</div>
		
</div>
<?php include('../includes/footer.php'); ?>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$p_name = mysqli_real_escape_string($con,$_POST['p_name']);
	$p_speed = mysqli_real_escape_string($con,$_POST['p_speed']);
	$p_cost = mysqli_real_escape_string($con,$_POST['p_cost']);
	$p_duration = mysqli_real_escape_string($con,$_POST['p_duration']);
	$sql = mysqli_query($con,"INSERT INTO plan(p_name,p_speed,p_cost,p_duration)VALUES('$p_name','$p_speed','$p_cost','$p_duration')");
	if($sql){
		echo "<h2 style='margin:3% 0% 0% 15%;color:green;'>Plan Successfully Added...</h2>";
	}else{
		echo "Error: ".mysqli_error($con);
		echo "<script type='text/javascript'>alert('Something Wrong');</script>";
	}
}

?>
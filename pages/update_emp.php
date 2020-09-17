<?php include ('header.php'); ?>
<?php include ('../includes/app.php');?>
<div class="row justify-content-center">
	<div class="col-sm-9  pb-4">
		<h3 class="text-center">Edit Employee</h3>
				<?php
				$id = $_GET['id'];
				$sql = mysqli_query($con,"SELECT * FROM employee where e_id = '$id'");
				$row = mysqli_fetch_array($sql);			
				?>
		<form method="POST">
			<div class="form-group">
				<label for="e_name"></label>
				<input type="text" name="e_name" required="" class="form-control" value="<?php echo $row['e_name'] ?>">
			</div>
			<div class="form-group">
				<label for="e_contact"></label>
				<input type="text" name="e_contact" required="" class="form-control" value="<?php echo $row['e_contact'] ?>">
			</div>
			<div class="form-group">
				<label for="e_email"></label>
				<input type="email" name="email" required="" class="form-control" value="<?php echo $row['e_mail'] ?>">
			</div>
			<div class="form-group">
				<label for="e_region"></label>
				<input type="text" name="e_region" required="" class="form-control" value="<?php echo $row['e_region'] ?>">
			</div>
			<button type="submit" class="btn btn-dark">UPDATE</button>
		</form>
	</div>
</div>

<?php include('../includes/footer.php');?>

<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
	$e_name = mysqli_real_escape_string($con,$_POST['e_name']);
	$e_contact = mysqli_real_escape_string($con,$_POST['e_contact']);
	$email = mysqli_real_escape_string($con,$_POST['email']);
	$e_region = mysqli_real_escape_string($con,$_POST['e_region']);
	$sql = mysqli_query($con,"
		UPDATE employee SET e_name='$e_name',e_contact = '$e_contact',e_mail = '$email',e_region = '$e_region' where e_id = '$id'");
	if($sql){
		header("location:editemp.php");
	}else{
		echo "Something Wrong".mysqli_error($con);
	}
}



?>
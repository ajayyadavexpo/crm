<?php include ('header.php'); ?>
<?php include ('../includes/app.php');?>
<div class="row justify-content-center">
	<div class="col-sm-9  pb-4">
		<h3 class="text-center">Edit Plan</h3>
				<?php
				$id = $_GET['id'];
				$sql = mysqli_query($con,"SELECT * FROM plan where p_id = '$id'");
				$row = mysqli_fetch_array($sql);			
				?>
		<form method="POST">
			<div class="form-group">
				<label for="p_name"></label>
				<input type="text" name="p_name" required="" class="form-control" value="<?php echo $row['p_name'] ?>">
			</div>
			<div class="form-group">
				<label for="p_speed"></label>
				<input type="text" name="p_speed" required="" class="form-control" value="<?php echo $row['p_speed'] ?>">
			</div>
			<div class="form-group">
				<label for="e_email"></label>
				<input type="text" name="p_cost" required="" class="form-control" value="<?php echo $row['p_cost'] ?>">
			</div>
			<div class="form-group">
				<label for="p_duration"></label>
				<input type="text" name="p_duration" required="" class="form-control" value="<?php echo $row['p_duration'] ?>">
			</div>
			<button type="submit" class="btn btn-dark">UPDATE</button>
		</form>
	</div>
</div>

<?php include('../includes/footer.php');?>

<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
	$p_name = mysqli_real_escape_string($con,$_POST['p_name']);
	$p_speed = mysqli_real_escape_string($con,$_POST['p_speed']);
	$p_cost = mysqli_real_escape_string($con,$_POST['p_cost']);
	$p_duration = mysqli_real_escape_string($con,$_POST['p_duration']);
	$sql = mysqli_query($con,"
		UPDATE plan SET p_name='$p_name',p_speed = '$p_speed',p_cost = '$p_cost',p_duration = '$p_duration' where p_id = '$id'");
	if($sql){
		echo 'hi';
		echo '<script>window.location.redirect("/plan_edit.php");</script>';
	}else{
		echo "Something Wrong".mysqli_error($con);
	}
}
?>
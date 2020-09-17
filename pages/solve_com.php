<<?php include ('header.php'); ?>
<?php include ('../includes/app.php');?>
<div class="row justify-content-center">
	<div class="col-sm-9  pb-4">
		<h3 class="text-center">Solution !!!</h3>
				<?php
				$id = $_GET['id'];
				$sql = mysqli_query($con,"SELECT complaint  FROM complaint WHERE customer_id = '$id'");
				$row = mysqli_num_rows($sql);
				while($row = mysqli_fetch_array($sql)){
					?>
		<form method="post" action="add_solution.php">
			<div class="form-group">
				<input type="text" name="id" class="form-control" readonly="" value="<?php echo $id;  ?>">
			</div>
			<div class="form-group">
				<textarea class="form-control" rows="10" name="solution" placeholder="Solution....."></textarea>
			</div>
			<button type="submit" class="btn btn-dark">Add Solution</button>
		</form>
		<?php }; ?>
	</div>
</div>

<?php include('../includes/footer.php');?>




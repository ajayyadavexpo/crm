<?php include ('header.php'); ?>
<?php include ('../includes/app.php');?>
<div class="row justify-content-center">
	<div class="col-sm-9  pb-4">
		<h3 class="text-center">Delete Plan</h3>
		<table class="table table-bordered table-hover text-center">
			<thead class="thead-dark">
				<th>Plan Name</th>
				<th>Plan Speed</th>
				<th>Plan Cost</th>
				<th>Plan Duration</th>
				<th>Action</th>
			</thead>
			<tbody>
				<?php
				$sql = mysqli_query($con,"SELECT * FROM plan");
				while($row = mysqli_fetch_array($sql)){
					echo '
						<tr>
						  <td>'.$row['p_name'].'</td>
						  <td>'.$row['p_speed'].'</td>
						  <td>'.$row['p_cost'].'</td>
						  <td>'.$row['p_duration'].'</td>
						  <td><a href="delete_plan.php?id='.$row['p_id'].'">Delete</a></td>
						</tr>
					';
				}
				?>
			</tbody>
		</table>
	</div>
</div>
<?php include('../includes/footer.php'); ?>
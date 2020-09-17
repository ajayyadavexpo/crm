<?php include ('header.php'); ?>
<?php include ('../includes/app.php');?>
<div class="row justify-content-center">
	<div class="col-sm-9  pb-4">
		<h3 class="text-center">Edit Plan</h3>
		<table class="table table-bordered table-hover">
			<thead class="thead-dark">
				<th>Name</th>
				<th>Speed</th>
				<th>Action</th>
			</thead>
			<tbody>
				<?php
				$sql = mysqli_query($con,'SELECT * from plan');
				$row = mysqli_num_rows($sql);
				while($row = mysqli_fetch_array($sql)){
					echo '
						<tr>
						  <td>'.$row['p_name'].'</td>
						  <td>'.$row['p_speed'].'</td>
						  <td><a href="plan_update.php?id='.$row['p_id'].'">Edit</a></td>
						</tr>
					';
				}
				?>
			</tbody>
		</table>
	</div>
</div>
<?php include('../includes/footer.php');?>





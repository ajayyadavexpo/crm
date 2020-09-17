<?php include ('header.php'); ?>
<?php include ('../includes/app.php');?>
<div class="row justify-content-center">
	<div class="col-sm-9  pb-4">
		<h3 class="text-center">Expairy Dates</h3>
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
				<th>Action</th>
			</thead>
			<tbody>
				<?php
				$sql = mysqli_query($con,"SELECT * FROM customer");
				while($row = mysqli_fetch_array($sql)){
					$x = explode("-",$row['c_age']);
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
						  <td>'.$x[2].'</td>
						</tr>
					';
				}
				?>
			</tbody>
		</table>
	</div>
</div>



<?php include('../includes/footer.php');?>
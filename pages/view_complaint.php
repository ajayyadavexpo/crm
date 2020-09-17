<?php include ('header.php'); ?>
<?php include ('../includes/app.php');?>
<div class="row justify-content-center">
	<div class="col-sm-9  pb-4">
		<h3 class="text-center">View Complaint</h3>
		<table class="table table-bordered table-hover text-center">
			<thead class="thead-dark">
				<th>Customer_ID</th>
				<th>Customer_Name</th>
				<th>Complaint</th>
				<th>Date</th>
				<th>Action</th>
			</thead>
			<tbody>
				<?php
				$sql = mysqli_query($con,'SELECT customer.c_name,complaint.customer_id,complaint.complaint,complaint.com_date,complaint.com_solution FROM complaint	INNER JOIN customer on complaint.customer_id = customer.c_id');
				$row = mysqli_num_rows($sql);
				while($row = mysqli_fetch_array($sql)){
					echo '
						<tr>
						  <td>'.$row['customer_id'].'</td>
						  <td>'.$row['c_name'].'</td>
						  <td>'.$row['complaint'].'</td>
						  <td>'.$row['com_date'].'</td>
						  <td>'.$row['com_solution'].'</td>
						</tr>
					';
				}
				?>
			</tbody>
		</table>
	</div>
</div>
<?php include('../includes/footer.php');?>




<?php
$sql = mysqli_query($con,"SELECT c_region,count(*) AS number from customer GROUP BY c_region");

?>
<html>
<head>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript">
		google.charts.load('current',{'packages' :['corechart']});
		google.charts.setOnLoadCallback(drawChart);
		
		function drawChart(){
			var data = google.visualization.arrayToDataTable([
			['Region', 'Number'],
				<?php 

					while($row = mysqli_fetch_array($sql)){
						echo "['".$row['c_region']."', ".$row['number']."],";
					}		
				?>
			]);
			var options = {
				title:'Employee Report Based on Region',
			};
        var chart = new google.visualization.PieChart(document.getElementById('show'));
			chart.draw(data,options);
		}
	</script>
</head>

<body>
<div id="show" style="width:100%;height:400px;margin:auto;"></div>
</body>
</html>

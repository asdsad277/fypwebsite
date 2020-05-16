<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>

<div class="container" style="position: relative; height:40vh; width:80vw">
	<canvas id="myChart" width="400" height="250" style="border:1px solid"></canvas>

	<?php
		require("Modle/conn.php");
		for($i = 0; $i < 7; $i++){
			$date = date("Y-m-d",strtotime("-" . $i . " days"));
			if ($result = mysqli_query($conn, "SELECT * FROM ticket WHERE ShopID = '". $_GET['SID'] ."' AND Date = '" . $date . "'")) {
				$ticket_day[$i] = mysqli_num_rows($result);		
				mysqli_free_result($result);
			}
		}
		mysqli_close($conn);
	?>

	<script>
		var d = new Date();
		var day = new Array(7);
		day[0] = d.toJSON().slice(0,10).replace(/-/g,'/');
		for(i=1; i<7; i++){
			d.setDate(d.getDate() - 1);
			day[i] = d.toJSON().slice(0,10).replace(/-/g,'/');
		}

		var ctx = document.getElementById('myChart');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: [day[0], day[1], day[2], day[3], day[4], day[5], day[6]],
				datasets: [{
					label: <?php echo $_GET['SID'];?>,
					data: [<?php echo $ticket_day[0] ?>, <?php echo $ticket_day[1] ?>, <?php echo $ticket_day[2] ?>, <?php echo $ticket_day[3] ?>, <?php echo $ticket_day[4] ?>, <?php echo $ticket_day[5] ?>, <?php echo $ticket_day[6] ?>],
					backgroundColor: 'rgba(255, 99, 132, 1)'
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero: true
						}
					}]
				}
			}
		});
	</script>
	
</div>
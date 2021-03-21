@extends('admin_layout')
@section('admin_content')
<div id="container" style="width: 75%;">
		<canvas id="canvas"></canvas>
	</div>
	<script>
		var color = Chart.helpers.color;
		var data_to_plot
		var data_array = []
		var labels_array = []
		var barChartData
		fetch("http://mudos.com/api/products")
		.then(result =>result.json())
		.then(data => {
			data_to_plot = data
			console.log(data_to_plot)
			for(i=0; i<data_to_plot.length; i++){
				data_array[i] = data_to_plot[i]['sold']
				labels_array[i] = data_to_plot[i]['product_name']
			}

			var ctx = document.getElementById('canvas').getContext('2d');
			barChartData = {
			labels: labels_array,
			datasets: [ {
				label: 'Total Quantity Sold',
				backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
				borderColor: window.chartColors.blue,
				borderWidth: 1,
				data:data_array
			}]

		};
			window.myBar = new Chart(ctx, {
				type: 'bar',
				data: barChartData,
				options: {
					responsive: true,
					legend: {
						position: 'top',
					},
					title: {
						display: true,
						text: 'Order statistics'
					}
				}
			});
	});

	</script>
@endsection
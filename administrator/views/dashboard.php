<h1>Dashboard</h1>
<?php
	extract($_GET);
	include("../controller/dashboard_controller.php");
	$control= new dashboard_controller();
    //$listaUser=$control->ResultTotal();
?>
<section class="detalleResultados">
	<div class="grupoResult centrado valorVerde">
		<h2><?php echo "230";?></h2>
		<p>Total atractivos turisticos</p>
	</div>
	<div class="grupoResult">
		<label >Encuestas por provincias: </label>
	</div>
</section>
<section class="boxCharts">
	<div class="itemBox">
		<canvas id="myChart" ></canvas>
	</div>
	<div class="itemBox">
		<canvas id="myChart2" ></canvas>
	</div>
</section>


		

</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js" integrity="sha512-sW/w8s4RWTdFFSduOTGtk4isV1+190E/GghVffMA9XczdJ2MDzSzLEubKAs5h0wzgSJOQTRYyaz73L3d6RtJSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
const ctx = document.getElementById('myChart');
const ctx2 = document.getElementById('myChart2');
const myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Guayas', 'Loja', 'Napo', 'Pichincha', 'Esmeraldas', 'Chimborazo', 'Bolivar', 'Orellana', 'Manabí', 'Imbabura', 'Azuay', 'El Oro', 'Los Ríos', 'Santa Elena', 'Cañar', 'Puyo', 'Tungurahua', 'Morona Santiago', 'Pastaza', 'Sucumbios', 'Santo Domingo de los Tsachilas', 'Cotopaxi', 'Carchi'],
        datasets: [{
            label: '# of Votes',
            data: [42, 22, 29, 227, 5, 7, 2, 15, 12, 13, 43, 165, 4, 8, 7, 1, 9, 2, 2,2,2,3,1],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(170, 57, 57, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
const myChart2 = new Chart(ctx2, {
    type: 'bar',
    data: {
        labels: ['Guayas', 'Loja', 'Napo', 'Pichincha', 'Esmeraldas', 'Chimborazo', 'Bolivar', 'Orellana', 'Manabí', 'Imbabura', 'Azuay', 'El Oro', 'Los Ríos', 'Santa Elena', 'Cañar', 'Puyo', 'Tungurahua', 'Morona Santiago', 'Pastaza', 'Sucumbios', 'Santo Domingo de los Tsachilas', 'Cotopaxi', 'Carchi'],
        datasets: [{
            label: '# of Votes',
            data: [42, 22, 29, 227, 5, 7, 2, 15, 12, 13, 43, 165, 4, 8, 7, 1, 9, 2, 2,2,2,3,1],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(251, 119, 164, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>

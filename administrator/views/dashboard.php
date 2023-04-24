<h1>Dashboard</h1>
<?php
	extract($_GET);
	include("../controller/dashboard_controller.php");
	$control= new dashboard_controller();
    //$listaUser=$control->ResultTotal();
?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="../../js/scriptMarkers.js"></script>
<section class="detalleResultados">
	<div class="grupoResult centrado valorVerde">
		<h2 id="indicador1"></h2>
		<p>Total atractivos turisticos</p>
	</div>
	<div class="grupoResult centrado ">
		<label >Atractivos Naturales: </label>
        <h2 id="indicador2"></h2>
	</div>
    <div class="grupoResult centrado ">
        <label >Atractivos Culturales: </label>
        <h2 id="indicador3"></h2>
    </div>
    <div class="grupoResult centrado ">
        <label >Eventos turísticos: </label>
        <h2 id="indicador4"></h2>
    </div>
</section>

<!--
<section class="boxCharts">
	<div class="itemBox">
		<canvas id="myChart" ></canvas>
	</div>
	<div class="itemBox">
		<canvas id="myChart2" ></canvas>
	</div>
</section>

-->
		


<script>

/*const ctx = document.getElementById('myChart');
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
});*/
</script>

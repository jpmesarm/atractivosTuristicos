
<h1>Planta turística / Complementarios</h1>
<?php
	extract($_GET);
	include("../controller/dataTest_controller.php");
	$control= new dataTest_controller();
	$lista=$control->GetTuristic($idCar);
	if (@$_POST['idCar']==NULL) {
		$testId=$_GET['testId'];
    	$control->CreateTuristic();
	}else{
    	$control->UpdateTuristic();
	}
	//print_r($lista);
	$car1= @$lista[1]['planta'];
	$car2= @$lista[1]['tipo'];
	$car3= @$lista[1]['numalojamiento'];
	$car4= @$lista[1]['numHabitaciones'];
	$car5= @$lista[1]['numplazas'];
	$car6= @$lista[1]['tipoalimentos'];
	$car7= @$lista[1]['numalimentos'];
	$car8= @$lista[1]['nummesas'];
	$car9= @$lista[1]['numplazasalim'];
	$car10= @$lista[1]['tipoagencia'];
	$car11= @$lista[1]['numagencias'];
	$car12= @$lista[1]['tipoaloja'];
	$car13= @$lista[1]['establecimiento'];
	$car14= @$lista[1]['numhabitacionespueblo'];
	$car15= @$lista[1]['plazascercano'];
	$car16= @$lista[1]['tipoestablecicercano'];
	$car17= @$lista[1]['estaalimencerca'];
	$car18= @$lista[1]['nummesascerca'];
	$car19= @$lista[1]['nummesascerca2'];
	$car20= @$lista[1]['tipoagen2'];
	$car21= @$lista[1]['numagen2'];
	$car22= @$lista[1]['catafacilidad'];
	$car23= @$lista[1]['catafacilidad2'];
	$car24= @$lista[1]['cantidacatfacilidad'];
	$car25= @$lista[1]['lat1'];
	$car26= @$lista[1]['long1'];
	$car27= @$lista[1]['admin'];
	$car28= @$lista[1]['acceuniver'];
	$car29= @$lista[1]['estadofacilidad'];
	$car30= @$lista[1]['complementarios1'];
	$car31= @$lista[1]['complementarios2'];
?>

<form method="post" action="" class="formulario">
<section class="boxCharts">
<div class="itemBox">
	<div class="grupoInput">
		<label for="planta">Planta turística: </label>
		<select name='planta' id="planta">
		 <option></option>
		 <option <?php if($car1=='Si'){echo "selected";} ?>>Si</option>
		 <option <?php if($car1=='No'){echo "selected";} ?>>No</option>
		</select> 
		<input type="hidden" name="idatractivo" value="<?php echo $testId;?>">
		<input type="hidden" name="idCar" id="idCar" value="<?php echo $idCar;?>">
	</div>
		<div class="grupoInput">
		<label for="tipo">Tipo:</label>
		<input type="text" name="tipo" id="tipo" placeholder="Ingrese el tipo" value="<?php echo $car2; ?>">
	</div>
	<div class="grupoInput">
		<label for="numalojamiento">Número de establecimiento de alojamiento:</label>
		<input type="text" name="numalojamiento" id="numalojamiento" placeholder="Ingrese el número de alojamiento" value="<?php echo $car3; ?>">
	</div>
	<div class="grupoInput">
		<label for="habitaciones">Número de habitaciones:</label>
		<input type="text" name="numHabitaciones" id="habitaciones" placeholder="Ingrese el númeor de habitaciones" value="<?php echo $car4; ?>">
	</div>
	<div class="grupoInput">
		<label for="plazas">Número de plazas</label>
		<input type="text" name="numplazas" id="plazas" placeholder="Ingrese el número de plazas" value="<?php echo $car5; ?>">
	</div>
	<div class="grupoInput">
		<label for="alimentos">Tipo de alimentos y bebidas:</label>
		<input type="text" name="tipoalimentos" id="alimentos" placeholder="Ingrese el tipo de alimentos y bebidas del establecimiento" value="<?php echo $car6; ?>">
	</div>
	<div class="grupoInput">
		<label for="numalimentos">Número de alimentos y bebidas:</label>
		<input type="text" name="numalimentos" id="numalimentos" placeholder="Ingrese el número de alimentos y bebidas del establecimiento" value="<?php echo $car7; ?>">
	</div>
	<div class="grupoInput">
		<label for="nummesas">Número de mesas:</label>
		<input type="text" name="nummesas" id="nummesas" placeholder="Ingrese el número de mesas en alimentos y bebidas" value="<?php echo $car8; ?>">
	</div>
	<div class="grupoInput">
		<label for="numplazas">Número de plazas de alimentos y bebidas:</label>
		<input type="text" name="numplazasalim" id="numplazas" placeholder="Ingrese el número de plazas en alimentos y bebidas" value="<?php echo $car9; ?>">
	</div>
	<div class="grupoInput">
		<label for="agencia">Tipo de agencia de viajes en el atractivo:</label>
		<input type="text" name="tipoagencia" id="agencia" placeholder="Ingrese el tipo de agencia de viajes" value="<?php echo $car10; ?>">
	</div>
	<div class="grupoInput">
		<label for="numagencia">Número de agencias:</label>
		<input type="text" name="numagencias" id="numagencia" placeholder="Ingrese el número de agencia de viajes en el atractivo" value="<?php echo $car11; ?>">
	</div>
</div>
<div class="itemBox">
	<div class="grupoInput">
		<label for="tipoaloja">Tipo de alojamiento:</label>
		<input type="text" name="tipoaloja" id="tipoaloja" placeholder="Ingrese el tipo de alojamiento (Hotel, hostal)" value="<?php echo $car12; ?>">
	</div>
	<div class="grupoInput">
		<label for="establealoja">Establecimeinto de alojamientociones:</label>
		<input type="text" name="establecimiento" id="establealoja" placeholder="Ingrese el establecimiento de alojamiento" value="<?php echo $car13; ?>">
	</div>
	<div class="grupoInput">
		<label for="numhabitaciones">Número de habitaciones:</label>
		<input type="text" name="numhabitacionespueblo" id="numhabitaciones" placeholder="Ingrese el número de habitaciones" value="<?php echo $car14; ?>">
	</div>
	<div class="grupoInput">
		<label for="numplazas2">Número de plazas:</label>
		<input type="text" name="plazascercano" id="numplazas2" placeholder="Ingrese el número de plaza" value="<?php echo $car15; ?>" >
	</div>
	<div class="grupoInput">
		<label for="tipoestable">Tipo de establecimeinto:</label>
		<input type="text" name="tipoestablecicercano" id="tipoestable" placeholder="Ingrese la tipo de establecimeinto" value="<?php echo $car16; ?>" >
	</div>
	<div class="grupoInput">
		<label for="establecerca">Establecimeinto mas cercano:</label>
		<input type="text" name="estaalimencerca" id="establecerca" placeholder="Ingrese el establecimeinto mas cercano" value="<?php echo $car17; ?>" >
	</div>
	<div class="grupoInput">
		<label for="nummesas2">Número de mesas establecimiento mas cercano:</label>
		<input type="text" name="nummesascerca" id="nummesas2" placeholder="Ingrese el número de mesas" value="<?php echo $car18; ?>" >
	</div>
	<div class="grupoInput">
		<label for="numplazas3">Número de plazas del establecimeinto mas cercano:</label>
		<input type="text" name="nummesascerca2" id="numplazas3" placeholder="Ingrese el número de plazas" value="<?php echo $car19; ?>" >
	</div>
	<div class="grupoInput">
		<label for="tipoagencia">Tipo de agencia de viajes del poblado mas cercano:</label>
		<input type="text" name="tipoagen2" id="tipoagencia" placeholder="Ingrese el establecimeinto mas cercano" value="<?php echo $car20; ?>" >
	</div>
	<div class="grupoInput">
		<label for="numagencia2">Número de agencias de viajes del poblado mas cercano:</label>
		<input type="text" name="numagen2" id="numagencia2" placeholder="Ingrese el número de agencias mas cercano" value="<?php echo $car21; ?>" >
	</div>
</div>
<div class="itemBox">
	<div class="grupoInput">
		<label for="cooperativa">CATEGORIA DE FACILIDADES EN EL ATRACTIVO TURISTICO:</label>
		<input type="text" name="catafacilidad" id="cooperativa" placeholder="Ingrese la cooperativa" value="<?php echo $car22; ?>">
	</div>
	<div class="grupoInput">
		<label for="terminal">CATEGORIA DE FACILIDADES EN EL ENTORNO DEL ATRACTIVO TURISTICO:</label>
		<input type="text" name="catafacilidad2" id="terminal" placeholder="Ingrese el nombre del terminal" value="<?php echo $car23; ?>">
	</div>
	<div class="grupoInput">
		<label for="frecuencia">CANTIDAD DE FACILIDADES EN EL ENTORNO AL ATRACTIVO:</label>
		<input type="text" name="cantidacatfacilidad" id="frecuencia" placeholder="Ingrese la frecuencia" value="<?php echo $car24; ?>">
	</div>
	<div class="grupoInput">
		<label for="detalletraslado">LONGITUD DE FACILIDADES EN EL ENTORNO AL ATRACTIVO:</label>
		<input type="text" name="long2" id="detalletraslado" placeholder="Ingrese el detalle del traslado" value="<?php echo $car26; ?>">
	</div>
	<div class="grupoInput">
		<label for="accesibilidad">LATITUD DE FACILIDADES EN EL ENTORNO AL ATRACTIVO:</label>
		<input type="text" name="lat1" id="accesibilidad" placeholder="Ingrese la accesibilidad" value="<?php echo $car25; ?>">
	</div>
	<div class="grupoInput">
		<label for="estadosenial">ADMINISTRADOR DE LAS FACILIDADES EN EL ENTORNO AL ATRACTIVO:</label>
		<input type="text" name="admin" id="estadosenial" placeholder="Ingrese el estado de la señalización" value="<?php echo $car27; ?>" >
	</div>
	<div class="grupoInput">
		<label for="estadosenial">ACCESIBILIDAD UNIVERSAL DE LAS FACILIDADES EN EL ENTORNO AL ATRACTIVO:</label>
		<input type="text" name="acceuniver" id="estadosenial" placeholder="Ingrese el estado de la señalización" value="<?php echo $car28; ?>" >
	</div>

	<div class="grupoInput">
		<label for="estadosenial">ESTADO DE LAS FACILIDADES EN EL ENTORNO AL ATRACTIVO:</label>
		<input type="text" name="estadofacilidad" id="estadosenial" placeholder="Ingrese el estado de la señalización" value="<?php echo $car29; ?>" >
	</div>
	<div class="grupoInput">
		<label for="estadosenial">COMPLEMENTARIOS A LA ACTIVIDAD TURISTICA EN EL ATRACTIVO:</label>
		<input type="text" name="complementarios1" id="estadosenial" placeholder="Ingrese el estado de la señalización" value="<?php echo $car30; ?>" >
	</div>
	<div class="grupoInput">
		<label for="estadosenial">COMPLEMENTARIOS A LA ACTIVIDAD TURISTICA EN EL POBLADO MAS CERCANO AL ATRACTIVO:</label>
		<input type="text" name="complementarios2" id="estadosenial" placeholder="Ingrese el estado de la señalización" value="<?php echo $car31; ?>" >
	</div>


</div>
</section>
	<div class="grupoInput">
	 <button type="submit" value="Procesar" class="btn-submit"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
	</div>
</form>

<h1>Accesibilidad y Conectividad del Atractivo</h1>
<?php
	extract($_GET);
	include("../controller/dataTest_controller.php");
	$control= new dataTest_controller();
	$lista=$control->GetAccessibility($idCar);
	if (@$_POST['idCar']==NULL) {
		$testId=$_GET['testId'];
    	$control->CreateAccessibility();
	}else{
    	$control->UpdateAccessibility();
	}
	//print_r($lista);
	$car1= @$lista[1]['poblado'];
	$car2= @$lista[1]['distancia'];
	$car3= @$lista[1]['desplazamiento'];
	$car4= @$lista[1]['latitud'];
	$car5= @$lista[1]['longitud'];
	$car6= @$lista[1]['modalidadacceso'];
	$car7= @$lista[1]['tipoacceso'];
	$car8= @$lista[1]['tipovia'];
	$car9= @$lista[1]['estadovia'];
	$car10= @$lista[1]['cooperativa'];
	$car11= @$lista[1]['terminal'];
	$car12= @$lista[1]['frecuencia'];
	$car13= @$lista[1]['detalletraslado'];
	$car14= @$lista[1]['accesibilidad'];
	$car15= @$lista[1]['senializacion'];
	$car16= @$lista[1]['estadosenial'];
?>

<form method="post" action="" class="formulario">
<section class="boxCharts">
<div class="itemBox">
	<div class="grupoInput">
		<label for="poblado">Poblado mas sercano: </label>
		<input type="text" name="poblado" id="poblado" placeholder="Ingrese el poblado mas cercano" value="<?php echo $car1; ?>">
		<input type="text" name="idatractivo" id="idatractivo" value="<?php echo $testId;?>">
		<input type="text" name="idCar" id="idCar" value="<?php echo $idCar;?>">
	</div>
		<div class="grupoInput">
		<label for="distancia">Distancia Km:</label>
		<input type="text" name="distancia" id="distancia" placeholder="Ingrese la distnacia en km" value="<?php echo $car2; ?>">
	</div>
	<div class="grupoInput">
		<label for="desplazamiento">Tiempo de desplazamiento:</label>
		<input type="text" name="desplazamiento" id="desplazamiento" placeholder="Ingrese el tiempo de desplazamiento" value="<?php echo $car3; ?>">
	</div>
	<div class="grupoInput">
		<label for="latitud">Latitud</label>
		<input type="text" name="latitud" id="latitud" placeholder="Ingrese la latitud" value="<?php echo $car4; ?>">
	</div>
	<div class="grupoInput">
		<label for="longitud">Longitud</label>
		<input type="text" name="longitud" id="longitud" placeholder="Ingrese la longitud" value="<?php echo $car5; ?>">
	</div>
</div>
<div class="itemBox">
	<div class="grupoInput">
		<label for="acceso">Modalidad de acceso:</label>
		<input type="text" name="acceso" id="acceso" placeholder="Ingrese la modalidad de acceso" value="<?php echo $car6; ?>">
	</div>
	<div class="grupoInput">
		<label for="tipoacceso">Tipo de acceso:</label>
		<input type="text" name="tipoacceso" id="tipoacceso" placeholder="Ingrese el tipo de acceso" value="<?php echo $car7; ?>">
	</div>
	<div class="grupoInput">
		<label for="tipovia">Tipo de vía:</label>
		<input type="text" name="tipovia" id="tipovia" placeholder="Ingrese el tipo de vía" value="<?php echo $car8; ?>" >
	</div>
	<div class="grupoInput">
		<label for="estadovia">Estado de la vía:</label>
		<input type="text" name="estadovia" id="estadovia" placeholder="Ingrese el estado de la vía" value="<?php echo $car9; ?>" >
	</div>
	<div class="grupoInput">
		<label for="senializacion">Señalización:</label>
		<input type="text" name="senializacion" id="senializacion" placeholder="Ingrese la señalización" value="<?php echo $car15; ?>" >
	</div>
</div>
<div class="itemBox">
	<div class="grupoInput">
		<label for="cooperativa">Cooperativa:</label>
		<input type="text" name="cooperativa" id="cooperativa" placeholder="Ingrese la cooperativa" value="<?php echo $car10; ?>">
	</div>
	<div class="grupoInput">
		<label for="terminal">Terminal:</label>
		<input type="text" name="terminal" id="terminal" placeholder="Ingrese el nombre del terminal" value="<?php echo $car11; ?>">
	</div>
	<div class="grupoInput">
		<label for="frecuencia">Ingrese la frecuencia:</label>
		<input type="text" name="frecuencia" id="frecuencia" placeholder="Ingrese la frecuencia" value="<?php echo $car12; ?>">
	</div>
	<div class="grupoInput">
		<label for="detalletraslado">Detalle del traslado al atractivo:</label>
		<input type="text" name="detalletraslado" id="detalletraslado" placeholder="Ingrese el detalle del traslado" value="<?php echo $car13; ?>">
	</div>
	<div class="grupoInput">
		<label for="accesibilidad">Accesibilidad:</label>
		<input type="text" name="accesibilidad" id="accesibilidad" placeholder="Ingrese la accesibilidad" value="<?php echo $car14; ?>">
	</div>
	<div class="grupoInput">
		<label for="estadosenial">Estado de la señalización:</label>
		<input type="text" name="estadosenial" id="estadosenial" placeholder="Ingrese el estado de la señalización" value="<?php echo $car16; ?>" >
	</div>
</div>
</section>
	<div class="grupoInput">
	 <button type="submit" value="Procesar" class="btn-submit"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
	</div>
</form>

<h1>Características del Atractivo</h1>
<?php
	extract($_GET);
	include("../controller/dataTest_controller.php");
	$control= new dataTest_controller();
	$lista=$control->GetCaracteristic($idCar);
	if (@$_POST['idCar']==NULL) {
		$testId=$_GET['testId'];
    	$control->CreatePlaceCaracteristic();
	}else{
    	$control->UpdatePlaceCaracteristic();
	}
	//print_r($lista);
	$car1= @$lista[1]['clima'];
	$car2= @$lista[1]['temperatura'];
	$car3= @$lista[1]['precipitacion'];
	$car4= @$lista[1]['lineaPertenece'];
	$car5= @$lista[1]['escenario'];
	$car6= @$lista[1]['tipoIngreso'];
	$car7= @$lista[1]['horarios'];
	$car8= @$lista[1]['diasAtencion'];
	$car9= @$lista[1]['reservas'];
	$car10= @$lista[1]['precios'];
	$car11= @$lista[1]['formaPagos'];
	$car12= @$lista[1]['recomendacionTiempo'];
?>

<form method="post" action="" class="formulario">
<section class="boxCharts">
<div class="itemBox">
	<div class="grupoInput">
		<label for="clima">Clima: </label>
		<input type="text" name="clima" id="clima" placeholder="Ingrese el clima" value="<?php echo $car1; ?>">
		<input type="hidden" name="idatractivo" id="idatractivo" value="<?php echo $testId;?>">
		<input type="hidden" name="idCar" id="idCar" value="<?php echo $idCar;?>">
	</div>
		<div class="grupoInput">
		<label for="linea">Línea de producto al que pertenece el atractivo (U):</label>
		<input type="radio" id="linea1" name="linea" value="1" <?php if($car4==1){echo "checked";}?> > <label for="linea1">Cultura</label><br>
		<input type="radio" id="linea2" name="linea" value="2" <?php if($car4==2){echo "checked";}?>> <label for="linea2">Naturaleza</label> <br>
		<input type="radio" id="linea3" name="linea" value="3" <?php if($car4==3){echo "checked";}?>> <label for="linea3">Aventura</label> <br>
	</div>
	<div class="grupoInput">
		<label for="reserva">Maneja sistema de reservas:</label>
		<select name='reserva' id="reserva">
		 <option></option>
		 <option <?php if($car9=='Si'){echo "selected";} ?>>Si</option>
		 <option <?php if($car9=='No'){echo "selected";} ?>>No</option>
		</select> 
	</div>
	<div class="grupoInput">
		<label for="mesvisita">Mes recomendable de visita</label>
		<input type="text" name="mesvisita" id="mesvisita" placeholder="Ingrese el mes recomendale de la visita" value="<?php echo $car12; ?>">
	</div>
	
</div>
<div class="itemBox">
	<div class="grupoInput">
		<label for="temperatura">Temperatura(ºC):</label>
		<input type="text" name="temperatura" id="temperatura" placeholder="Ingrese la temperatura" value="<?php echo $car2; ?>">
	</div>
		<div class="grupoInput">
		<label for="escenario">Escenario donde se localiza el atractivo turístico:</label>
		<input type="radio" id="escenario1" name="escenario" value="1" <?php if($car5==1){echo "checked";}?>> <label for="escenario1">Prístino </label><br>
		<input type="radio" id="escenario2" name="escenario" value="2" <?php if($car5==2){echo "checked";}?>> <label for="escenario2">Primitivo</label> <br>
		<input type="radio" id="escenario3" name="escenario" value="3" <?php if($car5==3){echo "checked";}?>> <label for="escenario3">Rústico natural</label> <br>
		<input type="radio" id="escenario4" name="escenario" value="4" <?php if($car5==4){echo "checked";}?>> <label for="escenario4">Rural</label><br>
		<input type="radio" id="escenario5" name="escenario" value="5" <?php if($car5==5){echo "checked";}?>> <label for="escenario5">Urbano</label><br>
	</div>
	<div class="grupoInput">
		<label for="precio">Precio de ingreso:</label>
		<input type="text" name="precio" id="precio" placeholder="Ingrese el precio" value="<?php echo $car10; ?>" >
	</div>
	
</div>
<div class="itemBox">
	<div class="grupoInput">
		<label for="precipitacion">Precipitación Pluviométrica (mm):</label>
		<input type="text" name="precipitacion" id="precipitacion" placeholder="Ingrese la precipitación" value="<?php echo $car3; ?>">
	</div>
	<div class="grupoInput">
		<label for="ingreso">Tipo de ingreso:</label>
		<select name='ingreso' id="ingreso">
		 <option></option>
		 <option <?php if($car6=='Libre'){echo "selected";} ?>>Libre</option>
		 <option <?php if($car6=='Restringido'){echo "selected";} ?>>Restringido</option>
		 <option <?php if($car6=='Pagado'){echo "selected";} ?>>Pagado</option>
		</select> 
	</div>
	<div class="grupoInput">
		<label for="horario">Horario de atención(00:00 a 00:00):</label>
		<input type="text" name="horario" id="horario" placeholder="Ingrese el horario de atención" value="<?php echo $car7; ?>">
	</div>
	<div class="grupoInput">
		<label for="diasatencion">Días de tención:</label>
		<input type="text" name="diasatencion" id="diasatencion" placeholder="Ingrese los días de atención" value="<?php echo $car8; ?>">
	</div>
	<div class="grupoInput">
		<label for="formaspago">Formas de pago (pago1, pago2):</label>
		<input type="text" name="formaspago" id="formaspago" placeholder="Ingrese las formas de pago separados por comas" value="<?php echo $car11; ?>">
	</div>
	
</div>
</section>
	<div class="grupoInput">
	 <button type="submit" value="Procesar" class="btn-submit"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
	</div>
</form>
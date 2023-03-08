
<h1>Política y Regulaciones</h1>
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
		<label for="servicio1">GAD CUENTA CON PLAN DE DESARROLLO TURISTICO TERRITORIAL: </label>
		<select name='servicio1' id="servicio1">
		 <option></option>
		 <option <?php if($car9=='No'){echo "selected";} ?>>Si</option>
		 <option <?php if($car9=='No'){echo "selected";} ?>>ND</option>
		</select> 
		<input type="hidden" name="idatractivo" id="idatractivo" value="<?php echo $testId;?>">
		<input type="hidden" name="idCar" id="idCar" value="<?php echo $idCar;?>">
	</div>
		<div class="grupoInput">
		<label for="servicio2">AÑO DE ELABORACION DE PLAN DE DESARROLLO TURISTICO TERRITORIAL:</label>
		<select name='servicio2' id="servicio2">
		 <option></option>
		 <option <?php if($car9=='Si'){echo "selected";} ?>>2018</option>
		 <option <?php if($car9=='No'){echo "selected";} ?>>2019</option>
		 <option <?php if($car9=='No'){echo "selected";} ?>>2020</option>
		 <option <?php if($car9=='No'){echo "selected";} ?>>2021</option>
		 <option <?php if($car9=='No'){echo "selected";} ?>>2022</option>
		 <option <?php if($car9=='No'){echo "selected";} ?>>2023</option>
		 <option <?php if($car9=='No'){echo "selected";} ?>>2024</option>
		 <option <?php if($car9=='No'){echo "selected";} ?>>2025</option>
		 <option <?php if($car9=='No'){echo "selected";} ?>>2026</option>
		 <option <?php if($car9=='No'){echo "selected";} ?>>ND</option>
		</select> 
	</div>
	
	
</div>
<div class="itemBox">
<div class="grupoInput">
		<label for="servicio3">EL ATRACTIVO SE ENCUENTRA DENTRO DE LA PLANIFICACION TURISTICA TERRITORIAL:</label>
		<select name='servicio3' id="servicio3">
		<option></option>
		 <option <?php if($car9=='Si'){echo "selected";} ?>>Si</option>
		 <option <?php if($car9=='No'){echo "selected";} ?>>ND</option>
		</select> 
	</div>
	<div class="grupoInput">
		<label for="servicio4">EXISTEN NORMATIVAS QUE SE APLICAN PARA EL DESARROLLO DE LA ACTIVIDAD TURISTICA EN EL ATRACTIVO:</label>
		<input type="text" name="servicio4" id="servicio4" placeholder="Ingrese la información"> 
	</div>

</div>
<div class="itemBox">
<div class="grupoInput">
		<label for="servicio5">EXISTEN ORDENANZAS QUE SE APLICAN PARA EL DESARROLLO DE LA ACTIVIDAD TURISTICA EN EL ATRACTIVO:</label>
		<input type="text" name="servicio5" id="servicio5" placeholder="Ingrese la información"> 
	</div>
</div>
</section>
	<div class="grupoInput">
	 <button type="submit" value="Procesar" class="btn-submit"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
	</div>
</form>
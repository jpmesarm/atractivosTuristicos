
<h1>Actividades que se Practican</h1>
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
		<label for="servicio1">ACTIVIDADES QUE SE PRACTICA EN EL AGUA: </label>
		<input type="text" name="servicio1" id="servicio1" placeholder="Ingrese la información">
		<input type="hidden" name="idatractivo" id="idatractivo" value="<?php echo $testId;?>">
		<input type="hidden" name="idCar" id="idCar" value="<?php echo $idCar;?>">
	</div>
		<div class="grupoInput">
		<label for="servicio2">ACTIVIDADES QUE SE PRACTICA EN EL AIRE:</label>
		<input type="text" name="servicio2" id="servicio2" placeholder="Ingrese la información">
	</div>
	
	
</div>
<div class="itemBox">
<div class="grupoInput">
		<label for="servicio3">ACTIVIDADES QUE SE PRACTICA EN LA SUPERFICIE TERRESTRE:</label>
		<select name='servicio3' id="servicio3">
		 <option></option>
		 <option <?php if($car9=='No'){echo "selected";} ?>>Si</option>
		 <option <?php if($car9=='No'){echo "selected";} ?>>N0</option>
		</select> 
	</div>
	<div class="grupoInput">
		<label for="servicio4">ACTIVIDADES CULTURALES  TANGIBLES E INTANGIBLES:</label>
		<select name='servicio4' id="servicio4">
		 <option></option>
		 <option <?php if($car9=='No'){echo "selected";} ?>>Si</option>
		 <option <?php if($car9=='No'){echo "selected";} ?>>N0</option>
		</select> 
	</div>

</div>
<div class="itemBox">
    <div class="grupoInput">
		<label for="servicio5">EXISTE PLAN DE PROMOCION TURISTICA CANTONAL:</label>
		<select name='servicio5' id="servicio5">
		 <option></option>
		 <option <?php if($car9=='No'){echo "selected";} ?>>Si</option>
		 <option <?php if($car9=='No'){echo "selected";} ?>>N0</option>
		</select> 
	</div>
    <div class="grupoInput">
		<label for="servicio5">EL ATRACTIVO SE ENCUENTRA INCLUIDO EN EL PLAN DE PROMOCION CANTONAL:</label>
		<select name='servicio5' id="servicio5">
		 <option></option>
		 <option <?php if($car9=='No'){echo "selected";} ?>>Si</option>
		 <option <?php if($car9=='No'){echo "selected";} ?>>N0</option>
		</select> 
	</div>
</div>
</section>
	<div class="grupoInput">
	 <button type="submit" value="Procesar" class="btn-submit"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
	</div>
</form>
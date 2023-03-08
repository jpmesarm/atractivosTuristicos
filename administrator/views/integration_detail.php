
<h1>Conservación e Integración del Atractivo</h1>
<?php
	extract($_GET);
	include("../controller/dataTest_controller.php");
	$control= new dataTest_controller();
	$lista=$control->GetIntegration($idCar);
	if (@$_POST['idCar']==NULL) {
		$testId=$_GET['testId'];
    	$control->CreateIntegration();
	}else{
    	$control->UpdateIntegration();
	}
	//print_r($lista);
	$car1= @$lista[1]['estado'];
	$car2= @$lista[1]['factores'];
	$car3= @$lista[1]['factores2'];
	$car4= @$lista[1]['estadocon'];
	$car5= @$lista[1]['factores3'];
	$car6= @$lista[1]['factores4'];
	$car7= @$lista[1]['declaratoria'];
	$car8= @$lista[1]['declarante'];
	$car9= @$lista[1]['denominacion'];
	$car10= @$lista[1]['fechadeclaratoria'];
	$car11= @$lista[1]['alcance'];
?>

<form method="post" action="" class="formulario">
<section class="boxCharts">
<div class="itemBox">
	<div class="grupoInput">
		<label for="estado">ESTADO DE CONSERVACION DEL ATRACTIVO: </label>
		<select name='estado' id="estado">
		 <option></option>
		 <option <?php if($car1=='Alterado'){echo "selected";} ?>>Alterado</option>
		 <option <?php if($car1=='Conservado'){echo "selected";} ?>>Conservado</option>
		 <option <?php if($car1=='Deteriorado'){echo "selected";} ?>>Deteriorado</option>
		 <option <?php if($car1=='En proceso de deterioro'){echo "selected";} ?>>En proceso de deterioro</option>
		 <option <?php if($car1=='ND'){echo "selected";} ?>>ND</option>
		 <option <?php if($car1=='Restaurado'){echo "selected";} ?>>Restaurado</option>
		</select> 
		<input type="hidden" name="idatractivo" id="idatractivo" value="<?php echo $testId;?>">
		<input type="hidden" name="idCar" id="idCar" value="<?php echo $idCar;?>">
	</div>
		<div class="grupoInput">
		<label for="naturales">FACTORES DE ALTERACION Y DETERIORO NATURALES DEL ATRACTIVO:</label>
		<select name='factores' id="naturales">
		 <option></option>
		 <option <?php if($car2=='Clima'){echo "selected";} ?>>Clima</option>
		 <option <?php if($car2=='Clima, flora y fauna, desastres naturales'){echo "selected";} ?>>Clima, flora y fauna, desastres naturales</option>
		 <option <?php if($car2=='Desastres Naturales'){echo "selected";} ?>>Desastres Naturales</option>
		 <option <?php if($car2=='Deslaves, erosión y desastres naturales'){echo "selected";} ?>>Deslaves, erosión y desastres naturales</option>
		 <option <?php if($car2=='Erosión de suelo'){echo "selected";} ?>>Erosión de suelo</option>
		 <option <?php if($car2=='Erosión, Desastres Naturales'){echo "selected";} ?>>Erosión, Desastres Naturales</option>
		 <option <?php if($car2=='Erosión, Húmedad'){echo "selected";} ?>>Erosión, Húmedad</option>
		 <option <?php if($car2=='Fauna y Flora, Erosión'){echo "selected";} ?>>Fauna y Flora, Erosión</option>
		 <option <?php if($car2=='Humedad'){echo "selected";} ?>>Humedad</option>
		 <option <?php if($car2=='Humedad, Erosión'){echo "selected";} ?>>Humedad, Erosión</option>
		 <option <?php if($car2=='Humedad/ Clima'){echo "selected";} ?>>Humedad/ Clima</option>
		 <option <?php if($car2=='ND'){echo "selected";} ?>>ND</option>
		</select> 
	</div>
	<div class="grupoInput">
		<label for="deterioro">FACTORES DE ALTERACION Y DETERIORO ANTROPICOS/ANTROPOGENICOS DEL ATRACTIVO</label>
		<select name='factores2' id="deterioro">
		<option></option>
		 <option <?php if($car3=='Actividad forestal, desarrollo industrial'){echo "selected";} ?>>Actividad forestal, desarrollo industrial</option>
		 <option <?php if($car3=='Actividaes agrícolas'){echo "selected";} ?>>Actividaes agrícolas</option>
		 <option <?php if($car3=='Actividades agrícolas  y ganaderas'){echo "selected";} ?>>Actividades agrícolas  y ganaderas</option>
		 <option <?php if($car3=='No'){echo "selected";} ?>>Actividades agrícolas  y ganaderas, actividades forestales</option>
		 <option <?php if($car3=='Actividades agrícolas  y ganaderas, actividades forestales y contaminación ambiental'){echo "selected";} ?>>Actividades agrícolas  y ganaderas, actividades forestales y contaminación ambiental</option>
		 <option <?php if($car3=='Actividades agrícolas  y ganaderas, generación de residuos'){echo "selected";} ?>>Actividades agrícolas  y ganaderas, generación de residuos</option>
		 <option <?php if($car3=='Actividaes de estracción minera'){echo "selected";} ?>>Actividaes de estracción minera</option>
		 <option <?php if($car3=='Actividaes forestales'){echo "selected";} ?>>Actividaes forestales</option>
		 <option <?php if($car3=='Actividades ganaderas'){echo "selected";} ?>>Actividades ganaderas</option>
		 <option <?php if($car3=='Actividades ganaderas, actividaes agricolas, actividaes forestales'){echo "selected";} ?>>Actividades ganaderas, actividaes agricolas, actividaes forestales</option>
		 <option <?php if($car3=='Condisiones de uso y expanción'){echo "selected";} ?>>Condisiones de uso y expanción</option>
		 <option <?php if($car3=='Contaminación del ambiente, actividades forestales'){echo "selected";} ?>>Contaminación del ambiente, actividades forestales</option>
		 <option <?php if($car3=='Contaminación del ambiente, Condisiones de uso y expanción'){echo "selected";} ?>>Contaminación del ambiente, Condisiones de uso y expanción</option>
		 <option <?php if($car3=='Generación de residuos'){echo "selected";} ?>>Generación de residuos</option>
		 <option <?php if($car3=='Negligencia / abandono'){echo "selected";} ?>>Negligencia / abandono</option>
		 <option <?php if($car3=='Otros'){echo "selected";} ?>>Otros</option>
		 <option <?php if($car3=='ND'){echo "selected";} ?>>ND</option>
		</select> 
	</div>
	<div class="grupoInput">
		<label for="conservacion">ESTADO DE CONSERVACION DEL ENTORNO:</label>
		<select name='estadocon' id="conservacion">
		<option></option>
		 <option <?php if($car4=='Alterado'){echo "selected";} ?>>Alterado</option>
		 <option <?php if($car4=='Conservado'){echo "selected";} ?>>Conservado</option>
		 <option <?php if($car4=='Deterioro'){echo "selected";} ?>>Deterioro</option>
		 <option <?php if($car4=='En proceso de deterioro'){echo "selected";} ?>>En proceso de deterioro</option>
		 <option <?php if($car4=='ND'){echo "selected";} ?>>ND</option>
		</select> 
	</div>
	
	
</div>
<div class="itemBox">
<div class="grupoInput">
		<label for="factores">FACTORES DE ALTERACION Y DETERIORO NATURALES DEL ENTORNO:</label>
		<select name='factores3' id="factores">
			<option></option>
			<option <?php if($car5=='Clima'){echo "selected";} ?>>Clima</option>
			<option <?php if($car5=='Clima, desastes naturales'){echo "selected";} ?>>Clima, desastes naturales</option>
			<option <?php if($car5=='Clima, flora, fauna'){echo "selected";} ?>>Clima, flora, fauna</option>
			<option <?php if($car5=='Desbordamientos'){echo "selected";} ?>>Desbordamientos</option>
			<option <?php if($car5=='Desastres naturales'){echo "selected";} ?>>Desastres naturales</option>
			<option <?php if($car5=='Desastres naturales, clima'){echo "selected";} ?>>Desastres naturales, clima</option>
			<option <?php if($car5=='Erosión'){echo "selected";} ?>>Erosión</option>
			<option <?php if($car5=='Erosión, Humedad'){echo "selected";} ?>>Erosión, Humedad</option>
			<option <?php if($car5=='Erosión, Humedad'){echo "selected";} ?>>Erosión, Humedad</option>
			<option <?php if($car5=='Erosión, Humedad, Desastres Naturales'){echo "selected";} ?>>Erosión, Humedad, Desastres Naturales</option>
			<option <?php if($car5=='Fauna y Flora'){echo "selected";} ?>>Fauna y Flora</option>
			<option <?php if($car5=='Fauna y Erosión'){echo "selected";} ?>>Fauna y Erosión</option>
			<option <?php if($car5=='Humedad'){echo "selected";} ?>>Humedad</option>
			<option <?php if($car5=='Incendios'){echo "selected";} ?>>Incendios</option>
			<option <?php if($car5=='Incendios y Deforestación'){echo "selected";} ?>>Incendios y Deforestación</option>
			<option <?php if($car5=='ND'){echo "selected";} ?>>ND</option>
		</select> 
	</div>
	<div class="grupoInput">
		<label for="antropicos">FACTORES DE ALTERACION Y DETERIORO ANTROPICOS/ANTROPOGENICOS DEL ENTORNO:</label>
		<select name='factores4' id="facantropicostores">
			<option></option>
			<option <?php if($car6=='Actividad forestal, desarrollo industrial'){echo "selected";} ?>>Actividad forestal, desarrollo industrial</option>
			<option <?php if($car6=='Actividades Agrícolas'){echo "selected";} ?>>Actividades Agrícolas</option>
			<option <?php if($car6=='Actividades Agrícolas, Actividades Ganaderas'){echo "selected";} ?>>Actividades Agrícolas, Actividades Ganaderas</option>
			<option <?php if($car6=='Actividades Extractivas'){echo "selected";} ?>>Actividades Extractivas</option>
			<option <?php if($car6=='Actividades Forestales y Actividades Ganaderas'){echo "selected";} ?>>Actividades Forestales y Actividades Ganaderas</option>
			<option <?php if($car6=='Actividaes Ganaderas, Actividades Agricolas, Actividades Forestales'){echo "selected";} ?>>Actividaes Ganaderas, Actividades Agricolas, Actividades Forestales</option>
			<option <?php if($car6=='Condisiones de uso de expanción'){echo "selected";} ?>>Condisiones de uso de expanción</option>
			<option <?php if($car6=='Contaminación del Ambiente, Actividades Agrícolas'){echo "selected";} ?>>Contaminación del Ambiente, Actividades Agrícolas</option>
			<option <?php if($car6=='Contaminación de los Rios'){echo "selected";} ?>>Contaminación de los Rios</option>
			<option <?php if($car6=='Contaminación del Ambiente, Actividades Forestales'){echo "selected";} ?>>Contaminación del Ambiente, Actividades Forestales</option>
			<option <?php if($car6=='Generació de Residuos'){echo "selected";} ?>>Generació de Residuos</option>
			<option <?php if($car6=='Otros'){echo "selected";} ?>>Otros</option>
			<option <?php if($car6=='ND'){echo "selected";} ?>>ND</option>
		</select> 
	</div>
	<div class="grupoInput">
		<label for="declaratoria1">DECLARATORIA DEL ESPACIO TURISTICO ASOCIADO AL ATRACTIVO:</label>
		<select name='declaratoria' id="declaratoria1">
			<option></option>
			<option <?php if($car7=='Si'){echo "selected";} ?>>Si</option>
			<option <?php if($car7=='ND'){echo "selected";} ?>>ND</option>
		</select> 
	</div>
</div>
<div class="itemBox">
<div class="grupoInput">
		<label for="declaratoria2">DECLARANTE DEL ESPACIO TURISTICO ASOCIADO AL ATRACTIVO:</label>
		<select name='declarante' id="declaratoria2">
			<option></option>
			<option <?php if($car8=='Si'){echo "selected";} ?>>Si</option>
			<option <?php if($car8=='ND'){echo "selected";} ?>>ND</option>
		</select> 
	</div>
	<div class="grupoInput">
		<label for="declaratoria3">DENOMINACION DE LA DECLARACION DEL ESPACIO TURISTICO ASOCIADO AL ATRACTIVO:</label>
		<select name='denominacion' id="declaratoria3">
			<option></option>
			<option <?php if($car9=='Si'){echo "selected";} ?>>Si</option>
			<option <?php if($car9=='ND'){echo "selected";} ?>>ND</option>
		</select> 
	</div>
	<div class="grupoInput">
		<label for="fechadeclaratoria">FECHA DE LA DECLARACION DEL ESPACIO TURISTICO ASOCIADO AL ATRACTIVO:</label>
		<input type="date" name="fechadeclaratoria" id="fechadeclaratoria" placeholder="Ingrese el tipo de agencia de viajes" value="<?php echo $car10; ?>">
	</div>
	<div class="grupoInput">
		<label for="declaratoria4">ALCANCE DE LA DECLARACION DEL ESPACIO TURISTICO ASOCIADO AL ATRACTIVO:</label>
		<select name='alcance' id="declaratoria4">
			<option></option>
			<option <?php if($car11=='Si'){echo "selected";} ?>>Si</option>
			<option <?php if($car11=='ND'){echo "selected";} ?>>ND</option>
		</select> 
	</div>
</div>
</section>
	<div class="grupoInput">
	 <button type="submit" value="Procesar" class="btn-submit"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
	</div>
</form>
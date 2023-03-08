
<h1>Higiene y Seguridad Turística</h1>
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
		<label for="servicio1">SERVICIOS BASICOS EN ATRACTIVO (AGUA): </label>
		<select name='servicio1' id="servicio1">
		 <option></option>
		 <option <?php if($car9=='Si'){echo "selected";} ?>>Entubada</option>
		 <option <?php if($car9=='No'){echo "selected";} ?>>Potable</option>
		 <option <?php if($car9=='No'){echo "selected";} ?>>Rio, vertiente, acequia, canal</option>
		 <option <?php if($car9=='No'){echo "selected";} ?>>Si</option>
		 <option <?php if($car9=='No'){echo "selected";} ?>>ND</option>
		</select> 
		<input type="hidden" name="idatractivo" id="idatractivo" value="<?php echo $testId;?>">
		<input type="hidden" name="idCar" id="idCar" value="<?php echo $idCar;?>">
	</div>
		<div class="grupoInput">
		<label for="servicio2">SERVICIOS BASICOS EN EL ATRACTIVO (ENERGIA ELECTRICA):</label>
		<select name='servicio2' id="servicio2">
		 <option></option>
		 <option <?php if($car9=='Si'){echo "selected";} ?>>Generador de luz</option>
		 <option <?php if($car9=='No'){echo "selected";} ?>>Red eléctrica de servicio público</option>
		 <option <?php if($car9=='No'){echo "selected";} ?>>Si</option>
		 <option <?php if($car9=='No'){echo "selected";} ?>>ND</option>
		</select> 
	</div>
	<div class="grupoInput">
		<label for="servicio3">SERVICIOS BASICOS EN EL ATARCTIVO (SANEAMIENTO):</label>
		<select name='servicio3' id="servicio3">
		<option></option>
		 <option <?php if($car9=='Si'){echo "selected";} ?>>Con descarga directa al mar, rio o quebrada</option>
		 <option <?php if($car9=='No'){echo "selected";} ?>>Pozo Séptico</option>
		 <option <?php if($car9=='No'){echo "selected";} ?>>Red pública de alcantarillado y sanitario</option>
		 <option <?php if($car9=='No'){echo "selected";} ?>>ND</option>
		</select> 
	</div>
	<div class="grupoInput">
		<label for="servicio4">SERVICIOS BASICOS EN EL ATRACTIVO (DISPOSICION DE DESECHOS):</label>
		<select name='servicio4' id="servicio4">
		<option></option>
		 <option <?php if($car9=='Si'){echo "selected";} ?>>Cerro recolector</option>
		 <option <?php if($car9=='No'){echo "selected";} ?>>Reciclaje</option>
		 <option <?php if($car9=='No'){echo "selected";} ?>>ND</option>
		</select> 
	</div>
    <div class="grupoInput">
		<label for="servicio5">SERVICIOS BASICOS EN LA CIUDAD O POBLADO MAS CERCANO (AGUA):</label>
		<select name='servicio5' id="servicio5">
		<option></option>
		 <option <?php if($car9=='Si'){echo "selected";} ?>>Entubada</option>
		 <option <?php if($car9=='No'){echo "selected";} ?>>Potable</option>
		 <option <?php if($car9=='No'){echo "selected";} ?>>ND</option>
		</select> 
	</div>
    <div class="grupoInput">
		<label for="servicio6">SERVICIOS BASICOS EN LA CIUDAD O POBLADO MAS CERCANO (ENERGIA ELECTRICA):</label>
		<select name='servicio6' id="servicio6">
		<option></option>
		 <option <?php if($car9=='Si'){echo "selected";} ?>>Red electrica de servicio público</option>
		 <option <?php if($car9=='No'){echo "selected";} ?>>ND</option>
		</select> 
	</div>
    <div class="grupoInput">
		<label for="servicio7">SERVICIOS BASICOS EN LA CIUDAD O POBLADO MAS CERCANO (SANEAMIENTO):</label>
		<select name='servicio7' id="servicio7">
		<option></option>
		 <option <?php if($car9=='Si'){echo "selected";} ?>>Red pública de alcantarillado</option>
		 <option <?php if($car9=='No'){echo "selected";} ?>>ND</option>
		</select> 
	</div>


    <div class="grupoInput">
		<label for="servicio8">SERVICIOS BASICOS EN LA CIUDAD O POBLADO MAS CERCANO (DISPOSICION DE DESECHOS):</label>
		<select name='servicio8' id="servicio8">
		<option></option>
		 <option <?php if($car9=='Si'){echo "selected";} ?>>Carro recolector</option>
		 <option <?php if($car9=='Si'){echo "selected";} ?>>Si</option>
		 <option <?php if($car9=='No'){echo "selected";} ?>>ND</option>
		</select> 
	</div>
	
</div>
<div class="itemBox">
<div class="grupoInput">
		<label for="servicio9">SEÑALETICA DEL ATRACTIVO (AMBIENTE):</label>
		<select name='servicio9' id="servicio9">
			<option></option>
			<option <?php if($car9=='Si'){echo "selected";} ?>>Area Rural</option>
			<option <?php if($car9=='No'){echo "selected";} ?>>Area natural</option>
			<option <?php if($car9=='No'){echo "selected";} ?>>Area urbana</option>
			<option <?php if($car9=='No'){echo "selected";} ?>>Letreros informativos</option>
			<option <?php if($car9=='No'){echo "selected";} ?>>Si</option>
			<option <?php if($car9=='No'){echo "selected";} ?>>ND</option>
		</select> 
	</div>
	<div class="grupoInput">
		<label for="servicio10">SEÑALETICA DEL ATRACTIVO (TIPO):</label>
		<select name='servicio10' id="servicio10">
			<option></option>
			<option <?php if($car9=='Si'){echo "selected";} ?>>Información botánica</option>
			<option <?php if($car9=='No'){echo "selected";} ?>>Leteros informativos, señaletica interna de seguridad</option>
			<option <?php if($car9=='No'){echo "selected";} ?>>Pictograma de actividades turísticas, Tótems direccionales</option>
			<option <?php if($car9=='No'){echo "selected";} ?>>Pictograma de atractivos naturales</option>
			<option <?php if($car9=='No'){echo "selected";} ?>>Pictograma de atractivos culturales</option>
			<option <?php if($car9=='No'){echo "selected";} ?>>Señales turísticas de aproximación</option>
			<option <?php if($car9=='No'){echo "selected";} ?>>ND</option>
		</select> 
	</div>
	<div class="grupoInput">
		<label for="servicios11">SEÑALETICA DEL ATRACTIVO (MATERIALIDAD):</label>
		<select name='servicios11' id="servicios11">
			<option></option>
			<option <?php if($car9=='No'){echo "selected";} ?>>Aluminio</option>
			<option <?php if($car9=='No'){echo "selected";} ?>>Aluminio, Otros</option>
			<option <?php if($car9=='No'){echo "selected";} ?>>Madera</option>
			<option <?php if($car9=='No'){echo "selected";} ?>>Madera y Aluminio</option>
			<option <?php if($car9=='No'){echo "selected";} ?>>Otros</option>
			<option <?php if($car9=='No'){echo "selected";} ?>>ND</option>
		</select> 
	</div>
    <div class="grupoInput">
		<label for="servicios12">SEÑALETICA DEL ATRACTIVO (ESTADO):</label>
		<select name='servicios12' id="servicios12">
			<option></option>
			<option <?php if($car9=='No'){echo "selected";} ?>>Bueno</option>
			<option <?php if($car9=='No'){echo "selected";} ?>>Malo</option>
			<option <?php if($car9=='No'){echo "selected";} ?>>Regular</option>
			<option <?php if($car9=='No'){echo "selected";} ?>>ND</option>
		</select> 
	</div>
    <div class="grupoInput">
		<label for="servicios13">SALUD EN EL ATRACTIVO:</label>
		<select name='servicios13' id="servicios13">
			<option></option>
			<option <?php if($car9=='No'){echo "selected";} ?>>Hospital</option>
			<option <?php if($car9=='No'){echo "selected";} ?>>Hospital, Subcentro de salud</option>
			<option <?php if($car9=='No'){echo "selected";} ?>>Subcentro de salud</option>
			<option <?php if($car9=='No'){echo "selected";} ?>>ND</option>
		</select> 
	</div>
    <div class="grupoInput">
		<label for="servicios14">SALUD EN LA CIUDAD O POBLADO MAS CERCANO:</label>
		<select name='servicios14' id="servicios14">
			<option></option>
			<option <?php if($car9=='No'){echo "selected";} ?>>Centro de salud</option>
			<option <?php if($car9=='No'){echo "selected";} ?>>Hospital</option>
			<option <?php if($car9=='No'){echo "selected";} ?>>Subcentro de salud</option>
			<option <?php if($car9=='No'){echo "selected";} ?>>Puesto de salud</option>
			<option <?php if($car9=='No'){echo "selected";} ?>>Otros</option>
			<option <?php if($car9=='No'){echo "selected";} ?>>ND</option>
		</select> 
	</div>


    <div class="grupoInput">
		<label for="servicios15">TIPO DE SEGURIDAD EN EL ATRACTIVO:</label>
		<select name='servicios15' id="servicios15">
			<option></option>
			<option <?php if($car9=='No'){echo "selected";} ?>>Policía nacional</option>
			<option <?php if($car9=='No'){echo "selected";} ?>>Policía nacional, metropolitana</option>
			<option <?php if($car9=='No'){echo "selected";} ?>>Policía nacional, Policía Municipal</option>
			<option <?php if($car9=='No'){echo "selected";} ?>>Policía nacional, Policía Municipal, Cuerpo de Bomberos</option>
			<option <?php if($car9=='No'){echo "selected";} ?>>Policía nacional, privada y municipal</option>
			<option <?php if($car9=='No'){echo "selected";} ?>>ND</option>
		</select> 
	</div>
    <div class="grupoInput">
		<label for="servicios16">SERVICIO DE COMUNICACION DE USO PÚBLICO EN EL ATRACTIVO: (TELEFONIA):</label>
		<select name='servicios16' id="servicios16">
			<option></option>
			<option <?php if($car9=='No'){echo "selected";} ?>>Fija, móvil</option>
			<option <?php if($car9=='No'){echo "selected";} ?>>Móvil</option>
			<option <?php if($car9=='No'){echo "selected";} ?>>ND</option>
		</select> 
	</div>
    <div class="grupoInput">
		<label for="servicios17">SERVICIO DE COMUNICACION DE USO PUBLICO EN EL ATRACTIVO: (CONEXION A INTERNET):</label>
		<select name='servicios17' id="servicios17">
			<option></option>
			<option <?php if($car9=='No'){echo "selected";} ?>>Línea telefónica, Teléfno movil</option>
			<option <?php if($car9=='No'){echo "selected";} ?>>Si</option>
			<option <?php if($car9=='No'){echo "selected";} ?>>Telefonía móvil</option>
			<option <?php if($car9=='No'){echo "selected";} ?>>ND</option>
		</select> 
	</div>
</div>
<div class="itemBox">
<div class="grupoInput">
		<label for="servicios18">SERVICIO DE COMUNICACION DE USO PUBLICO: (RADIO PORTATIL):</label>
		<select name='servicios18' id="servicios18">
			<option></option>
			<option <?php if($car9=='No'){echo "selected";} ?>>Uso exlusivo para comunicación interna</option>
			<option <?php if($car9=='No'){echo "selected";} ?>>Si</option>
            <option <?php if($car9=='No'){echo "selected";} ?>>ND</option>
		</select> 
	</div>
	<div class="grupoInput">
		<label for="servicios19">MULTIAMENAZAS EN EL ATRACTIVO:</label>
		<select name='servicios19' id="servicios19">
			<option></option>
			<option <?php if($car9=='No'){echo "selected";} ?>>Deslaves</option>
			<option <?php if($car9=='No'){echo "selected";} ?>>Incendios forestales</option>
			<option <?php if($car9=='No'){echo "selected";} ?>>Inundaciones</option>
			<option <?php if($car9=='No'){echo "selected";} ?>>Inundaciones, Incendios forestales</option>
			<option <?php if($car9=='No'){echo "selected";} ?>>Sequías, Incendios forestales</option>
			<option <?php if($car9=='No'){echo "selected";} ?>>Movimient de mazadeslizamientos</option>
			<option <?php if($car9=='No'){echo "selected";} ?>>Sequías</option>
			<option <?php if($car9=='No'){echo "selected";} ?>>Sismos</option>
			<option <?php if($car9=='No'){echo "selected";} ?>>ND</option>
		</select> 
	</div>
	<div class="grupoInput">
		<label for="servicios20">EXISTE PLAN DE CONTINGENCIAS EN CASO CATASTROFES:</label>
		<select name='servicios20' id="servicios20">
			<option></option>
			<option <?php if($car9=='No'){echo "selected";} ?>>Uso exlusivo para comunicación interna</option>
			<option <?php if($car9=='No'){echo "selected";} ?>>Si</option>
            <option <?php if($car9=='No'){echo "selected";} ?>>ND</option>
		</select> 
	</div>
	<div class="grupoInput">
		<label for="servicios21">INSTITUCION QUE ELABORO PLAN DE CONTINGENCIAS EN CASO DE CATASTROFES:</label>
		<input type="text" name="servicios21" id="servicios21" placeholder="Ingrese el año"> 
	</div>
    <div class="grupoInput">
		<label for="servicios22">NOMBRE DEL PLAN DE CONTINGENCIAS EN CASO DE CATASTROFES:</label>
		<input type="text" name="servicios22" id="servicios22" placeholder="Ingrese el nombre">
	</div>
    <div class="grupoInput">
		<label for="servicios23">AÑO DE ELABORACION DEL PLAN DE CONTINGENCIAS EN CASO DE CATASTROFES:</label>
		<input type="text" name="servicios23" id="servicios23" placeholder="Ingrese el año"> 
	</div>
</div>
</section>
	<div class="grupoInput">
	 <button type="submit" value="Procesar" class="btn-submit"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
	</div>
</form>
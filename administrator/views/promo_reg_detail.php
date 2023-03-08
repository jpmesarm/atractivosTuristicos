
<h1>Promoción y Comercialización | Registro de Visitas del Atractivo</h1>
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
<h2>Promoción y Comercialización del Atractivo</h2>
<section class="boxCharts">
   
<div class="itemBox">
	<div class="grupoInput">
		<label for="servicio1">MEDIO DE PROMOCIÓN DEL ATRACTIVO: </label>
		<input type="text" name="servicio1" id="servicio1" placeholder="Ingrese la información">
		<input type="hidden" name="idatractivo" id="idatractivo" value="<?php echo $testId;?>">
		<input type="hidden" name="idCar" id="idCar" value="<?php echo $idCar;?>">
	</div>
	<div class="grupoInput">
		<label for="servicio2">DIRECCION Y NOMBRE DE LOS MEDIOS PROMOCIONALES DEL ATRACTIVO:</label>
		<input type="text" name="servicio2" id="servicio2" placeholder="Ingrese la información">
	</div>
	
	
</div>
<div class="itemBox">
<div class="grupoInput">
		<label for="servicio3">PERIOCIDAD DE LA PROMOCION DEL ATRACTIVO:</label>
		<select name='servicio3' id="servicio3">
		 <option></option>
		 <option <?php if($car9=='No'){echo "selected";} ?>>Anual</option>
		 <option <?php if($car9=='No'){echo "selected";} ?>>Semestral</option>
		 <option <?php if($car9=='No'){echo "selected";} ?>>Trimestras</option>
		 <option <?php if($car9=='No'){echo "selected";} ?>>Mensual</option>
		 <option <?php if($car9=='No'){echo "selected";} ?>>Semanal</option>
		 <option <?php if($car9=='No'){echo "selected";} ?>>Diario</option>
		 <option <?php if($car9=='No'){echo "selected";} ?>>Ninguno</option>
		 <option <?php if($car9=='No'){echo "selected";} ?>>N0</option>
		</select> 
	</div>
</div>
<div class="itemBox">
    <div class="grupoInput">
		<label for="servicio4">EL ATRACTIVO FORMA PARTE DE UN PAQUETE TURISTICO:</label>
		<select name='servicio4' id="servicio4">
		 <option></option>
		 <option <?php if($car9=='No'){echo "selected";} ?>>Si</option>
		 <option <?php if($car9=='No'){echo "selected";} ?>>No</option>
		</select> 
	</div>
</div>
</section>

<h2>Registro de Visitas del Atractivo</h2>
<section class="boxCharts">
<div class="itemBox">
	<div class="grupoInput">
		<label for="reg1">EXISTE REGISTRO DE VISITANTES Y AFLUENCIA AL ATRACTIVO: </label>
		<select name='reg1' id="reg1">
		 <option></option>
		 <option <?php if($car9=='No'){echo "selected";} ?>>Si</option>
		 <option <?php if($car9=='No'){echo "selected";} ?>>No</option>
		</select> 
		<input type="hidden" name="idatractivo" id="idatractivo" value="<?php echo $testId;?>">
		<input type="hidden" name="idCar" id="idCar" value="<?php echo $idCar;?>">
	</div>
	<div class="grupoInput">
		<label for="reg2">TIPO DE REGISTRO DE VISITANTES Y AFLUENCIA AL ATRACTIVO:</label>
		<input type="text" name="reg2" id="reg2" placeholder="Ingrese la información">
	</div>
	<div class="grupoInput">
		<label for="reg3">AÑOS DE REGISTRO DE VISITANTES Y AFLUENCIA AL ATRACTIVO:</label>
		<input type="text" name="reg3" id="reg3" placeholder="Ingrese la información">
	</div>
	<div class="grupoInput">
		<label for="reg4">SE GENERA REPORTA DE ESTADISTICAS DE VISITA Y AFLUENCIA AL ATRACTIVO:</label>
		<input type="text" name="reg4" id="reg4" placeholder="Ingrese la información">
	</div>
    <div class="grupoInput">
		<label for="reg5">FRECUENCIA DE LOS REPORTES DE ESTADISTICAS DE VISITA Y AFLUENCIA AL ATRACTIVO:</label>
		<input type="text" name="reg5" id="reg5" placeholder="Ingrese la información">
	</div>
</div>
<div class="itemBox">
    <div class="grupoInput">
		<label for="reg6">TEMPORALIDAD DE VISITA AL ATRACTIVO:</label>
		<input type="text" name="reg6" id="reg6" placeholder="Ingrese la información"> 
	</div>
    <div class="grupoInput">
		<label for="reg7">CIUDADES DE ORIGEN TURISTA NACIONAL:</label>
		<input type="text" name="reg7" id="reg7" placeholder="Ingrese la información"> 
	</div>
    <div class="grupoInput">
		<label for="reg8">NUMERO DE TURISTAS NACIONALES (MES):</label>
		<input type="text" name="reg8" id="reg8" placeholder="Ingrese la información"> 
	</div>
    <div class="grupoInput">
		<label for="reg9">NUMERO DE TURISTAS NACIONALES (ANUAL):</label>
		<input type="text" name="reg9" id="reg9" placeholder="Ingrese la información"> 
	</div>
    <div class="grupoInput">
		<label for="reg10">PAISES DE ORIGEN TURISTA INTERNACIONAL:</label>
		<input type="text" name="reg10" id="reg10" placeholder="Ingrese la información"> 
	</div>

</div>
<div class="itemBox">
    <div class="grupoInput">
		<label for="reg11">NUMERO DE TURISTAS INTERNACIONALES (MES):</label>
		<input type="text" name="reg11" id="reg11" placeholder="Ingrese la información"> 
	</div>
    <div class="grupoInput">
		<label for="reg12">NUMERO DE TURISTAS INTERNACIONALES (ANUAL):</label>
		<input type="text" name="reg12" id="reg12" placeholder="Ingrese la información"> 
	</div>
    <div class="grupoInput">
		<label for="reg13">NOMBRE DEL INFORMANTE CLAVE DE FRECUENCIA DE VISITA:</label>
		<input type="text" name="reg13" id="reg13" placeholder="Ingrese la información"> 
	</div>
    <div class="grupoInput">
		<label for="reg14">CONTACTO DEL INFORMANTE CLAVE DE FRECUENCIA DE VISITA:</label>
		<input type="text" name="reg14" id="reg14" placeholder="Ingrese la información"> 
	</div>
    <div class="grupoInput">
		<label for="reg15">DEMANDA SEGUN DIAS DE VISITA:</label>
		<input type="text" name="reg15" id="reg15" placeholder="Ingrese la información"> 
	</div>
    <div class="grupoInput">
		<label for="reg16">DEMANDA SEGUN FRECUENCIA DE VISITA:</label>
		<select name='reg16' id="reg16">
		 <option></option>
		 <option <?php if($car9=='No'){echo "selected";} ?>>Alta</option>
		 <option <?php if($car9=='No'){echo "selected";} ?>>Baja</option>
		 <option <?php if($car9=='No'){echo "selected";} ?>>Media</option>
		 <option <?php if($car9=='No'){echo "selected";} ?>>Estacional</option>
		 <option <?php if($car9=='No'){echo "selected";} ?>>ND</option>
		</select>
	</div>
</div>
</section>
	<div class="grupoInput">
	 <button type="submit" value="Procesar" class="btn-submit"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
	</div>
</form>
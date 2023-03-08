<?php 

	include("../controller/catalogue_controller.php");
	$control= new catalogue_controller();
    $dataList = $control->GetProvince();
    $control->CreateCanton();
?>
<h2>Gestión de Provincias</h2>
<div class="menuDashboard">
    <a href="libraryView.php?action=province_add"><i class="fa-solid fa-plus"></i> Agregar Provincia</a> | 
    <a href="libraryView.php?action=canton_add"><i class="fa-solid fa-plus"></i> Agregar Cantón</a> | 
    <a href="libraryView.php?action=parroquia_add"><i class="fa-solid fa-plus"></i> Agregar Parroquia</a> | 
</div>
<br><br>
<form method="post" action="" class="formulario">
	<div class="grupoInput">
		<label for="nombres">Seleccione la provincia</label>
		<select name="provincia" >
		  <option value="">--</option>
		    <?php
		        for ($i = 1; $i <= count($dataList) - 1; $i++) {
		            echo "<option value='".$dataList[$i]['idprovincia']."'>" . $dataList[$i]['nombre'] . "</option>";
		        }
		    ?>
		</select>
	</div>
	<div class="grupoInput">
		<label for="nombres">Nombres del cantón</label>
		<input type="text" name="nombres" id="nombres" placeholder="Ingrese el cantón">
	</div>
	<div class="grupoInput">
	 <button type="submit" value="Procesar" class="btn-submit"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
	</div>
</form>


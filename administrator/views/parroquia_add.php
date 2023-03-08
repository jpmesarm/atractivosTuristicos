<?php 

	include("../controller/catalogue_controller.php");
	$control= new catalogue_controller();
    $dataList = $control->GetCanton();
    $control->CreateParroquia();
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
		<label for="nombres">Seleccione el cantón de la provincia</label>

		<?php
		echo "<select name='canton'>";
		echo "<option>Seleccione el canton</option>";
		/*while($row = $resultcodes->fetch_assoc()) {
		     $group[$row['groups']][] = $row;
		}*/
		 foreach ($dataList as $key => $values){
		     echo '<optgroup label="'.$key.'">';
		     foreach ($values as $value) 
		     {
		         echo '<option value="'.$value['idcanton'].'">'.$value['canton'].'</option>';
		     }
		     echo '</optgroup>';
		 }
		echo "</select>";

		?>
	</div>
	<div class="grupoInput">
		<label for="nombres">Nombres de la parroquia</label>
		<input type="text" name="nombres" id="nombres" placeholder="Ingrese el cantón">
	</div>
	<div class="grupoInput">
	 <button type="submit" value="Procesar" class="btn-submit"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
	</div>
</form>


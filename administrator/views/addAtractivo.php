<?php 
	include("../controller/dataTest_controller.php");
	include("../controller/catalogue_controller.php");
	$control= new dataTest_controller();
	$control2= new catalogue_controller();
	$tipolist = $control->GetTipo();
	$dataList = $control2->GetParroquia();
    $control->CreatePlace();
?>
<h1>Nuevo Atrativo turístico</h1>

<form method="post" action="" class="formulario">
<section class="boxCharts">
<div class="itemBox">
	<div class="grupoInput">
		<label for="nombres">Nombres del atractivo</label>
		<input type="text" name="nombres" id="nombres" placeholder="Ingrese su nombre">
	</div>
	<div class="grupoInput">
		<label for="canton">Parroquia</label>
		<?php
		echo "<select name='parroquia'>";
		echo "<option>Seleccione el canton</option>";
		/*while($row = $resultcodes->fetch_assoc()) {
		     $group[$row['groups']][] = $row;
		}*/
		 foreach ($dataList as $key => $values){
		     echo '<optgroup label="'.$key.'">';
		     foreach ($values as $value) 
		     {
		         echo '<option value="'.$value['idparroquia'].'">'.$value['parroquia'].'</option>';
		     }
		     echo '</optgroup>';
		 }
		echo "</select>";

		?>
	</div>
	<div class="grupoInput">
		<label for="tipo">Tipo</label>
		<?php
		echo "<select name='tipo'>";
		echo "<option>Seleccione el tipo</option>";
		 foreach ($tipolist as $key => $values){
		     echo '<optgroup label="'.$key.'">';
		     foreach ($values as $value) 
		     {
		         echo '<option value="'.$value['idsubtipo'].'">'.$value['subtipo'].'</option>';
		     }
		     echo '</optgroup>';
		 }
		echo "</select>";

		?>
	</div>
	<div class="grupoInput">
		<label for="barrio">Barrio</label>
		<input type="text" name="barrio" id="barrio" placeholder="Ingrese el barrio">
	</div>
	<div class="grupoInput">
		<label for="calle">Calle</label>
		<input type="text" name="calle" id="calle" placeholder="Ingrese la calle">
	</div>
	<div class="grupoInput">
		<label for="numero">Número</label>
		<input type="text" name="numero" id="numero" placeholder="Ingrese la número">
	</div>
	<div class="grupoInput">
		<label for="transversal">Transversal</label>
		<input type="text" name="transversal" id="transversal" placeholder="Ingrese la transversal">
	</div>
	<div class="grupoInput">
		<label for="latitud">Latitud</label>
		<input type="text" name="latitud" id="latitud" placeholder="Ingrese latitud">
	</div>
	
</div>

<div class="itemBox">
	<div class="grupoInput">
		<label for="longitud">Longitud</label>
		<input type="text" name="longitud" id="longitud" placeholder="Ingrese longitud">
	</div>
	<div class="grupoInput">
		<label for="altura">Altura</label>
		<input type="text" name="altura" id="altura" placeholder="Ingrese su altura">
	</div>
	<div class="grupoInput">
		<label for="tipoadmin">Tipo administración</label>
		<input type="text" name="tipoadmin" id="tipoadmin" placeholder="Ingrese el tipo de administración">
	</div>
	<div class="grupoInput">
		<label for="nombreadmin">Nombre administración</label>
		<input type="text" name="nombreadmin" id="nombreadmin" placeholder="Ingrese el nombre de administrador">
	</div>
	<div class="grupoInput">
		<label for="nombreinst">Nombre institución</label>
		<input type="text" name="nombreinst" id="nombreinst" placeholder="Ingrese el nombre de institución">
	</div>
	<div class="grupoInput">
		<label for="cargoadmin">Cargo administrador</label>
		<input type="text" name="cargoadmin" id="cargoadmin" placeholder="Ingrese del cargo">
	</div>
	<div class="grupoInput">
		<label for="telfadmin">Teléfono administrador</label>
		<input type="text" name="telfadmin" id="telfadmin" placeholder="Ingrese el teléfono administrador">
	</div>
	<div class="grupoInput">
		<label for="correoadmin">Correo administrador</label>
		<input type="email" name="correoadmin" id="correoadmin" placeholder="Ingrese el correo administrador">
	</div>
	<div class="grupoInput">
	 <button type="submit" value="Procesar" class="btn-submit"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
	</div>

</div>
</section>
</form>


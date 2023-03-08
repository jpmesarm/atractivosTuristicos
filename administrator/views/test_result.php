
<?php
	extract($_GET);
	include("../controller/dataTest_controller.php");
	include("../controller/catalogue_controller.php");
	$control= new dataTest_controller();
	$lista=$control->GetInfo($testId);
	$tipolist = $control->GetTipo();

	$control2= new catalogue_controller();
	$dataList = $control2->GetParroquia();

    $control->UpdatePlaceInfo();
?>
<h1>Atrativo Turístico: <?php echo $lista[1]['nombre']; ?></h1>

<form method="post" action="" class="formulario">
<section class="boxCharts">
<div class="itemBox">
	<div class="grupoInput">
		<label for="nombres">Nombres del atractivo</label>
		<input type="text" name="nombres" id="nombres" placeholder="Ingrese su nombre" value="<?php echo $lista[1]['nombre']; ?>">
		<input type="hidden" name="idCar" id="idCar" value="<?php echo $testId;?>">
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
		         if ($value['idparroquia']==$lista[1]['parroquia_idparroquia']) {
		         	echo '<option value="'.$value['idparroquia'].'" selected>'.$value['parroquia'].'</option>';
		         }else{
		         	echo '<option value="'.$value['idparroquia'].'">'.$value['parroquia'].'</option>';
		         }
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
		        if ($value['idsubtipo']==$lista[1]['subtipo_idsubtipo']) {
		         	echo '<option value="'.$value['idsubtipo'].'" selected>'.$value['subtipo'].'</option>';
		        }else{
		         	echo '<option value="'.$value['idsubtipo'].'">'.$value['subtipo'].'</option>';
		     	}
		     }
		     echo '</optgroup>';
		 }
		echo "</select>";

		?>
	</div>
	<div class="grupoInput">
		<label for="barrio">Barrio</label>
		<input type="text" name="barrio" id="barrio" placeholder="Ingrese el barrio" value="<?php echo $lista[1]['barrio']; ?>">
	</div>
	<div class="grupoInput">
		<label for="calle">Calle</label>
		<input type="text" name="calle" id="calle" placeholder="Ingrese la calle" value="<?php echo $lista[1]['calle']; ?>">
	</div>
	<div class="grupoInput">
		<label for="numero">Número</label>
		<input type="text" name="numero" id="numero" placeholder="Ingrese la número" value="<?php echo $lista[1]['numero']; ?>">
	</div>
	<div class="grupoInput">
		<label for="transversal">Transversal</label>
		<input type="text" name="transversal" id="transversal" placeholder="Ingrese la transversal" value="<?php echo $lista[1]['transversal']; ?>">
	</div>
	<div class="grupoInput">
		<label for="latitud">Latitud</label>
		<input type="text" name="latitud" id="latitud" placeholder="Ingrese latitud" value="<?php echo $lista[1]['latitud']; ?>">
	</div>
	
</div>

<div class="itemBox">
	<div class="grupoInput">
		<label for="longitud">Longitud</label>
		<input type="text" name="longitud" id="longitud" placeholder="Ingrese longitud" value="<?php echo $lista[1]['longitud']; ?>">
	</div>
	<div class="grupoInput">
		<label for="altura">Altura</label>
		<input type="text" name="altura" id="altura" placeholder="Ingrese su altura" value="<?php echo $lista[1]['altura']; ?>">
	</div>
	<div class="grupoInput">
		<label for="tipoadmin">Tipo administración</label>
		<input type="text" name="tipoadmin" id="tipoadmin" placeholder="Ingrese el tipo de administración" value="<?php echo $lista[1]['tipoAdmin']; ?>">
	</div>
	<div class="grupoInput">
		<label for="nombreadmin">Nombre administración</label>
		<input type="text" name="nombreadmin" id="nombreadmin" placeholder="Ingrese el nombre de administrador" value="<?php echo $lista[1]['nombreAdmin']; ?>">
	</div>
	<div class="grupoInput">
		<label for="nombreinst">Nombre institución</label>
		<input type="text" name="nombreinst" id="nombreinst" placeholder="Ingrese el nombre de institución" value="<?php echo $lista[1]['nombreInstitucion']; ?>">
	</div>
	<div class="grupoInput">
		<label for="cargoadmin">Cargo administrador</label>
		<input type="text" name="cargoadmin" id="cargoadmin" placeholder="Ingrese del cargo" value="<?php echo $lista[1]['cargoAdmin']; ?>">
	</div>
	<div class="grupoInput">
		<label for="telfadmin">Teléfono administrador</label>
		<input type="text" name="telfadmin" id="telfadmin" placeholder="Ingrese el teléfono administrador" value="<?php echo $lista[1]['telefonoAdmin']; ?>">
	</div>
	<div class="grupoInput">
		<label for="correoadmin">Correo administrador</label>
		<input type="email" name="correoadmin" id="correoadmin" placeholder="Ingrese el correo administrador" value="<?php echo $lista[1]['correoAdmin']; ?>">
	</div>
	<div class="grupoInput">
	 <button type="submit" value="Procesar" class="btn-submit"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
	</div>

</div>
</section>
</form>
	
	
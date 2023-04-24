<?php 
	include("../controller/dataTest_controller.php");
	include("../controller/catalogue_controller.php");
	$control= new dataTest_controller();
	$control2= new catalogue_controller();
	$tipolist = $control->GetTipo();
	$dataList = $control2->GetParroquia();
    $control->CreatePlace();
?>
<h1>Nuevo Atractivo turístico</h1>

<form method="post" action="" enctype="multipart/form-data" class="formulario">
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
		     echo '<optgroup label="'.utf8_encode($key).'">';
		     foreach ($values as $value) 
		     {
		         echo '<option value="'.$value['idparroquia'].'">'.utf8_encode($value['parroquia']).'</option>';
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
		     echo '<optgroup label="'.utf8_encode($key).'">';
		     foreach ($values as $value) 
		     {
		         echo '<option value="'.$value['idsubtipo'].'">'.utf8_encode($value['subtipo']).'</option>';
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
</div>

<div class="itemBox">
	<div class="grupoInput">
		<label for="latitud">Latitud</label>
		<input type="text" name="latitud" id="latitud" placeholder="Ingrese latitud">
	</div>
	<div class="grupoInput">
		<label for="longitud">Longitud</label>
		<input type="text" name="longitud" id="longitud" placeholder="Ingrese longitud">
	</div>
	<div class="grupoInput">
		<div id="map_canvas" style="height:650px; width:100%;">
	</div>
	<br>
	<div class="grupoInput">
		<label for="imagenAtractivo">Imagen del atractivo turistico (* jpg/png  Máximo 2 Mb)</label>
		<input type="file" name="imagen" id="imagenAtractivo">
	</div>
	<br>
	<div class="grupoInput">
	 <button type="submit" value="Procesar" class="btn-submit"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
	</div>

</div>
</section>
</form>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDEdwH9uKiayYqb4t_CfNw5vAlYaj9lAJc"></script>
    <script>
        var vMarker
        var map
            map = new google.maps.Map(document.getElementById('map_canvas'), {
                zoom: 14,
                center: new google.maps.LatLng(-3.923482, -79.206039),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });
            vMarker = new google.maps.Marker({
                position: new google.maps.LatLng(-3.956363, -79.206039),
                draggable: true
            });
            google.maps.event.addListener(vMarker, 'dragend', function (evt) {
                $("#latitud").val(evt.latLng.lat().toFixed(6));
                $("#longitud").val(evt.latLng.lng().toFixed(6));

                map.panTo(evt.latLng);
            });
            map.setCenter(vMarker.position);
            vMarker.setMap(map);

            $("#txtCiudad, #txtEstado, #txtDireccion").change(function () {
                movePin();
            });

            function movePin() {
            var geocoder = new google.maps.Geocoder();
            var textSelectM = $("#txtCiudad").text();
            var textSelectE = $("#txtEstado").val();
            var inputAddress = $("#txtDireccion").val() + ' ' + textSelectM + ' ' + textSelectE;
            geocoder.geocode({
                "address": inputAddress
            }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    vMarker.setPosition(new google.maps.LatLng(results[0].geometry.location.lat(), results[0].geometry.location.lng()));
                    map.panTo(new google.maps.LatLng(results[0].geometry.location.lat(), results[0].geometry.location.lng()));
                    $("#latitud").val(results[0].geometry.location.lat());
                    $("#longitud").val(results[0].geometry.location.lng());
                }

            });
        }
        </script>

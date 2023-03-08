<?php 

	include("../controller/user_controller.php");
	$control= new user_controller();
    $control->CreateUser();
?>
<h1>Nuevo Usuarios</h1>
<div class="menuDashboard"><a href=""><i class="fa-solid fa-user"></i> Add User</a></div>
<form method="post" action="" class="formulario">
			<div class="grupoInput">
				<label for="nombres">Nombres</label>
				<input type="text" name="nombres" id="nombres" placeholder="Ingrese su nombre">
			</div>
			<div class="grupoInput">
				<label for="apellidos">Apellidos</label>
				<input type="text" name="apellidos" id="apellidos" placeholder="Ingrese su apellido">
			</div>
			<div class="grupoInput">
				<label for="correo">Correo</label>
				<input type="email" name="correo" id="correo" placeholder="Ingrese su correo">
			</div>
			<div class="grupoInput">
				<label for="clave">Clave</label>
				<input type="password" name="clave" id="clave" placeholder="Ingrese su clave">
			</div>
			<div class="grupoInput">
				<label for="tipoUser">Tipo de usuario</label>
				<select id="tipoUser" name="tipoUser">
					<option>--</option>
					<option value="1">Administrador</option>
					<option value="2">Visitante</option>
				</select>
			</div>
			<div class="grupoInput">
			 <button type="submit" value="Procesar" class="btn-submit"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
			</div>
		</form>


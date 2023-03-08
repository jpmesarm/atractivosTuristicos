
<h1>Gestión de Usuarios</h1>
<div class="menuDashboard"><a href="libraryView.php?action=user_add"><i class="fa-solid fa-user"></i> Add User</a></div>
<?php
	extract($_GET);
	include("../controller/user_controller.php");
	$control= new user_controller();
    $listaUser=$control->ArrayUser($userId);
    $roles[1]="Administrador";
    $roles[2]="Visitante";
    $control->UpdateUser();
?>
<form method="post" action=""  class="formulario">
			<div class="grupoInput">
				<label for="nombres">Nombres</label>
				<input type="hidden" name="idUser"  value="<?php echo $listaUser[0]; ?>" >
				<input type="text" name="nombres" id="nombres" value="<?php echo $listaUser[1]; ?>" placeholder="Ingrese su nombre">
			</div>
			<div class="grupoInput">
				<label for="apellidos">Apellidos</label>
				<input type="text" name="apellidos" id="apellidos" value="<?php echo $listaUser[2]; ?>"  placeholder="Ingrese su apellido">
			</div>
			<div class="grupoInput">
				<label for="correo">Correo</label>
				<input type="email" name="correo" id="correo" value="<?php echo $listaUser[3]; ?>"  placeholder="Ingrese su correo">
			</div>
			<div class="grupoInput">
				<label for="clave">Clave (Si no desea cambiar la clave, dejarla en blanco)</label>
				<input type="password" name="clave" id="clave" placeholder="Ingrese su clave">
			</div>
			<div class="grupoInput">
				<label for="tipoUser">Tipo de usuario</label>
				<select id="tipoUser" name="tipoUser">
					<option value="<?php echo $listaUser[5]; ?>" ><?php echo $roles[$listaUser[5]]; ?></option>
					<option value="1">Administrador</option>
					<option value="2">Visitante</option>
				</select>
			</div>
			<div class="grupoInput">
			 <button type="submit" value="Actualizar" class="btn-submit">Actualizar</button>
			</div>
		</form>


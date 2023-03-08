<?php 
	require_once "./header.php";

?>
<h1>Gestión de Usuarios</h1>
<div class="menuDashboard"><a href="user_add.php">+ Add User</a></div>
<?php
	extract($_GET);
	include("../controller/user_controller.php");
	$control= new user_controller();
    $control->DeleteUser($userId);

?>

<?php require_once "./footer.php"; ?>
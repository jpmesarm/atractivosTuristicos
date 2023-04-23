<?php 
	require_once "./header.php";

?>
<h1>Gestión de Atractivos Turísticos</h1>
<?php
	extract($_GET);
	include("../controller/dataTest_controller.php");
	$control= new dataTest_controller();
    $control->DeleteTest($testId,$idparr,$idtipo);

?>

<?php require_once "./footer.php"; ?>
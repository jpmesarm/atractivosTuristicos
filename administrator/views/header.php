<?php
include("../seguridad/seguridad.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bienvenidos al sistema</title>
	<link rel="stylesheet" type="text/css" href="../css/estilosAdmin.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="../images/icnbl.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="../images/icnbl.png" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">
    
</head>
<body>
	<header class="cabeceraPrincipal">
		<section class="logoCabecera">
			<a href="../"><img src="../images/logoAtractivos2.png"></a>
		</section>
		<section class="widgetsCabecera">
			<h5><a href="../seguridad/exit.php?salir=true" title="Cerrar sesión"> <i class="fa-solid fa-arrow-right-from-bracket"></i></a></h5>
			<h5><i class="fa-solid fa-user"></i> <?php echo $_SESSION['username'];?> </h5>
		</section>
	</header>
	<section class="contenedorPrincipal">
		<nav class="menuAdmin">
			<a href="../"><i class="fa-solid fa-table-columns"></i> Dahsboard</a>
			<a href="libraryView.php?action=dataTest"><i class="fa-solid fa-vial-circle-check"></i> Ficha del atractivo</a>
			<a href="libraryView.php?action=catalogo"><i class="fa-solid fa-ellipsis"></i> Catálogos</a>
			<a href="libraryView.php?action=user"><i class="fa-solid fa-square-poll-vertical"></i> Usuarios</a>
			<div class="espacioMenu">&nbsp;</div>
			<a href=""><i class="fa-solid fa-user"></i> Perfil</a>
			<a href="../seguridad/exit.php?salir=true"><i class="fa-solid fa-arrow-right-from-bracket"></i> Cerrar session</a>
		</nav>
		<section class="contenidoPrinipal">
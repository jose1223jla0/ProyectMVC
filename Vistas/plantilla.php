<!DOCTYPE html> <!-- Vistas/plantilla.php-->
<html lang="es">

<head>
	<meta charset="utf-8">
	<title>CRUD</title>
	<!-- <link rel="stylesheet" type="text/css" href="Vistas/css/estilos.css">
	<link rel="stylesheet" href="../Vistas/css/bootstrap/bootstrap.css">
	<link rel="stylesheet" href="../Vistas/css/fontawesome/css/all.css"> -->
	<!-- <link rel="stylesheet" href="../Vistas/css/tailwind/src/output.css"> -->
	<script src="https://cdn.tailwindcss.com"></script>
	<script src="../Vistas/css/tailwind/node_modules/flowbite/dist/flowbite.min.js"></script>
</head>

<body>
	<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	session_start();
	$rutasC = new RutasC();
	include 'Modulos/menu.php';
	$modulo = $rutasC->procesaRutasC();
	include $modulo;
	?>
</body>

</html>
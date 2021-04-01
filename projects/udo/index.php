<!DOCTYPE html>
<html>
<head>
	<title>Comisión de Trabajos de Grado</title>
	<meta charset="utf-8">
	<link rel="icon" href="projects/udo/img/udo.png">
</head>
<body>

	<h1>Comisión de Trabajos de Grado</h1>
	<h2>Departamento de Petróleo</h2>
	
	<nav>	
		<?php 
			include "functions.php";
			print_nav();
		?>	
	</nav>
	
	<form action="connection.php" method="post">
		<input type="number" name="ci" placeholder="Número de cédula">
		<input type="number" name="pip" placeholder="PIP">		
		<input type="submit" value="Enviar">
	</form>

	<h2>AVISO: La comisión atenderá los días Miércoles de 8:00 AM a 10:00 AM en el departamento...</h2>
	<h3>Última actualización: 15 de Enero de 2021, 9:29 PM</h3>
</body>
</html>
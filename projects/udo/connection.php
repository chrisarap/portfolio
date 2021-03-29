<?php 
	
	$pip = $_POST["pip"];
	echo "<h1>hey " . $pip . "</h1>";

	include "pass.php";
	
	$mysqli = new mysqli($host, $user, $pass, $db);
	$result = $mysqli->query("SELECT * FROM " . $table .  " WHERE " . $pip . " = PIP"); 
	$row = $result->fetch_assoc();
	

	$name =  $row["NOMBRES"];
	$last_name = $row["APELLIDOS"];
	echo $name . " " .$last_name;

	//$ = $row[""]
?>

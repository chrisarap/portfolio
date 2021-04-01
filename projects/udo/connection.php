<?php 
	
	$pip = $_POST["pip"];
	$ci = $_POST["ci"];
	include "pass.php";
	
	$mysqli = new mysqli($host, $user, $pass, $db);
	$query = "SELECT * FROM " . $table .  " WHERE " . $pip . " = PIP AND " . $ci . " = CI";
	$result = $mysqli->query($query); 
	$row = $result->fetch_assoc();
	
	include "arrays.php";

	$test = array(
		$student_data, 
		$project_data,
		$corrections,
		$juries,
		$approval
	);

	// print arrays
	echo "--------------------------<br>";		
	for ($i=0; $i < count($test); $i++) {		
		foreach ($test[$i] as $key => $value) {
			if (strlen($value) >= 1 ) {
				echo  $key . " = " .$value ." "  . "<br>";
			}			
		}
		echo "--------------------------<br>";		
	}

?>

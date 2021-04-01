<!DOCTYPE html>
<html>
<head>
	<title>Formatos</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="img/udo.png"> 

</head>
<body>
<nav>
	<?php 
		include "functions.php";
		print_nav();
	 ?>
</nav>

<ul>
	<?php 
		foreach (formats() as $key => $value) {
			echo '<a href="' . $value .'" target="_blank"> <li>' . $key . '</li></a>';
		}
	?>	
</ul>

</body>
</html>
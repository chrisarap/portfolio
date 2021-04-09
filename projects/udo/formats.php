<!DOCTYPE html>
<html>
<head>
	<?php 
		include "functions.php";
		print_meta("Formatos");
	?>
</head>
<body>
<nav>
	<?php 
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
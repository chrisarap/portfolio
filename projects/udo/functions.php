<?php
	function print_nav(){
		echo 
		'<ul>
			<li><a href="index.php">Principal</a></li>
			<li><a href="formats.php">Formatos</a></li>
			<li><a href="">Programas</a></li>
			<li><a href="degree.php">Grado</a></li>
			<li><a href="">Contacto</a></li>
			<li><a href="about.php">Sobre la página</a></li>
		</ul>';
	}

	function formats(){		
		$formats =array(
			'CTGIP - 01'		=>'https://drive.google.com/open?id=1tmKuvIqw_XhP-X-5PwKZS68ZEYhe6F8o',
			'CTGIP - 02C'		=>'https://drive.google.com/open?id=17PP7YievUSpVjiW4ggOSZVy8sXA_5h4d',
			'CTGIP - 02T'		=>'https://drive.google.com/open?id=1SPayaqkfXU2KrRP5SMuY3Vhsj1Ry9_x-',
			'CTGIP - 03'		=>'https://drive.google.com/open?id=1N5Me20cynVBSqq7bbOUaz7qPpcWxH-q1',
			'CTGIP - 04'		=>'https://drive.google.com/open?id=1DshVZSczmDMIyuL3Sud54Q0SNme63fNe',
			'CTGIP - 05'		=>'https://drive.google.com/open?id=1UwVA25Nsv7VsXcUXC8mEX-2xFIs4mnxL',
			'CTGIP - 07'		=>'https://drive.google.com/open?id=1n8CKHQHSIUYWTjVH6srHEKeNZRD9MoOQ',
			'CTGIP - 08'		=>'https://drive.google.com/open?id=1R78OVUNZlrtUfhjasv14BoMlruf1VDyA',
			'CTGIP - 10'		=>'https://drive.google.com/open?id=15RTsjLV4mR8mv80kau8TmE-ubfqcd2l8',
			'CTGIP - 12'		=>'https://drive.google.com/open?id=1IMYu1snMB8p-cjSUDQw4rmp4X4GUHxEA',
			'CTGIP - 13'		=>'https://drive.google.com/open?id=17z2QkE-sQvv0fkkjINFSroTxySlKQI-V',
			'CTGIP - 14'		=>'https://drive.google.com/open?id=1dSDcDDleOwdlAyfpEKItRjAiaokeoBuS',
			'CTGIP - 20'		=>'https://drive.google.com/open?id=1ulLER4_vQTOJhi-vfc71NiokOhtO06dp',
			'CTGIP - 21'		=>'https://drive.google.com/open?id=1RTC9eOf0WzGmM1HFvohplejz0YGx8xv-',
			'CTGIP - 22'		=>'https://drive.google.com/open?id=122DP6EEQN3P8AyGS-zv8zHNX7IvSl2RR',
			'CTGIP - 23'		=>'https://drive.google.com/open?id=1688bNrEW7NM2El0IUT4gEi9xkc7BQyiY',
			'CTGIP - Prorrogas'	=>'https://drive.google.com/open?id=1n852jEbPKo2pdOh1kjHqKRTEnuQm2Drp'
		);
		return $formats;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>my portfolio</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"&amp;gt>
	<meta charset="utf-8">
	<?php
		include "functions.php";
	?> 
</head>
<body>

<nav>
	<ul>
		<a class="nav-link" href="#section-about">
			<li>About</li>
		</a>

		<a class="nav-link" href="#section-work">
			<li>Work</li>
		</a>

		<a class="nav-link" href="#section-certificate">
			<li>Certificates</li>
		</a>

		<a class="nav-link" href="#section-tech">
			<li>Technologies</li>
		</a>

		<a class="nav-link" href="#section-contact">
			<li>Contact</li>
		</a>
	</ul>
	<div class="nav-media">
		<?php 
			media();
		?>	
	</div>
</nav>

<section id="section-about" class="section">
	<h1>Hi, I'm Christian Arteaga</h1>
	<p>A Web Developer</p>
	<img 
		class="profile_photo" 
		src="https://avatars.githubusercontent.com/u/72636990?v=4"
	>
</section>

<section id="section-work" class="section">	

	<div class="work-box">
		<a class="work_link" href="http://comisionpetroleo.freecluster.eu/" target="_blank">
			<img class="work-img" src="https://preview.redd.it/al0schdiybk51.jpg?width=1920&format=pjpg&auto=webp&s=593106abe87ade6faafaa7c68953981d929cad26">
			<p class="work_name">UDO online</p>	
		</a>	
	</div>

	<div class="work-box">
		<a class="work_link" href="../udo/index.php" target="_blank">
			<img class="work-img projects" src="img/projects/udo_project.png">
			<p class="work_name">UDO localhost</p>	
		</a>
	</div>
			
	<div class="work-box">
		<a class="work_link" href="" target="_blank">
			<img class="work-img" src="https://preview.redd.it/al0schdiybk51.jpg?width=1920&format=pjpg&auto=webp&s=593106abe87ade6faafaa7c68953981d929cad26">
			<p class="work_name">project #3</p>	
		</a>
	</div>

	<div class="work-box">
		<a class="work_link" href="" target="_blank">
			<img class="work-img" src="https://preview.redd.it/al0schdiybk51.jpg?width=1920&format=pjpg&auto=webp&s=593106abe87ade6faafaa7c68953981d929cad26">
			<p class="work_name">project #4</p>	
		</a>
	</div>
		
</section>

<section id="section-tech" class="section">
	
	<div class="tech-box">
		<img class="tech_logo" src="https://img-premium.flaticon.com/png/512/888/888909.png?token=exp=1621087904~hmac=fe1849cb302eaa4d892fd28cec819d7e">
		<div class="bar">
			<div class="bar-html"></div>
			<p>90%</p>
		</div>
	</div>

	<div class="tech-box">
		<img class="tech_logo" src="https://img-premium.flaticon.com/png/512/888/888897.png?token=exp=1621088142~hmac=cb32dfb0503c47e3c1329fbea733eea8">
		<div class="bar">	
			<div class="bar-css"></div>
			<p>70%</p>
		</div>
	</div>

	<div class="tech-box">
		<img class="tech_logo" src="https://img-premium.flaticon.com/png/512/1199/1199124.png?token=exp=1621087944~hmac=7569bf3bf8e0e3400ac814b5c9ddef9b">
		<div class="bar">
			<div class="bar-js"></div>
			<p>70%</p>
		</div>
	</div>

	<div class="tech-box">
		<img class="tech_logo" src="https://img-premium.flaticon.com/png/512/528/528261.png?token=exp=1621087652~hmac=8837fd7e4fc66068b7b4c20d78da9e1e">
		<div class="bar">			
			<div class="bar-php"></div>
			<p>60%</p>
		</div>
	</div>

	<div class="tech-box">
		<img class="tech_logo" src="https://img-premium.flaticon.com/png/512/4248/4248443.png?token=exp=1621087647~hmac=6cf110cd0b3115690b734683cf1fe4c9">
		<div class="bar">		
			<div class="bar-sql"></div>
			<p>45%</p>
		</div>
	</div>

	
	
	
	
	
</section>

<section id="section-certificate" >
	<h2>free code camp certificates</h2>
	<div class="sub-certificates">
		<a target="_blank" href="https://www.freecodecamp.org/certification/chrisar/responsive-web-design">
			<img class="certificate" src="img/certificates/responsive web design.png">
		</a>
		<a target="_blank" href="https://www.freecodecamp.org/certification/chrisar/javascript-algorithms-and-data-structures">
			<img class="certificate" src="img/certificates/js algotithms and data strutures.png">	
		</a>
		<a target="_blank" href="https://www.freecodecamp.org/certification/chrisar/front-end-libraries">
			<img class="certificate" src="img/certificates/front end libraries.png">
		</a>
		<a target="_blank" href="https://www.freecodecamp.org/certification/chrisar/data-visualization">
			<img class="certificate" src="img/certificates/data visualization.png">
		</a>
		<a target="_blank" href="https://www.freecodecamp.org/certification/chrisar/apis-and-microservices">
			<img class="certificate" src="img/certificates/apis and microservices.png">
		</a>
	</div>
</section>

<section id="section-contact" class="section">
	<div class="sub-contact-about">
		<h2>About</h2>
		<div class="sub-sub-contact-about">
			<img class="profile_photo" src="https://avatars.githubusercontent.com/u/72636990?v=4">
			<p>Christian Arteaga is a web developer who lives in Venezuela</p>
		</div>
	</div>
	<button>Up</button>
	<div class="sub-contact-contact">
		<h2>Contact</h2>
		<p>If you want to contact whith me, below are my social pages and my email</p>
		<div>
			<?php 
				media();
			?>
		</div>	
	</div>
	
	

	
</section>

</body>
</html>
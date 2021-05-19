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

<nav id="nav">
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
	<h2>Projects</h2>


	<div class="example-1">
		<img class="img-1" src="img/projects/udo_project.png">
		<div class="mask-1">
			<h2>UDO online</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae tortor diam  in ullamcorper malesuada.</p>
			<div class="work-links-box">
				<a href="http://comisionpetroleo.freecluster.eu/"  				class="work-link" target="_blank">Demo</a>
				<a href="https://github.com/chrisarap/udo" 	class="work-link" target="_blank">Repo</a>
			</div>
		</div>	
	</div>

	<div class="example-1">
		<img class="img-1" src="img/projects/udo_project.png">
		<div class="mask-1">
			<h2>UDO localhost</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae tortor diam  in ullamcorper malesuada.</p>
			<div class="work-links-box">
				<a href="../udo/index.php"  				class="work-link" target="_blank">Demo</a>
				<a href="https://github.com/chrisarap/udo" 	class="work-link" target="_blank">Repo</a>
			</div>
		</div>	
	</div>

	<div class="example-1">
		<img class="img-1" src="https://preview.redd.it/al0schdiybk51.jpg?width=1920&format=pjpg&auto=webp&s=593106abe87ade6faafaa7c68953981d929cad26">
		<div class="mask-1">
			<h2>Project 3</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae tortor diam  in ullamcorper malesuada.</p>
			<div class="work-links-box">
				<a href="../udo/index.php"  				class="work-link" target="_blank">Demo</a>
				<a href="https://github.com/chrisarap/udo" 	class="work-link" target="_blank">Repo</a>
			</div>
		</div>	
	</div>
			

		
</section>

<section>
	<h2>About</h2>
	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
</p>
<button>Download cv</button>
</section>

<section id="section-tech" class="section">
	<h2>Technologies</h2>
	<div class="tech-box">
		<img class="tech_logo" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Flogos-download.com%2Fwp-content%2Fuploads%2F2017%2F07%2FHTML5_badge.png&f=1&nofb=1">
		<p>html</p>
	</div>

	<div class="tech-box">
		<img class="tech_logo" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fmaxcdn.icons8.com%2FShare%2Ficon%2FLogos%2Fcss31600.png&f=1&nofb=1">
		<p>css</p>
	</div>

	<div class="tech-box">
		<img class="tech_logo" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fcommons%2Fthumb%2F9%2F99%2FUnofficial_JavaScript_logo_2.svg%2F1200px-Unofficial_JavaScript_logo_2.svg.png&f=1&nofb=1">
		<p>javascript</p>
	</div>

	<div class="tech-box">
		<img class="tech_logo" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fcdn.freebiesupply.com%2Flogos%2Flarge%2F2x%2Fphp-logo-png-transparent.png&f=1&nofb=1">
		<p>php</p>
	</div>

	<div class="tech-box">
		<img class="tech_logo" src="http://assets.stickpng.com/images/58481057cef1014c0b5e4951.png">
		<p>my sql</p>
	</div>

	<div class="tech-box">
		<img class="tech_logo" src="http://assets.stickpng.com/images/5847f981cef1014c0b5e48be.png">
		<p>git</p>
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

<div class="up-btn">
	<a href="#section-about">
		<img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fcommons%2Fthumb%2F7%2F76%2FWhite_Arrow_Up.svg%2F480px-White_Arrow_Up.svg.png&f=1&nofb=1">
	</a>
</div>

<section id="section-contact" class="section">	
		<h2>Contact</h2>
		
		<div class="media-logo">
			<a href="">
				<img class="contact-img" src="http://assets.stickpng.com/images/584ac2d03ac3a570f94a666d.png">
			</a>
			
			<a href="">
				<img class="contact-img" src="https://image.flaticon.com/icons/png/512/174/174857.png">
			</a>

			<a href="https://wa.link/aiw58w" target="_blank">
				<img class="contact-img" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/WhatsApp_logo-color-vertical.svg/294px-WhatsApp_logo-color-vertical.svg.png">
			</a>

			<a href="mailto:carteaga460@gmail.com?">
				<img class="contact-img" src="https://i1.wp.com/9to5google.com/wp-content/uploads/sites/4/2020/10/workspace-new-gmail-icon.png?ssl=1">	
			</a>

			<a href="https://msng.link/o/?chrisarap=tg">
				<img class="contact-img" src="http://assets.stickpng.com/images/5842a8fba6515b1e0ad75b03.png">	
			</a>

			<a href="https://github.com/chrisarap">
				<img class="contact-img" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Flogos-download.com%2Fwp-content%2Fuploads%2F2016%2F09%2FGitHub_logo.png&f=1&nofb=1">
			</a>
		</div>
</section>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>my portfolio</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"&amp;gt>
	<meta charset="utf-8">
</head>
<body>

<nav id="nav">
	<ul>
		<a class="nav-link" href="#section-start">
			<li>
				<span> <  </span> 
				CA 
				<span> /> </span>
			</li>
		</a>
		
		<a class="nav-link" href="#section-work">
			<li>Work</li>
		</a>

		<a class="nav-link" href="#section-about">
			<li>About</li>
		</a>		

		<a class="nav-link" href="#section-tech">
			<li>Technologies</li>
		</a>

		<a class="nav-link" href="#section-certificate">
			<li>Certificates</li>
		</a>

		<a class="nav-link" href="#section-contact">
			<li>Contact</li>
		</a>
	</ul>
</nav>

<section id="section-start" class="section">
	<h1>Hi, I'm Christian Arteaga</h1>
	<p>A Web Developer</p>
	<img 
		class="profile-photo" 
		src="https://avatars.githubusercontent.com/u/72636990?v=4"
	>
</section>

<section id="section-work" class="section">	
	<h2>Projects</h2>
	<div class="work-box">

		<div class="project">
			<img class="img-project" src="img/projects/udo_project.png">
			<div class="mask">
				<h2>UDO Commission</h2>
				<p>Thesis committee of my university. Students can view the status of their theses from home.</p>
				
				<div class="work-links-box">
					<p class="work-link">html 	</p>
					<p class="work-link">css 	</p>
					<p class="work-link">php 	</p>
					<p class="work-link">sql 	</p>
				</div>

				<div class="work-links-box">
					<a 	href="http://comisionpetroleo.freecluster.eu/"  				
						class="work-link" 
						target="_blank">
						<img class="work-icon" src="img/icons/show.png">
					</a>
					<a 	href="https://github.com/chrisarap/udo" 	
						class="work-link" 
						target="_blank">
						<img class="work-icon" src="img/icons/github-white.png">
					</a>
				</div>
			</div>	
		</div>

	</div>
</section>

<section id="section-about">
	<h2>About</h2>
	<p>I'm Christian Arteaga, a Venezuelan web developer and engineer. I like to solve problems with code and never stop learning. First it works and then the decoration, always simple and straightforward. Occasional chess player, passionate about technology, why and how things work. If you want to talk, work or play <a href="https://lichess.org/@/chrisar75" target="_blank">chess</a> with me, just <a href="#section-contact">let me know</a>.</p>
	<!--<button>Download cv</button>-->
</section>

<section id="section-tech" class="section">
	<h2>Technologies</h2>

	<div class="tech-square">
		<div class="tech-box">
			<img class="tech_logo" src="img/icons/html.png">
			<p>html</p>
		</div>

		<div class="tech-box">
			<img class="tech_logo" src="img/icons/css.png">
			<p>css</p>
		</div>

		<div class="tech-box">
			<img class="tech_logo" src="img/icons/js.png">
			<p>javascript</p>
		</div>

		<div class="tech-box">
			<img class="tech_logo" src="img/icons/php.png">
			<p>php</p>
		</div>

		<div class="tech-box">
			<img class="tech_logo" src="img/icons/sql.png">
			<p>my sql</p>
		</div>

		<div class="tech-box">
			<img class="tech_logo" src="img/icons/git.png">
			<p>git</p>
		</div>
	</div>
</section>

<section id="section-certificate" >
	<h2>Free Code Camp Certificates</h2>
	<div class="certificate-box">
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
	<a  href="#section-start">
		<div class="up-btn-box">
			<img src="img/icons/up.png">
			<img src="img/icons/up.png">
		</div>
	</a>
</div>

<section id="section-contact" class="section">	
		<h2>Contact</h2>
		
		<div class="media-logo">
			<a href="">
				<img class="contact-img" src="img/icons/facebook.png">
			</a>
			
			<a href="">
				<img class="contact-img" src="img/icons/linkedin.png">
			</a>

			<a href="https://wa.link/aiw58w" target="_blank">
				<img class="contact-img" src="img/icons/whatsapp.png">
			</a>

			<a href="https://msng.link/o/?chrisarap=tg">
				<img class="contact-img" src="img/icons/telegram.png">	
			</a>

			<a href="mailto:carteaga460@gmail.com?">
				<img class="contact-img" src="img/icons/gmail.png">	
			</a>

			
			<a href="https://github.com/chrisarap">
				<img class="contact-img" src="img/icons/github.png">
			</a>
		</div>
</section>

</body>
</html>
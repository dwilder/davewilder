<?php
	
// The one page portfolio
$url = "https://davewilder.ca";
$title = "Dave Wilder | Web and Mobile Designer";
$description = "Dave Wilder is a web developer and designer based in Toronto, Canada. He builds mobile optimized, responsive websites and cross-platform mobile applications.";

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $title ?></title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

	<meta property="og:image" content="<?php echo $url; ?>/img/davewilder-social-card.jpg" />
	<meta name="twitter:image" content="<?php echo $url; ?>/img/davewilder-social-card.jpg" />
	<meta property="og:url" content="<?php echo $url; ?>" />
	<meta property="og:locale" content="en" />
	<meta property="og:title" content="<?php echo $title; ?>" />
	<meta name="description" content="<?php echo $description; ?>" />
	<meta name="description" content="<?php echo $description; ?>" />

	<link rel="stylesheet" href="css/style.css" />
	<link rel="icon" type="image/png" href="favicon.png" />
</head>
<body>
	
	<div class="container">
		
		<a id="header"></a>
		
		<header class="page-header">
			
			<h1 class="site-name">Dave Wilder</h1>
			
			<p class="site-tagline">I design applications and write code for the web.</p>
			
		</header>
		
		<nav class="site-nav group">
			
			<ul>
				<li><a href="#design" class="nav-design">Design</a></li>
				<li><a href="#development" class="nav-development">Development</a></li>
				<li><a href="#dave" class="nav-dave">Dave</a></li>
			</ul>
			
		</nav>
		
		<section class="group">
			
			<a id="design"></a>
			<h2>Design</h2>
			
			<p class="meta-design">User experience design, wireframing and specifications, general web design.</p>
			
			<p>My design philosophy is straight forward: produce the clear documentation and images to keep your project moving forward. My approach is flexible, since each project has unique requirements and each team has their own methodology. Project requirements change, and I readily adapt my work as needed.</p>
			
			<h3>My Work</h3>
			
			<ul class="samples">
				<li>
					<div class="sample">
					<!-- <a href="/img/design_wf.png" target="_blank"> -->
						<span>Wireframing and Specifications</span>
						<div class="img">
							<img src="img/design_wf_small.png" alt="Wireframe and Specification sample" />
						</div>
					<!-- </a> -->
					</div>
				</li>
				<li>
					<a href="https://fifthparamita.com" target="_blank" class="sample">
						<span>User Interface Design</span>
						<div class="img">
							<img src="img/design_ui_small.jpg" alt="UI Design sample" />
						</div>
					</a>
				</li>
			</ul>
			
		</section>
		
		<section class="group">
			
			<a id="development"></a>
			<h2>Development</h2>
			
			<p class="meta-development">Full-Stack and Mobile DevelopmentWordPress</p>
			
			<p>I build web applications using PHP, MySQL, HTML5, CSS, and JavaScript/Typescript and mobile applications using React Native. If it makes sense, then I use a CMS like WordPress to ease the development process.</p>
			
			<p>Depending on project requirements, I'll code from scratch to optimize performance or leverage libraries to speed development.</p>
			
			<h3>My Work</h3>
			
			<ul class="samples">
				<li>
					<div class="sample">
					<!-- <a href="http://givegolf.ca" target="_blank"> -->
						<span>Web Development</span>
						<div class="img">
	 						<img src="img/development_code_small.jpg" alt="Web Development sample" />
						</div>
					<!-- </a> -->
					</div>
				</li>
				<li>
					<div class="sample">
					<!-- <a href="http://tikkotravels.org" target="_blank"> -->
						<span>WordPress Theming and Plugins</span>
						<div class="img">
							<img src="img/development_cms_small.jpg" alt="WordPress Theming and Plugins sample" />
						</div>
					<!-- </a> -->
					</div>
				</li>
			</ul>
			
		</section>
		
		<section class="group">
			
			<a id="dave"></a>
			<h2>Dave</h2>
			
			<p class="meta-dave">Designing and developing websites since 2007.</p>
			
			<p>My focus is on producing clean code using current best practices, and designing for a changing landscape of mobile and browser technology. I love, love, love to build responsive web applications and cross-platform mobile applications.</p>
			
			<p>Get in touch to discuss your project...</p>
			
			<h3>Contact</h3>
			
			<ul>
				<li>Send me an <a href='mailto:contact@davewilder.ca'>email</a></li>
				<li>Give me a ring: <a href='tel:4165098103'>416-509-8103</a></li>
			</ul>

		</section>
		
	</div>

	
	<footer class="site-footer">
		
		<div class="wrap">
			
			<div class="site-footer-menus">

				<section>

					<h3>Elsewhere</h3>

					<ul>
						<!-- <li><a href="http://liddweaver.com">Web Log</a></li> -->
						<li>
							<a href="https://www.linkedin.com/in/davidedwardwilder" target="_blank">
								<img src="./img/logo-linkedin.png" class="icon-social" alt="LinkedIn logo" />
								<span>LinkedIn</span>
							</a>
						</li>
						<li>
							<a href="https://github.com/dwilder" target="_blank">
								<img src="./img/logo-github.svg" class="icon-social" alt="GitHub logo" />
								<span>Github<span>
							</a>
						</li>
						<li>
							<a href="http://codepen.io/davewilder" target="_blank">
								<img src="./img/logo-codepen.png" class="icon-social" alt="Codepen logo" />
								<span>Codepen</span>
							</a>
						</li>
						<li>
							<a href="https://profiles.wordpress.org/liddweaver/" target="_blank">
								<img src="./img/logo-wordpress.png" class="icon-social" alt="WordPress logo" />
								<span>WordPress</span>
							</a>
						</li>
						<!-- <li><a href="http://wilderdrums.com">Drum Blog</a></li> -->
					</ul>

				</section>

				<section>

					<h3>Projects</h3>

					<ul>
						<li>
							<a href="https://drummism.com" target="_blank">
								<img src="./img/logo-drummism.png" class="icon-social" alt="Drummism logo" />
								<span>Drummism</span>
							</a>
						</li>

						<li>
							<a href="https://fifthparamita.com" target="_blank">
								<img src="./img/logo-fifthparamita.png" class="icon-social" alt="Fifth Paramita logo" />
								<span>Fifth Paramita</span>
							</a>
						</li>
					</ul>

				</section>
			
			</div>

			<hr />
			<p>Copyright &copy; <?php
				
				// Set the default timezone
				date_default_timezone_set( 'America/New_York' );
				
				// Show the current year
				echo date( 'Y' );
			?> Dave Wilder
		
		</div>
		
	</footer>
<?php

// Google Analytics	
include( 'includes/analyticstracking.php' );

?>

</body>
</html>


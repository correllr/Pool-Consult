<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
			<meta name="viewport" content="width=device-width">
			<meta name="description" content="<!-- FILL THIS IN LATER! -->"/>
			<title>Pool Consult</title>
			
			<?php wp_head(); ?>
			
	<!---------- FONTS ---------->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>	 
	<link href="https://fonts.googleapis.com/css?family=Domine|Merriweather|Montserrat|Roboto" rel="stylesheet"> 
		
	</head>

<body <?php body_class(); ?>> 
				
			
<!--- SITE HEADER --->
	<header class="site-header">
	
		<div class="logobox">
			<div class="logo">
				<a href="<?php echo home_url(); ?>"><img src="http://localhost/poolconsult/wp-content/uploads/2018/11/Logo-Pool-Consult.jpg" height="67" width="150" alt="Logo Pool Consult" /></a>
			</div>
			<div class="logobox-contact">
				<div class="logobox-app"><i class="fab fa-whatsapp fa-l"></i><p><a href="callto:0645575803" target="_blank"><p>0418 677333</a></p></div>
				<div class="logobox-mail"><i class="far fa-envelope"></i><p><a href="info@fm2share.nl" target="_blank"><p>info@Poolconsult.nl </a></p></div>
			</div>
		</div>

		<nav class="site-nav">
			
				<?php
					$args = array(
					'theme_location' => 'primary'
					);
				?>
				<?php wp_nav_menu( $args ); ?>	
				
		</nav>
	
	</header>
<!-- /site-header -->

<div class="container">
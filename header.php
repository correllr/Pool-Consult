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
<link href="https://fonts.googleapis.com/css?family=Marmelad|Pragati+Narrow|Roboto" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Dosis|Raleway" rel="stylesheet"> 
		
	</head>

<body <?php body_class(); ?>> 
				
			
<!--- SITE HEADER --->
	<header class="site-header">
		<a id="logo" href="<?php echo home_url(); ?>"><img src="/wp-content/uploads/2018/12/Logo-Pool-Consult.png"  alt="Logo Pool Consult" /></a>
			
		<nav class="site-nav">
				<?php
					$args = array(
					'theme_location' => 'primary'
					);
				?>
				<?php wp_nav_menu( $args ); ?>		
		</nav>
		
		<div class="nav-contact">
		<a href="http://poolconsult.nl/contact/">Contact</a>
		</div>
		
		<div id="mobile-menu-open">
			<i class="fas fa-bars fa-lg"></i><i class="fas fa-times"></i><p id="mobile-show">Menu</p><p id="mobile-hide">Sluiten</p>
		</div>
		<div id="mobile-menu-close">
			<i class="fas fa-times"></i>
		</div>
	
		<div class="search-box">
			<div class="hd-search">
				<?php get_search_form(); ?>
			</div>
			<div class="search-icon">
			</div>
		</div>	
	
	</header>

		
<!-- /site-header -->

<div class="container">
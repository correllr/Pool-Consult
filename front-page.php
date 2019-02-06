<!--- Homepage ---->
<?php get_header(); ?>
<div id="video-background" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.3) 0%, rgba(0, 0, 0, 0.3) 100%), url(<?php the_post_thumbnail_url('home-banner') ?>)">	
	<div id='hometitles'>
		<h1 class="title"><?php bloginfo(); ?></h1>
	</div>
</div>
<div class='container-home'>
	<h2 class="title"><?php the_field('home_subtitel'); ?></h2>
	<div id='aanbod' class='flexbox'>
	
			<?php

			if( have_rows('werkterrein_iconen') ):
			while ( have_rows('werkterrein_iconen') ) : the_row();
			?>
				<a href="<?php the_sub_field('link_achterliggende_pagina'); ?>" class='flexbox-dienst'>
				<?php
					$image = get_sub_field('icoon');?>
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="auto" height="60px" />
				<h3><?php the_sub_field('titel_werkterrein'); ?></h3>
				</a>
			
			<?php
			endwhile;
			else :
			endif;
			?>
			
	</div>
	
	<div class='inleiding'>
		<h1><?php the_field('titel_over_pool_consult'); ?></h1>
		<img src="/wp-content/uploads/2018/11/icoontjebackground.png" width="70px" height="true">
		<p><?php the_field('tekst_over_pool_consult'); ?></p> 
		<a class="button-inleiding" href="<?php the_field('link_button_inleiding_pool_consult'); ?>"><?php the_field('tekst_button'); ?></a>
	</div>
	
	<div id='team'>
	<h1><?php the_field('titel_deskundigen'); ?></h1>
	<img src="/wp-content/uploads/2018/11/icoontjebackground.png" width="70px" height="true">
		<div class='flexbox'>
			
		
				<?php

				// check if the repeater field has rows of data
				if( have_rows('deskundigen') ):

				// loop through the rows of data
				while ( have_rows('deskundigen') ) : the_row();
				?>
				
				<div class='flexbox-team'>
					<?php 

					$image = get_sub_field('afbeelding_deskundigen');?>

					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="auto" height="140px" />

					<h3><?php the_sub_field('titeldeskundigen'); ?></h3>
					<p><?php the_sub_field('naam_deskundigen'); ?></p>
					<p><?php the_sub_field('werkgebied_deskundigen'); ?></p>
				</div>
				
				<?php
				endwhile;

				else :

				// no rows found

				endif;
				?>
			
			
		</div>	
	</div>
			
		</div>
		
	</div>
	
	<div class='aanpak'>
		<div class='flexbox'>
			<div class='flexbox-aanpak'>
				<h2><?php the_field('titel_aanpak'); ?></h2>
				
				
				
				
				
				<?php
				// check if the repeater field has rows of data
				if( have_rows('aanpak_stappen') ):
				// loop through the rows of data
				while ( have_rows('aanpak_stappen') ) : the_row();
				?>
				<div class='flexbox-stappen'>
					<p><?php the_sub_field('icoon_aanpak'); ?><?php the_sub_field('aanpak_stap_1'); ?></p>
				</div>
				<?php
				endwhile;
				else :
				endif;
				?>
				<a class="button-aanpak" href="/aanpak/">Lees meer over onze aanpak ></a>
				
				
			</div>
			<div class='flexbox-beeld' style="background-image:url(<?php the_field('aanpak_beeld'); ?>)">
			</div>
		</div>
	</div>
	
	<div id="contact-background">
	
	<div class='contact'>	
		<h1><?php the_field('contact_titel'); ?></h1>
			<div class='contact-inleiding'>
			<p><?php the_field('contact_tekst'); ?></p> 
			</div>
			<div class='contactformulier'><?php echo do_shortcode('[contact-form-7 id="33" title="Contactformulier 1"]'); ?></div>
	</div>
	</div>
	
</div>

<?php get_footer(); ?>
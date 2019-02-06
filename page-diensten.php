<?php get_header(); ?>

<div class='subpage-layer'>	
	<div id="subpage-background" style="background-image:url(<?php the_post_thumbnail_url('home-banner') ?>)">	
	</div>
</div>

	<!--- Breadcrumb trail --->
	<div id="breadcrumbtrail">						
		<?php breadcrumb_trail(); ?> 
	</div>
	

<div id='diensten'>
	<h1>Wat doet Pool Consult?</h1>
		<img src="/wp-content/uploads/2018/11/icoontjebackground.png" width="70px" height="true">
		
		<div id="diensten-inleiding">			
		
			<!-- THE LOOP -->
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
			?>
				<?php the_content(); ?>
			<?php
			endwhile; else: ?>
			<p></p>
			<?php endif; ?> 
			<!-- END LOOP -->
			
		</div>
		
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
		
</div>


<?php get_footer(); ?>
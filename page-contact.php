<?php get_header(); ?>

<div class='subpage-layer'>	
	<div id="subpage-background" style="background-image:url(/wp-content/uploads/2018/11/4-1-e1542039249387.jpg)">	
	</div>
</div>

<div class='container-subpage'>
	<div class='inleiding-contact'>
		<h1><?php the_title(); ?></h1>
			<img src="/wp-content/uploads/2018/11/icoontjebackground.png" width="70px" height="true">
			
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

	<div class="flexbox-contact">
		<div class="contactform">
			<h2>Contactformulier</h2>
			<?php echo do_shortcode('[contact-form-7 id="33" title="Contactformulier 1"]'); ?>
		</div>
		
		<div class="contact-gegevens">
			<div class="contact-gegevens-detail">
				<h2>Contactgegevens</h2>
				<a href="callto:<?php the_field('telefoonnummer_zonder_spaties', 'option'); ?>" target="_blank"><i class="fas fa-phone"></i><?php the_field('telefoonnummer', 'option'); ?></a><br>
				<a href="mailto:<?php the_field('mailadres', 'option'); ?>"><i class="far fa-envelope"></i><?php the_field('mailadres', 'option'); ?> </a><br>
			</div>
			<div class="contact-gegevens-detail">
				<h2>Adresgegevens</h2>
					<?php the_field('adres_regel_1', 'option'); ?><br>
					<?php the_field('adres_regel_2', 'option'); ?><br><br>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
</div><!-- container -->
<div class="site-footer">

<div class="footer-flex">

	<div class="footer">
		<h3>Pool Consult</h3>
			<nav class="footer-nav">
					<?php
						$args = array(
						'theme_location' => 'footer'
						);
					?>
					<?php wp_nav_menu( $args ); ?>	
			</nav>		
	</div>
	
	<div class="footer">
		<h3>Bezoekadres</h3>
		<p><?php the_field('adres_regel_1', 'option'); ?></p><p><?php the_field('adres_regel_2', 'option'); ?></p>
	</div>
	
	<div class="footer">
		<h3>Vragen en contact</h3>
		<div class="contactfooter"><a href="callto:<?php the_field('telefoonnummer_zonder_spaties', 'option'); ?>" target="_blank"><i class="fas fa-phone"></i><?php the_field('telefoonnummer', 'option'); ?></a><br></div>
		<div class="contactfooter"><a href="mailto:<?php the_field('mailadres', 'option'); ?>" target="_blank"><i class="far fa-envelope"></i><?php the_field('mailadres', 'option'); ?> </a><br></div>
		<div class="contactfooter"><a href="" target="_blank">Algemene voorwaarden</a><br></div>
	</div>
	
</div>

	<div class="copyright">
		&copy; <?php echo date('Y');?> <?php bloginfo('name'); ?>
	</div>
</div>



<?php wp_footer(); ?>
	
</body>
</html>
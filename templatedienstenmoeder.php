<?php /* Template Name: Diensten template moederpagina
* Template Post Type: page
*/ ?>

<?php get_header(); ?>

<div class='subpage-layer'>	
	<div id="subpage-background" style="background-image:url(<?php the_post_thumbnail_url('full-banner') ?>)">	
	</div>
</div>

<div class='backgroundcontainer'>
<div class='container-diensten'>
	<!--- Breadcrumb trail --->
	<div id="breadcrumbtrail">						
		<?php breadcrumb_trail(); ?> 
	</div>
	
	<div class='icoon-diensten'>
		<img src="<?php the_field('logo_dienst'); ?>" width="130px" height="true" alt="Pool Consult">
		<h3><?php the_field('dienst_titel'); ?></h3>
	</div>
	<div class='inleiding-diensten'>
			<!-- THE LOOP -->
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
			?>
				<?php the_content(); ?>
			<?php
			endwhile; else: ?>
			<p></p>
			<?php endif; ?> 
			<!-- END LOOP -->
			<br>
	</div>
	<div class='sidebar'>
		<a class="button-diensten" href="/contact/">Neem contact op ></a>
	</div>
</div>
</div>


<?php get_footer(); ?>
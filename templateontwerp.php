<?php /* Template Name: Diensten template ontwerp
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
		<img src="http://poolconsult.nl/wp-content/uploads/2018/12/Ontwerp-l.png" width="130px" height="true" alt="Pool Consult">
		<h3>Ontwerp</h3>
		<div class='producten'>
		<p>zwembad, pool house, tuin en terras, buitenverlichting en zwembadinstallatie</p>
		</div>
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
<a href="http://poolconsult.nl/schetsontwerp/"><p>Schetsontwerp ></p></a>

<a href="http://poolconsult.nl/3d-animatie/"><p>3-D Animatie ></p></a>

<a href="http://poolconsult.nl/gerealiseerd-ontwerp/"><p>Gerealiseerd ontwerp ></p></a>

<a href="http://poolconsult.nl/ontwerp-detail/"><p>Ontwerp detail ></p></a>
		<a class="button-diensten" href="/contact/">Neem contact op ></a>

	</div>
</div>
</div>


<?php get_footer(); ?>
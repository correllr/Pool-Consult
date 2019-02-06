<!-- Header -->


<?php get_header();?>
	
<div class='subpage-layer'>	
	<div id="subpage-background" style="background-image:url(/wp-content/uploads/2018/11/4-1-e1542039249387.jpg)">	
	</div>
</div>

<div class='container-subpage'>

	
	<div class='inleiding-subpage'>
		<h1>Zoekresultaten voor jouw zoekopdracht: <?php the_search_query(); ?></h1>
		<img src="/wp-content/uploads/2018/11/icoontjebackground.png" width="70px" height="true">
	

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
		?>
		
				<div id='searchresults'>
				<h2><?php the_title(); ?></h2>
				<p><?php echo get_the_excerpt(); ?></p>
				<a href="<?php the_permalink(); ?>">Lees meer<i class="fas fa-angle-right"></i></a>
				</div>
				
		<?php
		endwhile; else: ?>
		<p>Er zijn geen resultaten voor jouw zoekopdracht</p>
		<?php endif; ?>
	
	</div>
	
</div>



<?php 

get_footer();

?>
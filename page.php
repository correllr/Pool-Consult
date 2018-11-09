<!--- Automatic template for all Pages (not posts) ---->
<?php get_header(); ?>





<!----------------- THE CONTENT --------------->
<div id="maintext">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
	the_content();
	endwhile; else: ?>
	<p>Sorry, no posts matched your criteria.</p>
	<?php endif; ?>
</div>

<div id="mainimage">
		<?php	
			if ( has_post_thumbnail() ) {
			the_post_thumbnail('medium');
			} 
		?>
</div>
<?php get_footer(); ?>
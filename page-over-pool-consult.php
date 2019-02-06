<?php get_header(); ?>

<div class='subpage-layer'>	
	<div id="subpage-background" style="background-image:url(<?php the_post_thumbnail_url('home-banner') ?>)">	
	</div>
</div>

<div class='container-subpage'>
	<!--- Breadcrumb trail --->
	<div id="breadcrumbtrail">						
		<?php breadcrumb_trail(); ?> 
	</div>
	
	<div class='inleiding-subpage'>
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
			<h1>Onze deskundigen</h1>
		<img src="/wp-content/uploads/2018/11/icoontjebackground.png" width="70px" height="true">
	<div class='flexbox'>
		<?php
				if( have_rows('deskundigen', 5) ):
				while ( have_rows('deskundigen', 5) ) : the_row();
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
				endif;
				?>
	</div>
		<a class="button-subpage" href="/contact/">Neem contact op ></a>
	</div>
</div>

<?php get_footer(); ?>
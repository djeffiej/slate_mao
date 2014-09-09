<?php
/*
Template Name: Page w/ sidebar on right
*/
?>

<?php get_header(); ?>
	<section class="content right-sidebar">
		<div class="u-gridContainer">
	        <div class="u-gridCol8">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article class="Content" id="post-<?php the_ID(); ?>">
						<h2><?php the_title(); ?></h2>
						<div>
							<?php the_content(); ?>
							<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
						</div>
					</article>
				<?php endwhile; endif; ?>       
	        </div>

  		  	<div id="sidebar" class="u-gridCol4">
 				<?php get_sidebar(); ?> 
	        </div>
		</div>
	</section>	
<?php get_footer(); ?>
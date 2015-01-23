<?php
/*
Template Name: Landingspage
*/
?>
<div class="home">
<?php get_header(); ?>
</div>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<section class="content right-sidebar">
		<div class="u-gridContainer">
	        <div class="u-gridRow">
		        <div class="u-gridCol8">
						<article class="Content" id="post-<?php the_ID(); ?>">
							<h2><?php the_title(); ?></h2>
							<div>
								<?php the_content(); ?>
								<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
							</div>
						</article>
		        </div>

	  		  	<div id="sidebar" class="u-gridCol4">
	 				<?php get_sidebar(); ?> 
		        </div>
	    	</div>
	        <div class="u-gridRow">
	        	<h2>Wat is succesvol zaken doen met een <?php echo get_field('dienst'); ?> uit <?php echo get_field('plaats'); ?>?</h2>
				<div class="u-gridCol4"> 
					<h3>DE HEDENDAAGSE KLANT</h3>
					<p>De hedendaagse klant bepaalt zijn voorkeur voor een bedrijf of organisatie ook op basis van het imago. Naast alle kwaliteiten van de producten of diensten is de indruk die men van de mensen heeft erg belangrijk.</p>
				</div>
				<div class="u-gridCol4">
					<h3>PEOPLE BUSINESS</h3>
					<p>En daarmee komen we bij de kern: zakendoen blijft altijd ‘peoples business’. Sympathie en waardering -zo blijkt uit onderzoek- spelen vaak een doorslaggevende rol in het doen van zaken.</p>
				</div>
				<div class="u-gridCol4">
					<h3>GUNNEN EN VERTROUWEN</h3>
					<p>En daar sluiten de oeroude Hollandse koopmansprincipes als ‘gunnen en vertrouwen’ naadloos bij aan. Wij nodigen u van harte uit om te kijken wat wij voor u en uw onderneming kunnen betekenen.</p>
				</div>
			</div>
		</div>
	</section>
	<?php endwhile; endif; ?>       
	
<?php get_footer(); ?>
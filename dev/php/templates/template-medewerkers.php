<?php
/*
Template Name: Medewerkers
*/
?>

<?php get_header(); ?>

	<section class="content">
		<div class="u-gridContainer medewerker">
			<h2> <?php the_title(); ?> </h2>
			<?php
				$args = array(
					'post_type' => 'medewerker',
					'nopaging' => true
				);
				$aanbiedingen = new WP_Query( $args );
				if( $aanbiedingen->have_posts() ) {
					$counter = 1;

					while( $aanbiedingen->have_posts() ) {
						$numColumns = 3;
						if($counter % $numColumns == 1) {
							echo '<div class="u-gridRow">';
						}	

						$aanbiedingen->the_post();
						?>

						<div class="u-gridCol4">
							<?php
							$image = get_field('medewerker_afbeelding');
							 
							if( !empty($image) ): ?>
							 
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
							 
							<?php endif; ?>			
												
				        	<h3><?php echo the_title();?> <span class="super">(<?php echo get_field('medewerker_functie'); ?>) </span></h3> 

				            <p><?php echo get_field('medewerker_beschrijving'); ?></p>       
				        </div>

						<?php

						if($counter % $numColumns == 0) {
							echo '</div>';
						}

						$counter++;
					}
				}
				else {
					echo '<p>Er zijn momenteel geen medewerkers</p>';
				}
			?>
		</div>

	</section>

<?php get_footer(); ?>
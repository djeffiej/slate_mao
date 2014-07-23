<?php
/*
Template Name: Medewerkers
*/
?>

<?php get_header(); ?>

	<section class="content">
		<div class="u-gridContainer">
			<?php
				$args = array(
					'post_type' => 'merk',
					'nopaging' => true
				);
				$aanbiedingen = new WP_Query( $args );
				if( $aanbiedingen->have_posts() ) {
					$counter = 1;

					while( $aanbiedingen->have_posts() ) {
						$numColumns = 4;
						if($counter % $numColumns == 1) {
							echo '<div class="u-gridRow">';
						}	

						$aanbiedingen->the_post();
						?>

						<div class="u-gridCol3">
							<?php
							$image = get_field('medewerker_afbeelding');
							 
							if( !empty($image) ): ?>
							 
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
							 
							<?php endif; ?>			
												
				        	<h3><?php echo get_field('medewerker_naam');  ?></h3>

				        	<p><?php echo get_field('medewerker_functie'); ?></p> 

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
					echo '<p>Er zijn momenteel geen werknemers</p>';
				}
			?>
		</div>

		<?php get_sidebar(); ?>

	</section>

<?php get_footer(); ?>
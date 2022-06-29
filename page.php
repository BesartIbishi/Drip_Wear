<?php
/**
 * The template for displaying all pages
 *
 * @package Drip Wear
 */

get_header();
?>

		<div class="content-area">
			<main>
				<div class="container">
					<div class="row"></div>
				</div>
				<div class="container">
					<div class="row">
					<?php 
								// If there are any posts
								if( have_posts() ):

									// Load posts loop
									while( have_posts() ): the_post();
										?>
											<article class="col">
												<h2><?php the_title(); ?></h2>
												<div><?php the_content(); ?></div>
											</article>
										<?php
									endwhile;
								else:
							?>
								<p>Nothing to display.</p>
							<?php endif; ?>

					</div>
				</div>
				
			</main>
		</div>
<?php get_footer(); ?>
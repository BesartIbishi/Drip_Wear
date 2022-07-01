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
					<div class="row">
						<?php 
							// Load posts loop
							while( have_posts() ): the_post();
								?>
									<article class="col">
										<h1><?php the_title(); ?></h1>
										<div><?php the_content(); ?></div>
									</article>
								<?php
							endwhile;
						?>
					</div>
				</div>
			</main>
		</div>
<?php get_footer(); ?>
<?php
/**
 * The main template file
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
								// If there are any posts
								if( have_posts() ):

									// Load posts loop
								while( have_posts() ): the_post();
								?>
									<article <?php post_class(); ?>>
										<h2>
											<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
										</h2>
										<div class="post-thumbnail">
											<?php 
											if( has_post_thumbnail() ):
												the_post_thumbnail( 'drip-wear-blog', array( 'class' => 'img-fluid' ) );
											endif;
											?>
										</div>
										<div class="meta">
											<p>Published by <?php the_author_posts_link(); ?> on <?php echo get_the_date(); ?>
											<br />
											<?php if( has_category() ): ?>
												Categories: <span><?php the_category( ' ' ); ?></span>
											<?php endif; ?>
											<br />
											<?php if( has_tag() ): ?>
												Tags: <span><?php the_tags( '', ', ' ); ?></span>
											<?php endif; ?>
											</p>
										</div>
										<div><?php the_excerpt(); ?></div>
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
<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Drip Wear
 */

get_header();
?>
		<div class="content-area">
			<main>
				<div class="container">
					<div class="row">
				<div class="col-lg-9 col-md-8 col-12">
						<h1><?php esc_html_e('Search results for:', 'drip-wear'); ?> <?php echo get_search_query(); ?></h1>

						<?php 

						//get_search_form();

							// If there are any posts
							if( have_posts() ):

								// Load posts loop
								while( have_posts() ): the_post();
									get_template_part( 'template-parts/content', 'search' );
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

								// We're using numeric page navigation here.
								the_posts_pagination( array(
									'prev_text'		=> esc_html__('Previous','drip-wear'), 
									'next_text'=> esc_html__('Next','drip-wear'),
								));
								
							else:
						?>
							
						<?php endif; ?>
					</div>
				</div>
			</main>
		</div>
<?php get_footer(); ?>
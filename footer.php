<?php
/**
 * The template for displaying the footer
 *
 * @package Drip Wear
 */

?>


<footer>
			<section class="footer-widgets">
					<div class="container">
					<div class="row">Footer Widgets</div>
				</div>

			</section>
			<section class="copyright">
					<div class="container">
					<div class="row">
					 <div class="copyright-text col-12 col-md-6">
						<p><?php echo get_theme_mod( 'set_copyright', 'Copyright' ); ?></p>
					 </div>
					 <nav class="footer-menu col-12 col-md-6 text-left text-md-right">
					<?php  
					 wp_nav_menu( 
						array(
							'theme_location' => 'drip_wear_footer_menu'
						)
					  )
					?>

					 </nav>

					</div>
				</div>

			</section>
		</footer>
	</div>
	<?php wp_footer(); ?>
</body>
</html>
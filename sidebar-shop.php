<?php
/**
 * The template for the sidebar containing the shop widget area
 *
 * @package Drip Wear
 */
?>

<?php if( is_active_sidebar( 'drip-wear-sidebar-shop' ) ): ?>
	
		<?php dynamic_sidebar( 'drip-wear-sidebar-shop' ); ?>

<?php endif;
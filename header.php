<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Drip Wear
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="page" class="site">
		<header>
			<section class="search">
				<div class="container">
					Search
				</div>		
			</section>
			<section class="top-bar">
					<div class="container">
						<div class="row">
							<div class="brand col-3">Logo</div>
							<div class="second-column col-9 ">
							<div class="acount">Account</div>
							<nav class="main-menu">
								<?php 
									wp_nav_menu( 
										array(
											'theme_location' => 'drip_wear_main_menu'
										)
									);
								?>
							</nav>
						</div>
					</div>		
				</div>
			</section>
		</header>
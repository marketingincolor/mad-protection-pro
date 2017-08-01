<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<header class="site-header" role="banner">
		<nav class="site-navigation top-bar" role="navigation">
			<div class="row">
				<div class="small-12 columns">
					<div class="top-bar-left">
						<div class="site-desktop-title top-bar-title">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php bloginfo('template_directory'); ?>/assets/images/nav-logo.png" alt="Protection Pro"></a>
						</div>
					</div>
					<div class="top-bar-right">
						<span class="login">
							<a href="#!">Reports Login <i class="fa fa-lock" aria-hidden="true"></i></a>
						</span>
						<?php foundationpress_top_bar_r(); ?>

						<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
							<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
						<?php endif; ?>
						<i class="fa fa-bars cheeseburger" data-toggle="mobile-menu" aria-hidden="true"></i>
						<div class="full reveal" id="mobile-menu" data-reveal  data-animation-in="spin-in" data-animation-out="spin-out">
						  <img src="http://placekitten.com/1920/1280" alt="Introspective Cage">
						  <button class="close-button" data-close aria-label="Close reveal" type="button">
						    <span aria-hidden="true">&times;</span>
						  </button>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</header>

	<section class="container">
		<?php do_action( 'foundationpress_after_header' );

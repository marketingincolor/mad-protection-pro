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
		<script src="https://www.youtube.com/iframe_api"></script>
		<?php $options = get_option('mic_theme_options');echo html_entity_decode( $options['gtm_code_head']); ?>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php if (is_page('consumer-success','thank-you-distributor','distributor-success','retailer-success','success')) { ?>
			<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
		<?php } ?>
		<style>.partner-logos{display:flex;list-style-type:none;align-items:center}</style>
		<?php wp_head(); ?>
	</head>

	<?php
		switch (ICL_LANGUAGE_CODE) {
			case 'es':
				$lang = 'es';
				break;
			case 'it':
				$lang = 'it';
				break;
			default:
				$lang = 'en';
				break;
		}
	?>
	<body <?php body_class($lang); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<!-- <header class="site-header" role="banner"> -->
		<nav class="site-navigation top-bar" role="navigation">
			<div class="row">
				<div class="small-12 columns">
					<div class="top-bar-left">
						<div class="site-desktop-title top-bar-title">
							<a href="<?php if(is_page_template('page-translation-success.php')){echo $_SERVER['HTTP_REFERER'];}else{echo esc_url( home_url( '/' ) );} ?>" rel="home"><img src="<?php bloginfo('template_directory'); ?>/assets/images/protectionpro-logo-white.svg" alt="Protection Pro"></a>
						</div>
					</div>
					<div class="top-bar-right">
						<span class="languages show-for-small">
							<?php icl_post_languages(); ?>
						</span>
					</div>
				</div>
			</div>
		</nav>
	<!-- </header> -->
	<script>templateURL = '<?php bloginfo("template_directory"); ?>';</script>

	<section class="container">
		<?php do_action( 'foundationpress_after_header' );

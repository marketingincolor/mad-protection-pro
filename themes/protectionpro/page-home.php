<?php
	/*
	Template Name: Home
	*/
	get_header(); 
	$bg_img = wp_get_attachment_url(get_post_thumbnail_id( $post->ID ));
?>

<!-- Hero Section -->
<section class="large-hero">
	<video src="<?php the_field('video_url'); ?>" autoplay="" loop="" muted="" preload="auto"></video>
	<center class="center">
		<h1><?php the_field('hero_title'); ?></h1>
		<p><?php the_field('hero_body'); ?></p>
		<div class="button-group play-group" data-open="video-modal">
		  <a href="#" class="button play-text"><?php the_field('play_button_text'); ?></a>
		  <a href="#" class="button play-container"><div class="play-button"></div></a>
		</div><br class="show-for-small-only" />
		<div class="button-group">
			<a href="#" class="button learn-more"><?php the_field('learn_more_button_text'); ?></a>
		</div>
	</center>
	<!-- video modal -->
	<div id="video-modal" class="small reveal" data-reveal aria-labelledby="videoModalTitle" aria-hidden="true" role="dialog">
	  <div class="flex-video widescreen">
	  	<h2></h2>
	    <video src="<?php the_field('video_url'); ?>" controls autoplay></video>
	  </div>
	  <button class="close-button" data-close aria-label="Close modal" type="button">
	    <span aria-hidden="true">&times;</span>
	  </button>
	</div>
</section>

<section class="phone-bg">
	<img src="<?php the_field('top_phone_img_bg'); ?>" alt="">
</section>

<!-- Advantages section -->
<section class="advantages">
	<div class="row">
		<div class="large-8 large-offset-2 large-10 large-offset-1 columns">
			<center>
				<h3><?php the_field('advantage_title'); ?></h3>
				<hr class="yellow-line">
				<p class="advantage-body"><?php the_field('advantage_body'); ?></p>
			</center>
		</div>

		<?php
		// Query custom post type "advantage"

		$args = array(
			'post_type'      => 'advantage',
			'orderby'        => 'menu_order',
			'order'          => 'ASC'
		);

		$the_query = new WP_Query($args);
		$count     = 0;

		if ( $the_query->have_posts() ) {
			while ( $the_query->have_posts() ) {
				$the_query->the_post();
				$count++;
		?>
		<?php if ($count % 2 == 0): ?>
			<div class="medium-6 medium-offset-1 columns">
		<?php else: ?>
			<div class="medium-5 columns">
		<?php endif ?>

			<div class="row">
				<div class="medium-2 small-3 columns">
					<?php the_post_thumbnail(); ?>
				</div>
				<div class="medium-10 small-9 columns">
					<h4 class="advantages-title"><?php the_title(); ?></h4>
					<p class="advantages-body"><?php echo get_the_content(); ?></p>
				</div>
			</div>
		</div>
			<?php if ($count % 2 == 0): ?>
				<div class="clearfix show-for-medium-only"></div>
			<?php endif ?>

		<?php }} wp_reset_postdata(); ?>

	</div>
</section>

<!-- Cutters Section -->
<?php $cutter_bg_img = get_field('cutters_bg_img'); ?>

<section class="cutters" style="background-image: url(<?php the_field('cutters_bg_img'); ?>);">
	<div class="row">
		<div class="small-12 columns">
			<h5><?php the_field('home_cutters_title'); ?></h5>
			<hr class="yellow-line">
		</div>

		<?php for ($count=1; $count < 4; $count++) { ?> 

		<div class="medium-4 columns">
			<h4 class="cutter-title"><?php the_field('cutter'.$count.'_title'); ?></h4>
			<p class="cutter-body"><?php the_field('cutter'.$count.'_body'); ?></p>
			<?php if ($count == 1) { ?>
				<a href="#!" class="button btn-white hide-for-small-only"><?php the_field('cutter_button_text'); ?></a>
			<?php } ?>
		</div>

		<?php } ?>
		<div class="small-12 columns show-for-small-only">
			<a href="#!" class="button btn-white"><?php the_field('cutter_button_text'); ?></a>
		</div>

	</div>
</section>

<!-- Protection Pro Film Section -->

<section class="protectionpro-film" style="background-image: url(<?php the_field('protection_bg_img'); ?>);">
	<div class="row">
		<div class="medium-6 medium-offset-6 columns">
			<h5><?php the_field('protection_title'); ?></h5>
			<hr class="yellow-line">
			<div class="clearfix"></div>
			<p><?php the_field('protection_body'); ?></p>
			<a href="#!" class="button btn-black"><?php the_field('protection_button'); ?></a>
		</div>
	</div>
</section>

<!-- Case Studies Section -->

<section class="home-case-studies" style="background-image: url(<?php the_field('home_case_studies_bg'); ?>);">
	<div class="row">
		<div class="medium-6 columns">
			<h3><?php the_field('home_case_studies_title'); ?></h3>
			<hr class="yellow-line">
			<div class="clearfix"></div>
			<p><?php the_field('home_case_studies_body'); ?></p>

			<?php
			// Query custom post type "case_studies" to get 
			// featured case studies only

			$args = array(
				'post_type'      => 'case_studies',
				'orderby'        => 'menu_order',
				'order'          => 'ASC',
				'posts_per_page' => 2,
				'tax_query' => array(
						array(
							'taxonomy' => 'home_case_study',
							'field'    => 'slug',
							'terms'    => 'home_page',
						),
					),
			);

			$the_query = new WP_Query($args);

			if ( $the_query->have_posts() ) {
				while ( $the_query->have_posts() ) {
					$the_query->the_post();
					$count++;
			?>

			<div class="featured-case-study">
				<h5 class="red-title"><?php the_title(); ?></h5>
				<p><?php echo wp_trim_words(get_the_content(),20,'...') ?></p>
				<a href="<?php the_permalink(); ?>" class="read-more clearfix"><strong>Read More »</strong></a>
			</div>

			<?php }} wp_reset_postdata(); ?>

			<a href="#!" class="button btn-black"><?php the_field('home_case_studies_button_text'); ?></a>
		</div>
	</div>
</section>

<?php get_footer(); ?>
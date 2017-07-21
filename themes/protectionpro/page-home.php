<?php
	/*
	Template Name: Home
	*/
	get_header(); 
	$bg_img = wp_get_attachment_url(get_post_thumbnail_id( $post->ID ));
?>

<section class="large-hero">
	<div class="hero-bg" style="background-image: url(<?php echo $bg_img; ?>);">
		<div class="row">
			<div class="small-12 columns">
				<center class="center">
					<h1>Every Screen is a Customer—and a Sale.</h1>
					<p>Reduce Inventory costs.  Increase profits.  Maximize shelf space.</p>
					<div class="button-group play-group">
					  <a href="#" class="button play-text">Play Video</a>
					  <a href="#" class="button play-container"><div class="play-button"></div></a>
					</div>
					<div class="button-group">
						<a href="#" class="button learn-more">Learn More</a>
					</div>
				</center>
			</div>
		</div>
	</div>
</section>

<section class="phone-bg">
	<img src="<?php bloginfo('template_directory'); ?>/assets/images/phone-bg.jpg" alt="">
</section>

<section class="advantages">
	<div class="row">
		<div class="small-12 medium-8 medium-offset-2 columns">
			<center>
				<h3><?php the_field('advantage_title'); ?></h3>
				<hr class="yellow-line">
				<p class="advantage-body"><?php the_field('advantage_body'); ?></p>
			</center>
		</div>

		<?php

		$args = array(
			'post_type'      => 'advantage',
			'orderby'        => 'menu_order',
			'order'          => 'ASC'
		);

		$the_query = new WP_Query( $args );
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
				<div class="medium-2 columns">
					<?php the_post_thumbnail(); ?>
				</div>
				<div class="medium-10 columns">
					<h4 class="advantages-title"><?php the_title(); ?></h4>
					<p class="advantages-body"><?php echo get_the_content(); ?></p>
				</div>
			</div>
		</div>

		<?php }} wp_reset_postdata(); ?>

	</div>
</section>

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
				<a href="#!" class="button btn">Compare Models</a>
			<?php } ?>
		</div>

		<?php } ?>

	</div>
</section>

<?php get_footer(); ?>
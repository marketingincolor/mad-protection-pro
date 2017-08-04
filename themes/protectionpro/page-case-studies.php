<?php
	/*
	Template Name: Case Studies
	*/
	get_header(); 
	$feat_img = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
	get_template_part('template-parts/top-bg');
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="case-studies">
	<div class="row">
		<div class="large-8 large-offset-2 medium-10 medium-offset-1 columns text-center">
			<h1><?php the_title(); ?></h1>
			<hr class="yellow-line">
			<p class="body"><?php the_content(); ?></p>
		</div>
	</div>
</section>

<section class="store-study">
	<div class="row expanded">

	<?php
	// Query custom post type "case_studies" to get 
	// featured case study only

	$args = array(
		'post_type'      => 'case_studies',
		'tax_query'      => array(
			array(
				'taxonomy'   => 'home_case_study',
				'field'      => 'slug',
				'terms'      => 'featured',
			),
		),
	);

	$the_query = new WP_Query($args);

	if ( $the_query->have_posts() ) {
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
	?>

		<div class="medium-8 columns">
			<?php the_post_thumbnail( 'full' ); ?>
		</div>
		<div class="medium-6 large-5 columns">
			<div class="black-bg">
				<h4 class="red-title"><?php the_title(); ?></h4>
				<p class="location"><?php the_field('store_location'); ?></p>
				<p><?php echo wp_trim_words(get_the_content(),20,'...'); ?></p>
				<a href="<?php the_permalink(); ?>" class="button btn-white"><?php the_field('store_button_text'); ?></a>
			</div>
		</div>
		

	<?php }} wp_reset_postdata(); ?>


	</div>
</section>

<section class="case-studies">
	<div class="row">

	<?php 
	// Query custom post type "case_studies" to get 
	// product page case study only
	$count = 0;
	$args = array(
		'post_type'      => 'case_studies',
		'posts_per_page' => 4,
		'tax_query'      => array(
			array(
				'taxonomy'   => 'home_case_study',
				'field'      => 'slug',
				'terms'      => array('home_page', 'product_page','standard'),
			),
		),
	);

	$the_query = new WP_Query($args);

	if ( $the_query->have_posts() ) {
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
	?>
		<div class="large-3 medium-6 columns">
			<div class="study-container">
				<?php the_post_thumbnail( 'full' ); ?>
				<aside class="case-meta">
					<h5 class="red-title"><?php the_title(); ?></h5>
					<p><?php echo wp_trim_words(get_the_content(),20,'...'); ?></p>
					<a href="<?php the_permalink(); ?>" class="button"><?php the_field('store_button_text'); ?></a>
				</aside>
			</div>
		</div>

		<?php $count++; ?>
		<?php if ($count % 2 == 0) { ?>
			<div class="clearfix show-for-medium-only"></div>
		<?php } ?>

	<?php }} wp_reset_postdata(); ?>

	</div>
</section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
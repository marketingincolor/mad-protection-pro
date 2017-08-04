<?php
	get_header(); 
	get_template_part('template-parts/top-bg');
	$featured_img_array = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
	$featured_img       = $featured_img_array[0];
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<!-- Save current post ID for later -->
	<?php $post_id = get_the_ID(); ?>

	<section class="case-study-single hide-for-small-only">
		<div class="row">
			<div class="large-8 large-offset-2 medium-10 medium-offset-1 columns text-center">
				<h1><?php the_title(); ?></h1>
				<hr class="yellow-line">
				<p class="excerpt"><?php the_field('header_text',125); ?></p>
			</div>
			<div class="large-10 large-offset-1 columns end">
				<?php the_post_thumbnail( 'full' ); ?>
			</div>
			<div class="large-8 large-offset-2 medium-10 medium-offset-1 columns end">
				<article class="body">
					<?php the_content(); ?>
					<a href="#!" class="btn button">Share Case Study</a>
					<a href="/case-studies" class="btn button">View More Case Studies</a>
				</article>
			</div>
		</div>
	</section>

	<section class="case-study-single show-for-small-only">
		<div class="row-expanded">
			<div class="small-12 single-bg" style="background: url(<?php echo $featured_img; ?>) center center no-repeat;background-size:cover;">
			</div>
		</div>
		<div class="row">
			<section class="single-body">
				<div class="large-10 large-offset-1 columns end">
					<h1><?php the_title(); ?></h1>
					<hr class="yellow-line">
				</div>
				<div class="large-8 large-offset-2 medium-10 medium-offset-1 columns end">
					<article class="body">
						<?php the_content(); ?>
						<a href="#!" class="btn button">Share Case Study</a>
						<a href="/case-studies" class="btn button">View More Case Studies</a>
					</article>
				</div>
			</section>
		</div>
	</section>

<?php endwhile; endif; ?>

<section class="case-studies">
	<div class="row">
	<div class="large-12 columns">
		<h4 class="red-title">More Case Studies</h4>
	</div>
	<?php 
	// Query custom post type "case_studies" to get 
	// product page case study only
	$count = 0;
	$args  = array(
		'post_type'      => 'case_studies',
		'posts_per_page' => 4,
		'post__not_in'   => array($post_id),
	);

	$the_query = new WP_Query($args);

	if ( $the_query->have_posts() ) {
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
			if($post_id != get_the_ID()) {
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

	<?php }}} wp_reset_postdata(); ?>

</section>



<?php get_footer(); ?>
<?php
	/*
	Template Name: Products
	*/
	get_header(); 
	$bg_img = wp_get_attachment_url(get_post_thumbnail_id( $post->ID ));
?>

<!-- Hero Section -->
<section class="large-hero products-hero" style="background-image: url(<?php echo $bg_img; ?>);">
	<div class="row">
		<div class="small-12 medium-6 columns">
			<div class="center-vert">
				<h2><?php the_field('hero_title'); ?></h2>
				<hr class="yellow-line">
				<div class="clearfix"></div>
				<p><?php the_field('hero_body'); ?></p>
			</div>
		</div>
	</div>
</section>

<!-- Sales Wheel Section -->
<section class="sales-wheel">
	<div class="row">
		<div class="medium-8 column medium-offset-2 text-center">
			<h3><?php the_field('sales_wheel_title'); ?></h3>
			<hr class="yellow-line">
			<p><?php the_field('sales_wheel_body'); ?></p>
		</div>
		<div class="medium-12 columns">
			<div class="wheel-bg" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/sales-wheel-bg.jpg);">
				<div class="row">
					<div class="medium-3 medium-offset-1 columns text-right">
						<h4 class="red-title">Increase Sales Monthly</h4>
						<p>Retail shops can produce protectors for every device that comes in the door.</p>
					</div>
					<div class="medium-3 medium-offset-4 columns text-left">
						<h4 class="red-title">Free up shelf space</h4>
						<p>ProtectionPro frees up shelf space. Retailers don't have to stock up on product.</p>
					</div>
					<div class="medium-3 columns text-right">
						<h4 class="red-title">Reduce inventory costs</h4>
						<p>No more stocking of outdated protectors for the few customers that may need them.</p>
					</div>
					<div class="medium-3 medium-offset-6 columns text-left">
						<h4 class="red-title">Go Green</h4>
						<p>ProtectionPro is a green solution to packaging.</p>
					</div>
					<div class="clearfix"></div>
					<div class="medium-3 medium-offset-1 columns text-right">
						<h4 class="red-title">Improve Profits</h4>
						<p>Significantly reduce inventory carrying costs. Eliminate the risk of inventory loss and damage.</p>
					</div>
					<div class="medium-3 medium-offset-4 columns end text-left">
						<h4 class="red-title">Time to Market</h4>
						<p>Screen protectors and full body protection designs are ready to sell on the day a product is released.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="hardware-table clearfix">
	<div class="row">
		<div class="medium-8 medium-offset-2 columns text-center">
			<h3>A Hardware Solution for Every Need</h3>
			<hr class="yellow-line">
			<p class="hardware-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In pretium, neque eget eleifend commodo, tortor lorem mattis mauris, nec facilisis nulla nibh in mi.</p>
		</div>
		<div class="medium-12 columns text-center">
			<div class="row collapse">
				<div class="medium-4 columns">
					<h3 class="red-title"><?php the_field('express_title'); ?></h3>
					<img src="<?php the_field('express_image'); ?>" alt="">
					<p><?php the_field('express_body'); ?></p>
					<ul>
						<li><?php the_field('express_dimensions') ?></li>
						<li><?php the_field('express_weight') ?></li>
						<li><?php the_field('express_sizes') ?></li>
						<li><?php the_field('express_types') ?></li>
						<li><?php the_field('express_usage') ?></li>
						<li><?php the_field('express_volume') ?></li>
						<li><?php the_field('express_retail') ?></li>
					</ul>
				</div>
				<div class="medium-4 columns">
					<h5><?php the_field('elite_recommended'); ?></h5>
					<h3 class="red-title"><?php the_field('elite_title'); ?></h3>
					<img src="<?php the_field('elite_image'); ?>" alt="">
					<p><?php the_field('elite_body'); ?></p>
					<ul>
						<li><?php the_field('elite_dimensions') ?></li>
						<li><?php the_field('elite_weight') ?></li>
						<li><?php the_field('elite_sizes') ?></li>
						<li><?php the_field('elite_types') ?></li>
						<li><?php the_field('elite_usage') ?></li>
						<li><?php the_field('elite_volume') ?></li>
						<li><?php the_field('elite_retail') ?></li>
					</ul>
				</div>
				<div class="medium-4 columns">
					<h3 class="red-title"><?php the_field('lite_title'); ?></h3>
					<img src="<?php the_field('lite_image'); ?>" alt="">
					<p><?php the_field('lite_body'); ?></p>
					<ul>
						<li><?php the_field('lite_dimensions') ?></li>
						<li><?php the_field('lite_weight') ?></li>
						<li><?php the_field('lite_sizes') ?></li>
						<li><?php the_field('lite_types') ?></li>
						<li><?php the_field('lite_usage') ?></li>
						<li><?php the_field('lite_volume') ?></li>
						<li><?php the_field('lite_retail') ?></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="touchscreen" style="background-image: url(<?php the_field('touchscreen_bg'); ?>);">
	<div class="row">
		<div class="medium-6 medium-offset-6 columns">
			<h3><?php the_field('touchscreen_title'); ?></h3>
			<hr class="yellow-line">
			<p><?php the_field('touchscreen_body'); ?></p>
			<ul>

				<?php for ($i=1; $i < 9; $i++) { ?>
					<li><?php the_field('touchscreen_check'); ?>&nbsp;&nbsp; <?php the_field('touchscreen_item'.$i); ?></li>
				<?php } ?>

			</ul>
		</div>
	</div>
</section>

<section class="library" style="background-image: url(<?php the_field('library_bg'); ?>);">
	<div class="row">
		<div class="medium-6 columns">
			<h3><?php the_field('library_title'); ?></h3>
			<hr class="yellow-line">
			<div class="clearfix"></div>
			<p><?php the_field('library_body'); ?></p>
			<a href="#!" class="button btn-white"><?php the_field('library_button_text'); ?></a>
		</div>
	</div>
</section>

<section class="store-study">
	<div class="row">
		<div class="medium-8 medium-offset-2 columns text-center">
			<h3><?php the_field('store_title'); ?></h3>
			<hr class="yellow-line">
			<p><?php the_field('store_body'); ?></p>
		</div>
	</div>
	<div class="row expanded">

	<?php
	// Query custom post type "case_studies" to get 
	// product page case study only

	$args = array(
		'post_type'      => 'case_studies',
		'tax_query'      => array(
			array(
				'taxonomy'   => 'home_case_study',
				'field'      => 'slug',
				'terms'      => 'product_page',
			),
		),
	);

	$the_query = new WP_Query($args);

	if ( $the_query->have_posts() ) {
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
	?>

		<div class="medium-7 large-8 columns">
			<?php the_post_thumbnail( 'full' ); ?>
		</div>
		<div class="medium-6 large-5 columns">
			<div class="black-bg">
				<h4 class="red-title"><?php the_title(); ?></h4>
				<p class="location"><?php the_field('store_location'); ?></p>
				<p><?php echo wp_trim_words(get_the_content(),20,'...'); ?></p>
				<a href="#!" class="button btn-white"><?php the_field('store_button_text'); ?></a>
			</div>
		</div>
		

	<?php }} wp_reset_postdata(); ?>


	</div>
</section>

<section class="product-faqs">
	<div class="row">
		<div class="medium-8 medium-offset-2 columns text-center">
			<h3><?php the_field('faq_title'); ?></h3>
			<hr class="yellow-line">
			<p><?php the_field('faq_body'); ?></p>
		</div>
		<div class="large-10 large-offset-1 columns end">
			<div class="row">
				<?php
				// Query custom post type "faqs" to get 
				// product page FAQs only

				$args = array(
					'post_type'      => 'faqs',
					'posts_per_page' => 6,
					'tax_query'      => array(
						array(
							'taxonomy'   => 'faq_category',
							'field'      => 'term_id',
							'terms'      => array(10,11,12,13,14)
						),
					)
				);
				$count = 1;
				$the_query = new WP_Query($args);

				if ( $the_query->have_posts() ) {
					while ( $the_query->have_posts() ) {
						$the_query->the_post();
				?>

				<div class="medium-6 columns<?php if($count==6){echo ' end';} ?>">
					<div class="product-faq">
						<h5 class="red-title"><?php the_title(); ?></h5>
						<?php the_content(); ?>
					</div>
				</div>
				<?php if($count %2==0) { ?>
				<div class="clearfix"></div>
				<?php } ?>
				<?php $count++; ?>
				<?php }} wp_reset_postdata(); ?>
			</div>
			<div class="text-center">
				<a href="#!" class="button btn-black"><?php the_field('faq_button_text'); ?></a>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
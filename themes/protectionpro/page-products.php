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
					<div class="medium-3 medium-offset-4 columns text-left">
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
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In pretium, neque eget eleifend commodo, tortor lorem mattis mauris, nec facilisis nulla nibh in mi.</p>
		</div>
	</div>
</section>

<?php get_footer(); ?>
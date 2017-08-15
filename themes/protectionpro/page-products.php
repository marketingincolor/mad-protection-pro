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

<section class="product-advantage">
	<div class="row">
		<div class="large-8 large-offset-2 medium-10 medium-offset-1 columns end text-center">
			<h2><?php the_field('product_advantage_title'); ?></h2>
			<hr class="yellow-line">
			<p class="body"><?php the_field('product_advantage_body'); ?></p>
		</div>
		<div class="large-5 large-offset-1 medium-6 columns">
			<ul>
				<?php if(get_field('product_advantage1')) { ?>
				<li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp; <?php the_field('product_advantage1'); ?></li>
				<?php } ?>

				<?php if(get_field('product_advantage3')) { ?>
				<li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp; <?php the_field('product_advantage3'); ?></li>
				<?php } ?>

				<?php if(get_field('product_advantage5')) { ?>
				<li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp; <?php the_field('product_advantage5'); ?></li>
				<?php } ?>

				<?php if(get_field('product_advantage7')) { ?>
				<li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp; <?php the_field('product_advantage7'); ?></li>
				<?php } ?>

			</ul>
		</div>
		<div class="large-5 medium-6 columns end">
			<ul>
				<?php if(get_field('product_advantage2')) { ?>
				<li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp; <?php the_field('product_advantage2'); ?></li>
				<?php } ?>

				<?php if(get_field('product_advantage4')) { ?>
				<li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp; <?php the_field('product_advantage4'); ?></li>
				<?php } ?>

				<?php if(get_field('product_advantage6')) { ?>
				<li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp; <?php the_field('product_advantage6'); ?></li>
				<?php } ?>

				<?php if(get_field('product_advantage8')) { ?>
				<li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp; <?php the_field('product_advantage8'); ?></li>
				<?php } ?>
			</ul>
		</div>
	</div>
</section>

<section class="hardware-table clearfix" id="hardware-comparison">
	<div class="row">
		<div class="large-8 large-offset-2 medium-10 medium-offset-1 columns text-center">
			<h3>A Hardware Solution for Every Need</h3>
			<hr class="yellow-line">
			<p class="hardware-body">ProtectionPro offers three different size cutters, each designed for specific retailers, devices, and volume of usage per week.</p>
		</div>
		<div class="medium-12 columns text-center">
			<div class="row collapse hide-for-small-only">
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

			<div class="row show-for-small-only">
				<img class="slide-img" src="<?php bloginfo('template_directory'); ?>/assets/images/slide-compare.jpg" alt="slide left to compare">
				<img class="slide-img-right" src="<?php bloginfo('template_directory'); ?>/assets/images/slide-right.jpg" alt="slide right to compare">
				
				<div class="compare-carousel owl-carousel owl-theme">
			    <div class="item">
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
			    </div>
			    <div class="item">
			    	<div class="medium-4 columns middle-column">
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
			    </div>
			    <div class="item">
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
		</div>
	</div>
</section>

<section class="touchscreen" style="background-image: url(<?php the_field('touchscreen_bg'); ?>);">
	<div class="row">
		<div class="large-6 large-offset-6 columns">
			<div class="text-center">
				<img src="<?php bloginfo('template_directory'); ?>/assets/images/touchscreen-top.jpg" alt="protection pro touchscreen" class="hide-for-large">
			</div>
			<h3><?php the_field('touchscreen_title'); ?></h3>
			<hr class="yellow-line">
			<div class="clearfix"></div>
			<p><?php the_field('touchscreen_body'); ?></p>
			<ul>

				<?php for ($i=1; $i < 9; $i++) { ?>
					<li><?php the_field('touchscreen_check'); ?>&nbsp;&nbsp; <?php the_field('touchscreen_item'.$i); ?></li>
				<?php } ?>

			</ul>
		</div>
	</div>
</section>
		
<section class="full-body">
	<div class="row">
		<div class="large-8 large-offset-2 medium-10 medium-offset-1 columns text-center">
			<h2>Customized Full Body Protection Make It Unique</h2>
			<hr class="yellow-line">
			<p class="body">ProtectionPro offers a full range of body protectors that also allow you to customize the look and feel of your device. They're available for tablets, eReaders, phones, cameras, and wearables</p>
		</div>
		<div class="clearfix"></div>
				<div class="medium-8 columns carousel-column">
					<div class="full-body-carousel owl-carousel owl-theme">
					    <div class="item" data-hash="1">
					    	<img src="http://fillmurray.com/1200/500" alt="">
					    </div>
					    <div class="item" data-hash="2">
					    	<img src="http://fillmurray.com/1201/500" alt="">
					    </div>
					    <div class="item" data-hash="3">
					    	<img src="http://fillmurray.com/1202/500" alt="">
					    </div>
					    <div class="item" data-hash="4">
					    	<img src="http://fillmurray.com/1203/500" alt="">
					    </div>
					</div>
				</div>
				<div class="medium-4 columns black-column">
					<div class="black-bg">
						<h4>Our Full Body Protection</h4>
						<ul>
							<li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp; Unique style and personalization</li>
							<li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp; Variety of texture and color options</li>
							<li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;  case-friendly options</li>
							<li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp; Increased durability</li>
							<li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp; The ability to update the look of a legacy or damaged device</li>
							<li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp; Seamless integration with ClearPlex film</li>
							<li>
								<ul class="img-ul">
									<li><a href="#1"><img src="http://fillmurray.com/50/50" alt=""></a></li>
									<li><a href="#2"><img src="http://fillmurray.com/50/50" alt=""></a></li>
									<li><a href="#3"><img src="http://fillmurray.com/50/50" alt=""></a></li>
									<li><a href="#4"><img src="http://fillmurray.com/50/50" alt=""></a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="large-8 large-offset-2 medium-10 medium-offset-1 columns end text-center">
					<p>Full body protectors are made using the same equipment and technology as screen protectors. Templates are downloaded from our library and full body protectors are cut on the same cutters--in the same amount of time. The only distinction is that a different product is cut and it's installed on the device a bit differently.</p>
				</div>
	</div>
</section>

<!-- <section class="library" style="background-image: url(<?php //the_field('library_bg'); ?>);">
	<div class="row">
		<div class="large-6 columns">
			<h3><?php //the_field('library_title'); ?></h3>
			<hr class="yellow-line">
			<div class="clearfix"></div>
			<p><?php //the_field('library_body'); ?></p>
			<a href="#!" class="button btn-white"><?php //the_field('library_button_text'); ?></a>
		</div>
	</div>
</section> -->

<!-- <section class="store-study">
	<div class="row">
		<div class="medium-8 medium-offset-2 columns text-center case-heading">
			<h3><?php the_field('store_title'); ?></h3>
			<hr class="yellow-line">
			<p class="store-body"><?php the_field('store_body'); ?></p>
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
</section> -->

<!-- <section class="product-faqs">
	<div class="row">
		<div class="medium-8 medium-offset-2 columns text-center">
			<h3><?php the_field('faq_title'); ?></h3>
			<hr class="yellow-line">
			<p class="faq-body"><?php the_field('faq_body'); ?></p>
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
</section> -->

<?php get_footer(); ?>
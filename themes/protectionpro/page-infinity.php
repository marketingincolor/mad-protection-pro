<?php
	/*
	Template Name: Infinity
	*/
	get_header(); 
	$feat_img = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<!-- Hero Section -->
	<section class="large-hero infinity-hero" style="background-image: url(<?php echo $feat_img; ?>)">
		<center class="center">
			<h1><?php the_title(); ?></h1>
		</center>
	</section>

	<section class="infinity-intro">
		<div class="row">
			<div class="medium-10 medium-offset-1 large-8 large-offset-2 small-12 columns text-center intro-text">
				<h2><?php the_field('intro_title'); ?></h2>
				<p><?php the_field('intro_copy'); ?></p>
			</div>
			<div class="large-10 large-offset-1 small-12 columns text-center end">
				<div class="row medium-up-3 large-up-5">
						
					<?php
					if( have_rows('intro_icons') ):
					  while ( have_rows('intro_icons') ) : the_row(); ?>

					    <div class="column column-block text-center">
					    	<img src="<?php the_sub_field('icon'); ?>" alt="Protectionpro <?php the_sub_field('title'); ?>">
					    	<h4 class="red-title"><?php the_sub_field('title'); ?></h4>
					    	<p><?php the_sub_field('copy'); ?></p>
					    </div>

					<?php endwhile;endif; ?>

				</div>
			</div>
		</div>
	</section>

	<section class="infinity-carbon" style="background: url(<?php the_field('carbon_background_image'); ?>) center center no-repeat;background-size:cover">
		<div class="row" data-equalizer data-equalize-on="medium">
			<div class="medium-6 medium-offset-1 columns" data-equalizer-watch>
				<h2><?php the_field('carbon_title'); ?></h2>
				<p><?php the_field('carbon_copy'); ?></p>
				<div class="row">
					<div class="medium-11 end columns">
						<div class="row small-up-2 medium-up-5 icon-row">
							
							<?php
							if( have_rows('carbon_icons') ):
							  while ( have_rows('carbon_icons') ) : the_row(); ?>

							    <div class="column column-block text-center">
							    	<img src="<?php the_sub_field('icon'); ?>" alt="Protectionpro <?php the_sub_field('title'); ?>">
							    	<h5><?php the_sub_field('title'); ?></h5>
							    </div>

							<?php endwhile;endif; ?>

						</div>
						<?php if(get_field('carbon_fine_print')) { ?>
						<p class="fine-print"><?php the_field('carbon_fine_print'); ?></p>
					  <?php } ?>
					</div>
				</div>
			</div>
			<div class="medium-5 columns img-column" style="position:relative" data-equalizer-watch>
				<img src="<?php the_field('carbon_phone_image'); ?>" alt="Protectionpro Infinity Carbon">
			</div>
		</div>
	</section>

	<section class="infinity-metal metal" style="background: url(<?php the_field('metal_backgroud_image'); ?>) center center no-repeat;">
		<div class="row">
			<div class="large-5 large-offset-6 medium-6 medium-offset-5 columns end">
				<h2 class="text-right"><?php the_field('metal_title'); ?></h2>
				<p class="text-right"><?php the_field('metal_copy'); ?></p>
				<div class="row small-up-2 medium-up-5 icon-row">
					<?php if(count(get_field('metal_icons')) < 5); { ?>
						<div id="empty-block" class="column column-block text-center show-for-medium"></div>
					<?php } ?>
					<?php
					if( have_rows('metal_icons') ):
					  while ( have_rows('metal_icons') ) : the_row(); ?>

					    <div class="column column-block text-center">
					    	<img src="<?php the_sub_field('icon'); ?>" alt="Protectionpro <?php the_sub_field('title'); ?>">
					    	<h5><?php the_sub_field('title'); ?></h5>
					    </div>

					<?php endwhile;endif; ?>

				</div>
					<?php if(get_field('metal_fine_print')) { ?>
					<p class="fine-print"><?php the_field('metal_fine_print'); ?></p>
				  <?php } ?>
			</div>
		</div>
	</section>

	<section class="infinity-carbon texture" style="background: url(<?php the_field('texture_background_image'); ?>) center center no-repeat;background-size:cover">
		<div class="row" data-equalizer data-equalize-on="medium">
			<div class="medium-6 medium-offset-1 columns" data-equalizer-watch>
				<h2><?php the_field('texture_title'); ?></h2>
				<p><?php the_field('texture_copy'); ?></p>
				<div class="row">
					<div class="medium-12 end columns">
						<div class="row small-up-2 medium-up-6 icon-row">
							
							<?php
							if( have_rows('texture_icons') ):
							  while ( have_rows('texture_icons') ) : the_row(); ?>

							    <div class="column column-block text-center">
							    	<img src="<?php the_sub_field('icon'); ?>" alt="Protectionpro <?php the_sub_field('title'); ?>">
							    	<h5><?php the_sub_field('title'); ?></h5>
							    </div>

							<?php endwhile;endif; ?>

						</div>
						<?php if(get_field('texture_fine_print')) { ?>
						<p class="fine-print"><?php the_field('texture_fine_print'); ?></p>
					  <?php } ?>
					</div>
				</div>
			</div>
			<div class="medium-5 columns img-column text-center" data-equalizer-watch>
				<img src="<?php the_field('texture_phone_image'); ?>" alt="Protectionpro Infinity texture">
			</div>
		</div>
	</section>

	<section class="infinity-metal sparkle" style="background: url(<?php the_field('sparkle_background_image'); ?>) center center no-repeat;background-size:cover">
		<div class="row">
			<div class="large-5 large-offset-6 medium-6 medium-offset-5 columns end">
				<h2 class="text-right"><?php the_field('sparkle_title'); ?></h2>
				<p class="text-right"><?php the_field('sparkle_copy'); ?></p>
				<div class="row small-up-2 medium-up-3 large-up-6 icon-row">

					<?php
					if( have_rows('sparkle_icons') ):
					  while ( have_rows('sparkle_icons') ) : the_row(); ?>

					    <div class="column column-block text-center">
					    	<img src="<?php the_sub_field('icon'); ?>" alt="Protectionpro <?php the_sub_field('title'); ?>">
					    	<h5><?php the_sub_field('title'); ?></h5>
					    </div>

					<?php endwhile;endif; ?>

				</div>
					<?php if(get_field('sparkle_fine_print')) { ?>
					<p class="fine-print"><?php the_field('sparkle_fine_print'); ?></p>
				  <?php } ?>
			</div>
		</div>
	</section>

	<section class="infinity-carbon spectrum" style="background: url(<?php the_field('spectrum_background_image'); ?>) center center no-repeat;">
		<div class="row" data-equalizer data-equalize-on="medium">
			<div class="medium-6 medium-offset-1 columns" data-equalizer-watch>
				<h2><?php the_field('spectrum_title'); ?></h2>
				<p><?php the_field('spectrum_copy'); ?></p>
				<div class="row">
					<div class="medium-12 end columns">
						<div class="row small-up-2 medium-up-6 icon-row">
							
							<?php
							if( have_rows('spectrum_icons') ):
							  while ( have_rows('spectrum_icons') ) : the_row(); ?>

							    <div class="column column-block text-center">
							    	<img src="<?php the_sub_field('icon'); ?>" alt="Protectionpro <?php the_sub_field('title'); ?>">
							    	<h5><?php the_sub_field('title'); ?></h5>
							    </div>

							<?php endwhile;endif; ?>

						</div>
						<?php if(get_field('spectrum_fine_print')) { ?>
						<p class="fine-print"><?php the_field('spectrum_fine_print'); ?></p>
					  <?php } ?>
					</div>
				</div>
			</div>
			<div class="medium-5 columns img-column text-center" data-equalizer-watch>
				<img src="<?php the_field('spectrum_colors_image'); ?>" alt="Protectionpro Infinity spectrum" style="max-height:100%">
			</div>
		</div>
	</section>

	<section class="infinity-metal art" style="background: url(<?php the_field('art_background_image'); ?>) center center no-repeat;background-size:cover">
		<div class="row">
			<div class="large-5 large-offset-6 medium-6 medium-offset-5 columns end">
				<h2 class="text-right"><?php the_field('art_title'); ?></h2>
				<p class="text-right"><?php the_field('art_copy'); ?></p>
				<div class="row small-up-2 medium-up-3 large-up-6 icon-row">

					<?php
					if( have_rows('art_icons') ):
					  while ( have_rows('art_icons') ) : the_row(); ?>

					    <div class="column column-block text-center">
					    	<img src="<?php the_sub_field('icon'); ?>" alt="Protectionpro Infinity Series Art">
					    </div>

					<?php endwhile;endif; ?>

				</div>
					<?php if(get_field('art_fine_print')) { ?>
					<p class="fine-print"><?php the_field('art_fine_print'); ?></p>
				  <?php } ?>
			</div>
		</div>
	</section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>

<script>
	if ($(window).width() < 641) {
		$('#empty-block').remove();
	}
</script>

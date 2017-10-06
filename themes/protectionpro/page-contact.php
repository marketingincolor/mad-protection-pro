<?php
	/*
	Template Name: Contact
	*/
	get_header(); 
	$feat_img = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
	get_template_part('template-parts/top-bg');
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="contact-header">
	<div class="row">
		<div class="large-8 large-offset-2 medium-10 medium-offset-1 columns text-center">
			<h1><?php the_title(); ?></h1>
			<hr class="yellow-line">
			<article class="body"><?php the_content(); ?></article>
		</div>
	</div>
</section>

<section class="contact-buttons">
	<div class="row">
		<div class="large-10 large-offset-1 columns text-center">
			<ul>
				<li><a href="<?php echo site_url(); ?>/training" class="button btn-black text-center"><?php the_field('left_box_icon'); ?></i><br /><?php the_field('left_box_text'); ?></a></li>
				<li><a href="<?php echo site_url(); ?>/distributor" class="button btn-black text-center"><?php the_field('middle_box_icon'); ?><br /><?php the_field('middle_box_text'); ?></a></li>
				<li><a href="<?php echo site_url(); ?>/faq" class="button btn-black text-center"><?php the_field('right_box_icon'); ?></i><br /><?php the_field('right_box_text'); ?></a></li>
			</ul>
		</div>
	</div>
</section>

<div class="contact-form">
	<div class="row">
		<div class="large-4 large-offset-1 columns">
			<p><?php the_field('form_copy'); ?></p>
			<ul class="contact-info">
				<li><?php the_field('company_name'); ?></li>
				<li><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;<?php the_field('phone_num'); ?></li>
				<li><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<?php the_field('street_address'); ?></li>
				<li class="last-li"><?php the_field('city_state_zip'); ?></li>
			</ul>
		</div>
		<div class="large-6 columns end">
			<div id="contact-form">
				<div class="row">
					<div class="large-12 columns">
						<?php echo do_shortcode('[ninja_form id=1]'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>

<script>
	setTimeout(function(){
		$('#nf-field-9').find('option').each(function(){
		  var country = $(this).text();
		  $(this).attr('value',country)
		});
	},500)
</script>
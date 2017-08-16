<?php
	/*
	Template Name: Form Confirmation
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
				<li><a href="<?php echo site_url(); ?>/resources" class="button btn-black text-center"><?php the_field('left_box_icon'); ?></i><br /><?php the_field('left_box_text'); ?></a></li>
				<li><a href="<?php echo site_url(); ?>/distributor" class="button btn-black text-center"><?php the_field('middle_box_icon'); ?><br /><?php the_field('middle_box_text'); ?></a></li>
				<li><a href="<?php echo site_url(); ?>/case-studies" class="button btn-black text-center"><?php the_field('right_box_icon'); ?></i><br /><?php the_field('right_box_text'); ?></a></li>
			</ul>
		</div>
	</div>
</section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
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
				<li><a href="#!" class="button btn-black text-center"><i class="fa fa-book" aria-hidden="true"></i><br />Need training?</a></li>
				<li><a href="#!" class="button btn-black text-center"><i class="fa fa-cubes" aria-hidden="true"></i><br />Become a Distributor</a></li>
				<li><a href="#!" class="button btn-black text-center"><i class="fa fa-question-circle" aria-hidden="true"></i><br />FAQs</a></li>
			</ul>
		</div>
	</div>
</section>

<div class="contact-form">
	<div class="row">
		<div class="large-4 large-offset-1 columns">
			<p>If you have any questions about our touchscreen and full-body protection products, please complete the contact form and we'll be in touch with you very shortly!</p>
			<ul class="contact-info">
				<li>CLEARPLEX PROTECTION<span class="red-title">PRO</span></li>
				<li><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;(801) 571-8243</li>
				<li><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;9466 S. 670 W Unit A</li>
				<li class="last-li">Sandy, UT 84070</li>
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
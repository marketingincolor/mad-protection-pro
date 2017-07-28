<?php
	/*
	Template Name: FAQ
	*/
	get_header(); 
	$feat_img = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
	get_template_part('template-parts/top-bg');
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="faqs">
	<div class="row">
		<div class="large-8 large-offset-2 medium-10 medium-offset-1 columns text-center">
			<h1><?php the_title(); ?></h1>
			<hr class="yellow-line">
			<article class="body"><?php the_content(); ?></article>
		</div>
		<div class="large-9 columns">
			<div class="row">
				
			</div>
		</div>
		<div class="large-2 large-offset-1 columns">
			<aside class="faq-cats">
				<ul>
					<li><h6 class="red-title">Installation</h6></li>
					<li><h6 class="red-title">Training</h6></li>
					<li><h6 class="red-title">Warranty</h6></li>
					<li><h6 class="red-title">Other Categories</h6></li>
					<li><h6 class="red-title">Would go here</h6></li>
				</ul>
			</aside>
		</div>
	</div>
</section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
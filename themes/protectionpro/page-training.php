<?php
	/*
	Template Name: Training
	*/
	get_header(); 
	$feat_img = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
	get_template_part('template-parts/top-bg');
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="training">
	<div class="row">
		<div class="large-8 large-offset-2 medium-10 medium-offset-1 columns text-center">
			<h1><?php the_title(); ?></h1>
			<hr class="yellow-line">
			<article class="body"><?php the_content(); ?></article>
		</div>
	</div>
</section>

<?php endwhile; endif; ?>

<!-- Videos Section -->
<section class="training-videos">
	<div class="row">
		<div class="large-12 columns">
			<header>
				<h2 class="red-title">Videos</h2>
			</header>
		</div>
		<div class="large-9 columns">
			<div class="row">
				<div class="large-4 columns">
					<img src="http://fillmurray.com/400/400" alt="">
					<h5 class="red-title">Video Title</h5>
					<p class="video-body">A short description of the video goes here.</p>
				</div>
				<div class="large-4 columns">
					<img src="http://fillmurray.com/400/400" alt="">
					<h5 class="red-title">Video Title</h5>
					<p class="video-body">A short description of the video goes here.</p>
				</div>
				<div class="large-4 columns">
					<img src="http://fillmurray.com/400/400" alt="">
					<h5 class="red-title">Video Title</h5>
					<p class="video-body">A short description of the video goes here.</p>
				</div>
				<div class="large-4 columns">
					<img src="http://fillmurray.com/400/400" alt="">
					<h5 class="red-title">Video Title</h5>
					<p class="video-body">A short description of the video goes here.</p>
				</div>
				<div class="large-4 columns">
					<img src="http://fillmurray.com/400/400" alt="">
					<h5 class="red-title">Video Title</h5>
					<p class="video-body">A short description of the video goes here.</p>
				</div>
				<div class="large-4 columns">
					<img src="http://fillmurray.com/400/400" alt="">
					<h5 class="red-title">Video Title</h5>
					<p class="video-body">A short description of the video goes here.</p>
				</div>
			</div>
		</div>
		<div class="large-2 large-offset-1 columns">
			<aside class="video-cats">
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

<!-- Document Downloads Section -->
<section class="download-documents">
	<div class="row">
		<header class="large-12 columns">
			<h2 class="red-title">Documents for Download</h2>
		</header>
		<div class="large-3 columns">
			<img src="http://fillmurray.com/350/350" alt="">
			<h5 class="red-title">Document Title</h5>
			<p class="body">This is a great document. You should download it and find out why.</p>
		</div>
		<div class="large-3 columns">
			<img src="http://fillmurray.com/350/350" alt="">
			<h5 class="red-title">Document Title</h5>
			<p class="body">This is a great document. You should download it and find out why.</p>
		</div>
		<div class="large-3 columns">
			<img src="http://fillmurray.com/350/350" alt="">
			<h5 class="red-title">Document Title</h5>
			<p class="body">This is a great document. You should download it and find out why.</p>
		</div>
		<div class="large-3 columns">
			<img src="http://fillmurray.com/350/350" alt="">
			<h5 class="red-title">Document Title</h5>
			<p class="body">This is a great document. You should download it and find out why.</p>
		</div>
	</div>
</section>


<?php get_footer(); ?>
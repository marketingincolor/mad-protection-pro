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

<div class="reveal" id="exampleModal1" data-reveal>
  <h1></h1>
  <video id="training-video" src="" autoplay controls></video>
  <button class="close-button" data-close aria-label="Close modal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>



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

			<?php
			// Query custom post type "case_studies" to get 
			// product page case study only

			$args = array(
				'post_type'      => 'videos',
				'posts_per_page' => -1
				// 'tax_query'      => array(
				// 	array(
				// 		'taxonomy'   => 'home_case_study',
				// 		'field'      => 'slug',
				// 		'terms'      => 'product_page',
				// 	),
				// ),
			);

			$the_query = new WP_Query($args);

			if ( $the_query->have_posts() ) {
				while ( $the_query->have_posts() ) {
					$the_query->the_post();
			?>

				<div class="large-4 columns">
					<div class="video-container" title="Play Video" data-title="<?php the_title(); ?>" data-video="<?php the_field('video_url'); ?>">
						<img src="http://fillmurray.com/400/200" alt="">
						<img src="<?php bloginfo('template_directory'); ?>/assets/images/icons/play-icon.png" alt="Play Video" class="play-img">
					</div>
					<h5 class="red-title"><?php the_title(); ?></h5>
					<div class="video-body"><?php the_content(); ?></div>
				</div>

			<?php }} wp_reset_postdata(); ?>

			</div>
		</div>
		<div class="large-2 large-offset-1 columns">
			<aside class="video-cats">
				<ul>
					<?php 
						$taxonomy = 'videos';
						$terms = get_terms($taxonomy, ['hide_empty' => false,]);
						foreach($terms as $term) {
						  echo '<li><h6 class="red-title">' . $term->name . '</h6></li>';
						}
					?>
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
			<img src="http://fillmurray.com/350/200" alt="">
			<h5 class="red-title">Document Title</h5>
			<p class="body">This is a great document. You should download it and find out why.</p>
		</div>
		<div class="large-3 columns">
			<img src="http://fillmurray.com/350/200" alt="">
			<h5 class="red-title">Document Title</h5>
			<p class="body">This is a great document. You should download it and find out why.</p>
		</div>
		<div class="large-3 columns">
			<img src="http://fillmurray.com/350/200" alt="">
			<h5 class="red-title">Document Title</h5>
			<p class="body">This is a great document. You should download it and find out why.</p>
		</div>
		<div class="large-3 columns">
			<img src="http://fillmurray.com/350/200" alt="">
			<h5 class="red-title">Document Title</h5>
			<p class="body">This is a great document. You should download it and find out why.</p>
		</div>
	</div>
</section>

<?php get_footer(); ?>
<script>
	$('.video-container').on('click',function(){
		console.log('yo')
		var that = this;
		// $(document).on('open.zf.reveal', '#exampleModal1[data-reveal]', function() {
		//   console.log('This works');
		// });
		$('#exampleModal1').bind('open.zf.reveal',function(){
			var videoSrc   = $(that).data('video');
			var videoTitle = $(that).data('title');
			$('#training-video').attr('src',videoSrc);
			$('#exampleModal1').find('h1').text(videoTitle);
		});
		$('#exampleModal1').foundation('open');
	})
</script>
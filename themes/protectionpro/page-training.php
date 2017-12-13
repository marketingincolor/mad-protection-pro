<?php
	/*
	Template Name: Training
	*/
	get_header(); 
	$feat_img = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
	get_template_part('template-parts/top-bg');
?>
<style>
	video {
    width: 100%;
	}
</style>
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
  <h2></h2>
  <!-- If Youtube embed -->
  <!-- <iframe width="560" height="315" src="" frameborder="0" allowfullscreen></iframe> -->

  <!-- If video file -->
	<video src="<?php echo home_url();the_field('full_video_url'); ?>" data-title="" controls autoplay></video>
  <button class="close-button" data-close aria-label="Close modal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>



<!-- Videos Section -->
<section class="training-videos">
	<div class="row">
		<div class="large-12 columns">
			<!-- <header>
				<h2 class="red-title">Videos</h2>
			</header> -->
		</div>
		<div class="medium-10 medium-offset-1 columns end">
			<div class="row medium-up-2">

			<?php
			// Query custom post type "videos"

			$args = array(
				'post_type'        => 'videos',
				'posts_per_page'   => -1,
				'suppress_filters' => false
			);

			$the_query = new WP_Query($args);

			if ( $the_query->have_posts() ) {
				while ( $the_query->have_posts() ) {
					$the_query->the_post();
			?>

				<div class="column column-block">
					<div class="video-container" title="Play Video" data-title="<?php the_title(); ?>" data-video="<?php the_field('video_url'); ?>" style="background:linear-gradient(rgba(0, 0, 0, 0.45),rgba(0, 0, 0, 0.45)),url(<?php the_post_thumbnail_url('full'); ?>);">
						<img src="<?php bloginfo('template_directory'); ?>/assets/images/icons/play-icon.png" alt="Play Video" class="play-img">
					</div>
					<h5 class="red-title"><?php the_title(); ?></h5>
					<div class="video-body"><?php the_content(); ?></div>
				</div>

			<?php }} wp_reset_postdata(); ?>

			</div>
		</div>
		<!-- <div class="medium-2 medium-offset-1 columns">
			<aside class="video-cats">
				<ul>
					<?php 
						// $taxonomy = 'videos';
						// $terms = get_terms($taxonomy, ['hide_empty' => false,]);
						// foreach($terms as $term) {
						//   echo '<li><h6 class="red-title">' . $term->name . '</h6></li>';
						// }
					?>
				</ul>
			</aside>
		</div> -->
	</div>
</section>

<!-- Document Downloads Section -->
<!-- <section class="download-documents">
	<div class="row">
		<header class="large-12 columns">
			<h2 class="red-title">Documents for Download</h2>
		</header>
		<div class="large-3 medium-6 columns">
			<img src="http://fillmurray.com/350/200" alt="">
			<h5 class="red-title">Document Title</h5>
			<p class="body">This is a great document. You should download it and find out why.</p>
		</div>
		<div class="large-3 medium-6 columns">
			<img src="http://fillmurray.com/350/200" alt="">
			<h5 class="red-title">Document Title</h5>
			<p class="body">This is a great document. You should download it and find out why.</p>
		</div>
		<div class="large-3 medium-6 columns">
			<img src="http://fillmurray.com/350/200" alt="">
			<h5 class="red-title">Document Title</h5>
			<p class="body">This is a great document. You should download it and find out why.</p>
		</div>
		<div class="large-3 medium-6 columns end">
			<img src="http://fillmurray.com/350/200" alt="">
			<h5 class="red-title">Document Title</h5>
			<p class="body">This is a great document. You should download it and find out why.</p>
		</div>
	</div>
</section> -->

<?php get_footer(); ?>
<script>
	// If youtube embed
	$('.video-container').on('click',function(){
		var that = this;
		// var theTitle = $(this).data('title');
		$('#exampleModal1').find('video').data('title',$(this).data('title'));
		$('#exampleModal1').bind('open.zf.reveal',function(){
			var videoSrc   = $(that).data('video');
			var videoTitle = $(that).data('title');
			$('#exampleModal1').find('video').attr('src',videoSrc);
			$('#exampleModal1').find('h1').text(videoTitle);
		});
		$('#exampleModal1').foundation('open');
	});

</script>
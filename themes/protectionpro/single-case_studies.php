<?php
	get_header(); 
	$feat_img = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
	get_template_part('template-parts/top-bg');
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<section class="case-study-single">
		<div class="row">
			<div class="large-8 large-offset-2 medium-10 medium-offset-1 columns text-center">
				<h1><?php the_title(); ?></h1>
				<hr class="yellow-line">
				<div class="excerpt"><?php the_excerpt(); ?></div>
			</div>
			<div class="large-10 large-offset-1 columns end">
				<?php the_post_thumbnail( 'full' ); ?>
			</div>
			<div class="large-8 large-offset-2 medium-10 medium-offset-1 columns end">
				<article class="body">
					<?php the_content(); ?>	
				</article>
			</div>
		</div>
	</section>

<?php endwhile; endif; ?>



<?php get_footer(); ?>
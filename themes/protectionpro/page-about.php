<?php
	/*
	Template Name: About
	*/
	get_header(); 
	$feat_img = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
	get_template_part('template-parts/top-bg');
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php $excerpt = get_the_excerpt(); ?>

<section class="about hide-for-small-only">
	<div class="row">
		<div class="large-8 large-offset-2 medium-10 medium-offset-1 columns text-center">
			<h1><?php the_title(); ?></h1>
			<hr class="yellow-line">
			<?php if($excerpt != 'NO EXCERPT'){ ?>
				<p class="body"><?php echo $excerpt; ?></p>
			<?php } ?>
		</div>
		<div class="large-10 large-offset-1 medium-12 columns tablet-fs">
			<?php if($feat_img) { ?>
			<img src="<?php echo $feat_img; ?>" alt="About Madico" class="feat-img">
			<?php } ?>
		</div>
		<article class="large-8 large-offset-2 medium-10 medium-offset-1 columns end">
			<?php the_content(); ?>
		</article>
	</div>
</section>

<section class="about show-for-small-only">
	<div class="row">
		<div class="small-12 columns img-column">
			<?php if($feat_img) { ?>
			<img src="<?php echo $feat_img; ?>" alt="About Madico" class="feat-img">
			<?php } ?>
		</div>
		<div class="pad30">
			<div class="small-12 columns">
				<h1><?php the_title(); ?></h1>
				<hr class="yellow-line">
				<div class="clearfix"></div>
				<?php if($excerpt != 'NO EXCERPT'){ ?>
				  <p class="body"><?php echo get_the_excerpt(); ?></p>
				<?php } ?>
			</div>
			<article class="large-8 large-offset-2 medium-10 medium-offset-1 columns end">
				<?php the_content(); ?>
			</article>
		</div>
	</div>
</section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

	get_header(); 
	get_template_part('template-parts/top-bg');
	$featured_img_array = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
	$featured_img       = $featured_img_array[0];
?>
<style>
	.blog-post {padding: 8% 0;}
	.article-header .title {line-height:1.2;}
	article a, article a:hover { color:#df9e10; }
	.feat-img {margin-bottom:2em;}
	.blog-post .columns { padding-left:1.25rem; padding-right:1.25rem; }
	@media(max-width: 640px){
		.blog-post .columns { padding-left:1.5rem; padding-right:1.5rem; }
	}
	@media(max-width: 414px){
		.blog-post .columns { padding-left:1.5rem; padding-right:1.5rem; }
	}
	@media(max-width: 340px){
		.blog-post .columns { padding-left:1.5rem; padding-right:1.5rem; }

	}
</style>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php
 	if ( ! function_exists( 'custom_entry_meta' ) ) :
	function custom_entry_meta() {
		/* translators: %1$s: current date, %2$s: current time */
		$categories = get_the_category();
		echo '<time class="updated" datetime="' . get_the_time( 'c' ) . '">' . sprintf( __( 'Posted on %1$s', 'foundationpress' ), get_the_date() ) . '</time>';
		echo '&nbsp;&mdash;&nbsp;' . ' <a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '" class="fn" style="color:#df9e10; font-weight:bold;">' . $categories[0]->name . '</a>';
	}
	endif;
?>

<section class="blog-post hide-for-small-only">
	<div class="row">
		<div class="large-8 large-offset-2 medium-10 medium-offset-1 columns text-center">
			<h1><?php the_title(); ?></h1>
			<hr class="yellow-line">
			<p class="body"><?php custom_entry_meta(); ?></p>
		</div>
		<div class="large-10 large-offset-1 medium-12 columns tablet-fs">
			<?php if($featured_img) { ?>
			<img src="<?php echo $featured_img; ?>" alt="About Madico" class="feat-img">
			<?php } ?>
		</div>
		<article class="large-8 large-offset-2 medium-10 medium-offset-1 columns end">
			<?php the_content(); ?>
		</article>
	</div>
</section>

<section class="blog-post show-for-small-only">
	<div class="row">
		<div class="small-12 columns img-column">
			<?php if($featured_img) { ?>
			<img src="<?php echo $featured_img; ?>" alt="About Madico" class="feat-img">
			<?php } ?>
		</div>
		<div class="pad30">
			<div class="small-12 columns">
				<h1><?php the_title(); ?></h1>
				<hr class="yellow-line">
				<div class="clearfix"></div>
				<p class="body"><?php custom_entry_meta(); ?></p>
			</div>
			<article class="large-8 large-offset-2 medium-10 medium-offset-1 columns end">
				<?php the_content(); ?>
			</article>
		</div>
	</div>
</section>

<?php endwhile; endif; ?>

<?php get_footer();

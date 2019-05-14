<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
	get_header(); 
	$feat_img = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
	get_template_part('template-parts/top-bg');
?>
<style>
	.post-archive {padding: 8% 0;}
	.article-header .title { line-height:1.2; font-size:1.25em; }
	article.post * { margin-bottom:10px; } 
	article a, article a:hover, article a:visited {color:#df9e10;}
	article .read-more { font-weight:bold; }
	.column-block { margin-bottom:3rem; padding-left:1.25rem; padding-right:1.25rem; }
	@media(max-width: 640px){
		.article-header .title { font-size:1.5625em; }
		.column-block { margin-bottom:3rem; padding-left:1.5rem; padding-right:1.5rem; }
	}
	@media(max-width: 414px){
		.article-header .title { font-size:1.5625em; }
		.column-block { margin-bottom:3rem; padding-left:1.5rem; padding-right:1.5rem; }
	}
	@media(max-width: 340px){
		.article-header .title { font-size:1.5625em; }
		.column-block { margin-bottom:3rem; padding-left:1.5rem; padding-right:1.5rem; }
	}
</style>

<section class="post-archive">
	<div class="row">
		<div class="large-10 large-offset-1 medium-10 medium-offset-1 columns text-center">
	    	<header>
	    		<h1 class="page-title">Latest ProtectionPro News and Announcements<?php //the_archive_title();?></h1>
	    		<hr class="yellow-line" style="margin-bottom:2.5rem;">
				<?php the_archive_description('<p class="body taxonomy-description">', '</p>');?>
	    	</header>
	    </div>
	</div>

	<div class="row">
		<div class="large-10 large-offset-1 medium-10 medium-offset-1 columns">
			<div class="row medium-up-2 large-up-3">

<?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>

				<!--Item: -->
				<div class="column column-block cell">
				
					<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">
					
						<section class="featured-image" itemprop="text">
							<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('full'); ?></a>
						</section> <!-- end article section -->
					
						<header class="article-header">
							<h4 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" style="color:inherit;" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
						</header> <!-- end article header -->	
										
						<section class="entry-content" itemprop="text">
							<?php echo wp_trim_words(get_the_content(),20,''); ?><br clear="both" />
							<a href="<?php the_permalink(); ?>" class="read-more">Read More...</a>
						</section> <!-- end article section -->
										    							
					</article> <!-- end article -->
					
				</div>

<?php endwhile; ?>

<?php else : ?>
	<?php get_template_part( 'template-parts/content', 'none' ); ?>

<?php endif; // End have_posts() check. ?>

			</div>
		</div>
	</div>
</section>

<?php get_footer();

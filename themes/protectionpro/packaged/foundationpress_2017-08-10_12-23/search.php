<?php
/**
 * The template for displaying search results pages.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); 
get_template_part('template-parts/top-bg'); ?>

<section class="search-results" id="search-results">
	<div class="row">
		<div class="medium-10 medium-offset-1 columns end">
			<article <?php post_class(); ?>>
				<header>
				  <h1 class="entry-title"><?php _e( 'Search Results for', 'foundationpress' ); ?> "<?php echo get_search_query(); ?>"</h1>
				</header>
			    <hr class="yellow-line">
			    <div class="clearfix"></div>
			    <?php get_search_form(); ?>

			    <?php
				    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			    	$temp = $wp_query; 
			    	$wp_query = null; 
			    	$wp_query = new WP_Query();

				    $args = array(
				    	's' => $s,
				    	'showposts' => 5,
				    	'post_type' => array('post','page','case_studies'),
				    	'paged' => $paged,
				    	'post__not_in' => array(190)
				    );

				    $wp_query->query( $args );
			    ?>

				<?php if ( $wp_query->have_posts() ) : ?>

					<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
							<?php $title = wp_trim_words(get_the_title(),8,'...'); $keys= explode(" ",$s); $title = preg_replace('/('.implode('|', $keys) .')/iu', '<strong class="search-excerpt">\0</strong>', $title); ?>
							<?php $content = wp_trim_words(get_the_content(),30,'...'); $content_keys= explode(" ",$s); $content = preg_replace('/('.implode('|', $content_keys) .')/iu', '<strong class="search-content">\0</strong>', $content); ?>

						<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
						<article class="result-block">
							<h5><a href="<?php the_permalink(); ?>"><?php echo $title; ?></a></h5>
							<p><?php echo $content; ?></p>
						</article>
					<?php endwhile; ?>

					<?php else : ?>
						<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>
				<?php wp_reset_query(); ?>
				<?php
				global $wp_query;

								$big = 999999999; // need an unlikely integer
								echo '<div class="paginate-links">';
									echo paginate_links( array(
										'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
										'format' => '?paged=%#%',
										'prev_text' => __('<<'),
										'next_text' => __('>>'),
										'current' => max( 1, get_query_var('paged') ),
										'total' => $wp_query->max_num_pages
									) );
								echo '</div>';
				?>

					<nav id="post-nav">
						<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
						<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
					</nav>
				<?php //endif; ?>

			</article>

		</div>
	</div>
</section>

<?php get_footer();
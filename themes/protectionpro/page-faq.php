<?php
	/*
	Template Name: FAQ
	*/
	get_header(); 
	$feat_img = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
	get_template_part('template-parts/top-bg');
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="faqs" id="faq-page">
	<div class="row">
		<div class="large-8 large-offset-2 medium-10 medium-offset-1 columns text-center">
			<h1><?php the_title(); ?></h1>
			<hr class="yellow-line">
			<article class="body"><?php the_content(); ?></article>
		</div>
		<div class="medium-10 medium-offset-1 columns end">
			<?php get_search_form(); ?>
			
			<div id="accordion-container">
				<ul id="accordion" class="accordion" data-accordion data-multi-expand="true" data-allow-all-closed="true">

				<?php
				$count = 0;
				$args = array(
					'post_type'      => 'faqs', 
					'posts_per_page' => -1,
					'orderby'        => 'date',
					'order'          => 'ASC'
				);
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); ?>

				  <li class="accordion-item<?php if($count == 0){echo ' is-active';} ?>" data-accordion-item>
				    <!-- FAQ Question -->
				    <a class="accordion-title">
				    	<div class="red-triangle"></div><p><?php the_title(); ?></p>
				    </a>
				    <!-- FAQ Answer -->
				    <div class="accordion-content" data-tab-content>
				      <?php the_content(); ?>
				    </div>
				  </li>

				<?php $count++;endwhile; wp_reset_postdata(); ?>

				</ul>
			</div>
		</div>
	</div>
</section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
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
		<div class="medium-10 medium-offset-1 columns end">
			<?php get_search_form(); ?>
		</div>
		<div class="large-8 large-offset-1 medium-12 columns">
			
			<ul class="accordion" data-accordion data-multi-expand="true" data-allow-all-closed="true">
			  <li class="accordion-item is-active" data-accordion-item>
			    <!-- Accordion tab title -->
			    <a class="accordion-title">
			    	<div class="red-triangle"></div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit?</p>
			    </a>

			    <!-- Accordion tab content: it would start in the open state due to using the `is-active` state class. -->
			    <div class="accordion-content" data-tab-content>
			      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate minima consectetur quaerat facilis ex blanditiis totam quos nulla, enim, assumenda accusantium dolore culpa deleniti laborum sapiente sed molestiae perspiciatis suscipit!</p>
			    </div>

			  </li>

		    <li class="accordion-item" data-accordion-item>
		      <!-- Accordion tab title -->
		      <a class="accordion-title">
		      	<div class="red-triangle"></div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit?</p>
		      </a>

		      <!-- Accordion tab content: it would start in the open state due to using the `is-active` state class. -->
		      <div class="accordion-content" data-tab-content>
		        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate minima consectetur quaerat facilis ex blanditiis totam quos nulla, enim, assumenda accusantium dolore culpa deleniti laborum sapiente sed molestiae perspiciatis suscipit!</p>
		      </div>
		    </li>

		    <li class="accordion-item" data-accordion-item>
		      <!-- Accordion tab title -->
		      <a class="accordion-title">
		      	<div class="red-triangle"></div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit?</p>
		      </a>

		      <!-- Accordion tab content: it would start in the open state due to using the `is-active` state class. -->
		      <div class="accordion-content" data-tab-content>
		        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate minima consectetur quaerat facilis ex blanditiis totam quos nulla, enim, assumenda accusantium dolore culpa deleniti laborum sapiente sed molestiae perspiciatis suscipit!</p>
		      </div>
		    </li>
			</ul>
		</div>
		<div class="large-2 columns end">
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
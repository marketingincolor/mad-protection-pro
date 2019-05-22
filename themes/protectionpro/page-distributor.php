<?php
	/*
	Template Name: Distributor
	*/
	get_header(); 
	$feat_img = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
	get_template_part('template-parts/top-bg');
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="distributor">
	<div class="row">
		<div class="large-8 large-offset-2 medium-10 medium-offset-1 columns text-center">
			<h1><?php the_title(); ?></h1>
			<hr class="yellow-line">
			<article class="body"><?php the_content(); ?></article>
		</div>
		<div class="large-6 large-offset-3 columns end">
			
			<?php 
				if(ICL_LANGUAGE_CODE == 'en') {
					echo do_shortcode('[ninja_form id=2]');
				}elseif (ICL_LANGUAGE_CODE == 'it') {
				 	echo do_shortcode('[ninja_form id=4]');
				}elseif (ICL_LANGUAGE_CODE == 'es') {
				 	echo do_shortcode('[ninja_form id=6]');
				}
			?>

		</div>
	</div>
</section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>

<script>
	setTimeout(function(){
		$('#nf-field-17').on('change',function(){
			if ($(this).val() == 'US') {}
			setTimeout(function(){
				$('#nf-field-22').find('option:first').before('<option disabled="disabled" selected="selected">Select State</option>');
			},200);
		var country = $(this).find('option:selected').text();
		$(this).attr('value',country)
		});
		$('#nf-field-22').find('option:first').before('<option disabled="disabled" selected="selected">Select State</option>');
	},500)
</script>
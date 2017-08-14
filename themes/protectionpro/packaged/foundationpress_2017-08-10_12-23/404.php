<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
get_header();
get_template_part('template-parts/top-bg');
$options = get_option('mic_theme_options'); ?>

 <section class="error-top text-center">
 	<div class="row">
 		<div class="large-8 large-offset-2 medium-10 medium-offset-1 columns end">
 			<article id="post-<?php the_ID(); ?>">
 				<header>
 					<h1 class="error-title"><?php echo $options['404_title']; ?></h1>
 				</header>
 				<hr class="yellow-line">
 				<div class="entry-content">
 					<div class="error">
 						<p class="bottom"><?php echo $options['404_body']; ?></p>
 					</div>
 				</div>
 			</article>
 		</div>
 		<div class="medium-10 medium-offset-1 columns end">
 			<?php get_search_form(); ?>
 		</div>
 	</div>
 </section>

 <section class="contact-buttons">
 	<div class="row">
 		<div class="large-10 large-offset-1 columns text-center">
 			<ul>
 				<li><a href="#!" class="button btn-black text-center"><?php echo $options['404_left_button_icon']; ?><br /><?php echo $options['404_left_button_text']; ?></a></li>
 				<li><a href="#!" class="button btn-black text-center"><?php echo $options['404_middle_button_icon']; ?><br /><?php echo $options['404_middle_button_text']; ?></a></li>
 				<li><a href="#!" class="button btn-black text-center"><?php echo $options['404_right_button_icon']; ?><br /><?php echo $options['404_right_button_text']; ?></a></li>
 			</ul>
 		</div>
 	</div>
 </section>

<?php get_footer();

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
 					<?php if (ICL_LANGUAGE_CODE == 'en'){ ?>

 					  <h1 class="error-title"><?php echo $options['404_title']; ?></h1>

 					<?php }elseif (ICL_LANGUAGE_CODE == 'it') { ?>

 						<h1 class="error-title">Pagina non trovata</h1>

 					<?php } ?>
 				</header>
 				<hr class="yellow-line">
 				<div class="entry-content">
 					<div class="error">
 						<p class="bottom">
 							<?php if (ICL_LANGUAGE_CODE == 'en'){ ?>

 							  <h1 class="error-title"><?php echo $options['404_body']; ?></h1>

 							<?php }elseif (ICL_LANGUAGE_CODE == 'it') { ?>

 								<h1 class="error-title">Siamo spiacenti ma qualcosa è andato storto. Controlla l'URL e ricomincia dalla casella di ricerca, oppure usa il link qui sotto per tornare alla nostra home page.</h1>

 							<?php } ?>
 						</p>
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
 			  <?php if (ICL_LANGUAGE_CODE == 'en'){ ?>

 				<li><a href="<?php echo site_url(); ?>" class="button btn-black text-center"><?php echo $options['404_left_button_icon']; ?><br /><?php echo $options['404_left_button_text']; ?></a></li>
 				<li><a href="<?php echo site_url(); ?>/distributor" class="button btn-black text-center"><?php echo $options['404_middle_button_icon']; ?><br /><?php echo $options['404_middle_button_text']; ?></a></li>
 				<li><a href="<?php echo site_url(); ?>/faq" class="button btn-black text-center"><?php echo $options['404_right_button_icon']; ?><br /><?php echo $options['404_right_button_text']; ?></a></li>

 				<?php }elseif (ICL_LANGUAGE_CODE == 'it') { ?>

					<li><a href="<?php echo site_url(); ?>/it" class="button btn-black text-center"><?php echo $options['404_left_button_icon']; ?><br />Vai alla pagina iniziale</a></li>
					<li><a href="<?php echo site_url(); ?>/it/distributore" class="button btn-black text-center"><?php echo $options['404_middle_button_icon']; ?><br />Diventa un Distributore</a></li>
					<li><a href="<?php echo site_url(); ?>/it/domande-frequenti/" class="button btn-black text-center"><?php echo $options['404_right_button_icon']; ?><br />Domande Frequenti</a></li>

 				<?php } ?>
 			</ul>
 		</div>
 	</div>
 </section>

<?php get_footer();

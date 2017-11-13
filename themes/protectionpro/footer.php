<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>

		<?php 
			$pages = get_pages(); 
			foreach ($pages as $page) {
				if ($page->post_title == 'Footer') {
					$footer_id = $page->ID;
				}
			}
		?>

		<div class="footer-container" data-sticky-footer>
			<footer id="footer" >
				<aside class="top-footer" style="background-image: url(<?php the_field('footer_bg',$footer_id); ?>);">
					<div class="row">
						<div class="medium-8 medium-offset-2 columns">
							<div class="footer-meta">
								<p><?php the_field('footer_body',$footer_id); ?></p>
								<a href="<?php echo site_url(); ?>/contact" class="button btn-white"><?php the_field('footer_button_text',$footer_id); ?></a>
							</div>
						</div>
					</div>
				</aside>
				<aside class="bottom-footer">
					<div class="row">
						<div class="large-8 large-offset-2 columns">
							<!-- Hide logos until we get some -->
						  <ul class="partner-logos hide">
								<?php 
									for ($count=1; $count < 5; $count++) { 
										echo '<li><img src="';
										echo the_field("partner_logo{$count}",$footer_id);
										echo '"></li>';
									}
								?>
							</ul>
							<div class="pp-footer-logo">
								<img src="<?php the_field('pp_footer_logo',$footer_id); ?>" alt="Protection Pro">
							</div>
							<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' )); ?>
							<div class="footer-credits">
								<p class="copyright">Copyright &copy;<?php echo date('Y') ?>  ClearPlex<sup>&reg;</sup> ProtectionPro by Madico<sup>&reg;</sup></p>
								<ul>
									<li><a href="http://reports.clearplex.com" target="_blank">Reports Login</a></li> |
									<li><a href="<?php echo site_url(); ?>/privacy-policy">Privacy Policy</a></li>
								</ul>
							</div>
						</div>
					</div>
				</aside>
			</footer>
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
			</div><!-- Close off-canvas content -->
		</div><!-- Close off-canvas wrapper -->
	<?php endif; ?>


	<?php wp_footer(); ?>
	<?php do_action( 'foundationpress_before_closing_body' ); ?>
	<!-- <script id="__bs_script__">//<![CDATA[
	    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.18.12'><\/script>".replace("HOST", location.hostname));
	//]]></script> -->
	<?php $options = get_option('mic_theme_options');echo html_entity_decode( $options['gtm_code_body']); ?>

	<script>
		$(document).on('closed.zf.reveal',function(){
			$('#video-modal').find('video').trigger('pause');
			$('#exampleModal1').find('video').trigger('pause');
		});
	</script>
</body>
</html>

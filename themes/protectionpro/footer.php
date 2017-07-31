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
								<a href="#!" class="button btn-white"><?php the_field('footer_button_text',$footer_id); ?></a>
							</div>
						</div>
					</div>
				</aside>
				<aside class="bottom-footer">
					<div class="row">
						<div class="large-8 large-offset-2 medium-10.medium-offset-1 columns">
						  <ul class="partner-logos">
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
								<p class="copyright">Copyright &copy;<?php echo date('Y') ?>  ClearPlex&reg; by ProtectionPro by Madico&reg;</p>
								<ul>
									<li><a href="#!">Reports Login</a></li> |
									<li><a href="#!">Privacy Policy</a></li>
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
</body>
</html>

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
<style>
  .top-bar .languages{
  	position:static;
  }
	.top-footer{
		background-color:rgba(0,0,0,0.75);
	}
	.footer-container .pp-footer-logo{
		margin-bottom: 40px;
	}
	@media(max-width: 530px){
		.top-bar.slide-down{
			height: 90px;
		}
		.top-bar.slide-down .top-bar-left, .top-bar.slide-down .top-bar-right{
			width: 100%!important;
			text-align: center;
			position:static;
			margin-top: 0;
		}
		.top-bar-title{
			float: none;
		}
		.top-bar.slide-down .top-bar-right{
			position: relative;
			top: -10px;
		}
		.top-bar .languages .button{
			padding-right: 0;
		}
	}
	@media(max-width:400px){
		.top-bar.slide-down{
			height: 100px;
		}
		.top-bar.slide-down .top-bar-right{
			top: -8px;
		}
	}
</style>

<script>
	ga('send', {
	  hitType: 'event',
	  eventCategory: 'Translated Page',
	  eventAction: 'Success Page',
	  eventLabel: window.location.href
	});
</script>

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
				<aside class="bottom-footer">
					<div class="row">
						<div class="large-12 columns">
							<div class="pp-footer-logo">
								<img src="/wp-content/uploads/2018/06/protectionpro-logo-color.svg" alt="Protection Pro">
							</div>
							<div class="footer-credits">
								<p class="copyright">Copyright &copy;<?php echo date('Y') ?> ProtectionPro<sup>&trade;</sup> by Madico<sup>&reg;</sup></p>
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
	<?php $options = get_option('mic_theme_options');echo html_entity_decode( $options['gtm_code_body']); ?>

	<script>
		$(document).on('closed.zf.reveal',function(){
			$('#video-modal').find('video').trigger('pause');
			$('#exampleModal1').find('video').trigger('pause');
		});
	</script>
</body>
</html>

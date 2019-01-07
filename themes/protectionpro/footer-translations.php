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

	.protectionpro-film .btn-black.button{
		line-height: 1.5;
	}
	.nf-form-content .nf-field-label label{
		color:#FFF;
	}
	.top-footer{
		background-color:rgba(0,0,0,0.75);
	}
	.footer-container .pp-footer-logo{
		margin-bottom: 40px;
	}
	.nf-form-content input[type=email], .nf-form-content input[type=tel], .nf-form-content input[type=text], .nf-form-content select{
		padding-left: 10px;
	}
	.contact-title{
		color: #FFF;
		margin-bottom: 50px;
		font-size: 2.75rem;
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
		.cutters{
			padding: 15% 0 80%;
		}
		.nf-form-content .nf-field-label label{
			font-size:0.95rem;
		}
	}
</style>

<script>
	ga('send', {
	  hitType: 'event',
	  eventCategory: 'Translated Page',
	  eventAction: 'Home Page',
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
				<aside class="top-footer">
					<div class="row">
						<div class="medium-8 medium-offset-2 columns">
							<h3 class="contact-title"><?php the_field('contact_title',$footer_id); ?></h3>
							<?php 
							  if(ICL_LANGUAGE_CODE == 'zh-hans'){
							    echo do_shortcode('[ninja_form id=8]');
								}else if(ICL_LANGUAGE_CODE == 'de') {
									echo do_shortcode('[ninja_form id=10]');
								}else if(ICL_LANGUAGE_CODE == 'fr') {
									echo do_shortcode('[ninja_form id=9]');
								}else if(ICL_LANGUAGE_CODE == 'zh-hant') {
									echo do_shortcode('[ninja_form id=13]');
								}else if(ICL_LANGUAGE_CODE == 'nl') {
									echo do_shortcode('[ninja_form id=12]');
								}else if(ICL_LANGUAGE_CODE == 'ja') {
									echo do_shortcode('[ninja_form id=11]');
								}else if(ICL_LANGUAGE_CODE == 'th') {
									echo do_shortcode('[ninja_form id=16]');
								}else if(ICL_LANGUAGE_CODE == 'pt-pt') {
									echo do_shortcode('[ninja_form id=15]');
								}else if(ICL_LANGUAGE_CODE == 'he') {
									echo do_shortcode('[ninja_form id=14]');
								}
							?>
						</div>
					</div>
				</aside>
				<aside class="bottom-footer">
					<div class="row">
						<div class="<?php if(!ICL_LANGUAGE_CODE == 'es'){echo 'large-10 large-offset-1';}else{echo 'large-12';} ?> columns">
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

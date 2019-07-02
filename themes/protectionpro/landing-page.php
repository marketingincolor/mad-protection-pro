<?php
/* Template Name: Landing Page Template */
// Fully customized to allow for completely custom layouts 
if (get_field('landing_page_header')) {
	$page_header = get_field('landing_page_header');
}else{
	//field is empty, do not show
}
if (get_field('landing_page_hero')) {
	$page_hero = get_field('landing_page_hero');
}else{
	//field is empty, do not show
}
if (get_field('landing_page_primary_content')) {
	$page_primary = get_field('landing_page_primary_content');
}else{
	//field is empty, do not show
}
if (get_field('landing_page_footer')) {
	$page_footer = get_field('landing_page_footer');
}else{
	//field is empty, do not show';
}
?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
<head>
<?php
if (get_field('disable_defaults')) {
	// remove all Theme Default scripts and content
}else{ ?>		
		<script src="https://www.youtube.com/iframe_api"></script>
		<?php $options = get_option('mic_theme_options');echo html_entity_decode( $options['gtm_code_head']); ?>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<style>.partner-logos{display:flex;list-style-type:none;align-items:center} #mobile-menu .mobile-menu-list li{padding:2px 0 !important;} #mobile-menu .mobile-menu-list li:last-child {padding-top:20px !important;}</style>
		<?php wp_head(); ?>
		<script type="text/javascript">
		    var _ss = _ss || [];
		    _ss.push(['_setDomain', 'https://koi-3QNHJKLJ4E.marketingautomation.services/net']);
		    _ss.push(['_setAccount', 'KOI-436IHIWD3C']);
		    _ss.push(['_trackPageView']);
		(function() {
		    var ss = document.createElement('script');
		    ss.type = 'text/javascript'; ss.async = true;
		    ss.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'koi-3QNHJKLJ4E.marketingautomation.services/client/ss.js?ver=1.1.1';
		    var scr = document.getElementsByTagName('script')[0];
		    scr.parentNode.insertBefore(ss, scr);
		})();
		</script>
<?php } ?>
<?php
if (get_field('landing_page_meta')) {
		$landing_meta = get_field('landing_page_meta');
		$revised_meta = strip_tags($landing_meta, '<meta><title></title><style></style><script></script><link>');
		echo $revised_meta;
}else{
	// left empty if no value given in editor;
}
?>
<?php
if (get_field('disable_wp_head')) {
	// do not process wp_head();
}else{
	wp_head();
}
?>

</head>
<body>

<?php
if (get_field('disable_defaults')) {
// remove all Theme Default scripts and content
}else{ ?>	
<section class="container">
<?php } ?>

<?php echo $page_header . $page_hero . $page_primary . $page_footer; ?>

<?php
if (get_field('disable_wp_footer')) {
	// do not process wp_footer();
}else{
	wp_footer();
}
?>

<?php
if (get_field('disable_defaults')) {
// remove all Theme Default scripts and content
}else{ ?>	
	</section>
	<?php $options = get_option('mic_theme_options');echo html_entity_decode( $options['gtm_code_body']); ?>

	<script>
		$(document).on('closed.zf.reveal',function(){
			$('#video-modal').find('video').trigger('pause');
			$('#exampleModal1').find('video').trigger('pause');
		});
	</script>
<?php } ?>

<?php
if (get_field('landing_page_script')) {
		$landing_script = get_field('landing_page_script');
		$revised_script = strip_tags($landing_script, '<meta><title></title><style></style><script></script><link>');
		echo $revised_script;
}else{
	// left empty if no value given in editor;
}?>
</body>
</html>

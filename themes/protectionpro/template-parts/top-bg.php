<?php $bg_img = wp_get_attachment_url(get_post_thumbnail_id( $post->ID )); ?>
<section class="top-bg" style="background-image: url(<?php echo $bg_img; ?>);"></section>
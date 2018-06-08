<?php 

require('../../../wp-blog-header.php');
header("HTTP/1.1 200 OK");

// set language for search
global $sitepress;
$sitepress->switch_lang('es');
?>


	<!-- query faq custom post type -->
	<?php
	  $query      = $_POST['query'];
	  $count      = 0;
		$random_num = rand(1,9999999);

		$search = new WP_Query( array(
	    'post_type'      => 'faqs',
	    'posts_per_page' => -1,
	    's'              => $query,
	    'suppress_filters' => false
		));

  	if($search->have_posts()) : 
  	  while($search->have_posts()) : 
  	    $search->the_post();
	?>

	<ul id="accordion<?php echo $random_num; ?>" class="accordion" data-accordion data-multi-expand="true" data-allow-all-closed="true">
		<li class="accordion-item<?php if($count == 0){echo ' is-active';} ?>" data-accordion-item>
		  <!-- FAQ Question -->
		  <a class="accordion-title">
		  	<div class="red-triangle"></div><p><?php the_title(); ?></p>
		  </a>
		  <!-- FAQ Answer -->
		  <div class="accordion-content" data-tab-content>
		    <?php the_content(); ?>
		  </div>
		</li>
	</ul>

	<?php
				$count++;
	      endwhile;
	    else: 
	?>

	  <h3 class="blue-heading">Sorry, no FAQ<small style="color:black">s</small> match that search. Please try again.</p>

	<?php endif;wp_reset_postdata(); ?>

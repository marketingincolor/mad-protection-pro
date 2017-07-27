<?php
	/*
	Template Name: Resources
	*/
	get_header(); 
	get_template_part('template-parts/top-bg');
?>

<section class="resources">
	<div class="row">
		<div class="medium-8 medium-offset-2 columns text-center">
			<h1><?php the_field('retailer_title'); ?></h1>
			<hr class="yellow-line">
			<p class="body"><?php the_field('retailer_body'); ?></p>
		</div>
		<div class="medium-6 columns">
			<img src="<?php the_field('support_img'); ?>" alt="">
			<h4 class="red-title"><?php the_field('support_title'); ?></h4>
			<ul>
				<?php for ($i=1; $i < 7; $i++) { ?>
					<li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp; <?php the_field('support_item'.$i); ?></li>
				<?php } ?>
			</ul>
			<a href="#!" class="button btn-black">Get Support</a>
		</div>
		<div class="medium-6 columns">
			<img src="<?php the_field('training_img'); ?>" alt="">
			<h4 class="red-title"><?php the_field('training_title'); ?></h4>
			<ul>
				<?php for ($i=1; $i < 5; $i++) { ?>
					<li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp; <?php the_field('training_item'.$i); ?></li>
				<?php } ?>
			</ul>
			<a href="#!" class="button btn-black">Training Videos</a>
		</div>
		<div class="clearfix"></div>
		<section class="view-resources">
			<div class="medium-6 large-3 columns">
				<img src="" alt="">
				<h5 class="red-title">This is a Title</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eea. Repellendus, alias.</p>
				<a href="#!" class="button resource-cta">Button Text</a>
			</div>
			<div class="medium-6 large-3 columns">
				<img src="" alt="">
				<h5 class="red-title">This is a Title</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. dhd fggf xd fb</p>
				<a href="#!" class="button resource-cta">Button Text</a>
			</div>
			<div class="medium-6 large-3 columns">
				<img src="" alt="">
				<h5 class="red-title">This is a Title</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elitrum illo odit sit.</p>
				<a href="#!" class="button resource-cta">Button Text</a>
			</div>
			<div class="medium-6 large-3 columns">
				<img src="" alt="">
				<h5 class="red-title">This is a Title</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolres error ipsum.</p>
				<a href="#!" class="button resource-cta">Button Text</a>
			</div>
		</section>
	</div>
</section>

<?php get_footer();  ?>
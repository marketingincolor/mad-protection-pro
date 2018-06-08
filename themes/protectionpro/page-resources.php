<?php
	/*
	Template Name: Resources
	*/
	get_header(); 
	get_template_part('template-parts/top-bg');
?>
<style>
	.resources .medium-4 img{height:auto}
</style>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="resources">
	<div class="row">
		<div class="medium-8 medium-offset-2 columns text-center">
			<h1><?php the_title(); ?></h1>
			<hr class="yellow-line">
			<div class="body"><?php the_content(); ?></div>
		</div>
		<div class="medium-4 columns">
			<img src="<?php the_field('support_img'); ?>" alt="">
			<h4 class="red-title"><?php the_field('support_title'); ?></h4>
			<ul>
				<?php for ($i=1; $i < 10; $i++) { ?>
					<?php if (get_field('support_item'.$i)) { ?>
					  <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp; <?php the_field('support_item'.$i); ?></li>
					 <?php } ?>
				<?php } ?>
			</ul>
			<a href="<?php echo site_url();the_field('support_link'); ?>" class="button btn-black"><?php the_field('support_button_text'); ?></a>
		</div>
		<div class="medium-4 columns">
			<img src="<?php the_field('training_img'); ?>" alt="">
			<h4 class="red-title"><?php the_field('training_title'); ?></h4>
			<ul>
				<?php for ($i=1; $i < 10; $i++) { ?>
					<?php if (get_field('training_item'.$i)) { ?>
						<li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp; <?php the_field('training_item'.$i); ?></li>
					<?php } ?>
				<?php } ?>
			</ul>
			<a href="<?php echo site_url();the_field('training_link'); ?>" class="button btn-black"><?php the_field('training_button_text'); ?></a>
		</div>
		<div class="medium-4 columns">
			<img src="<?php the_field('reports_img'); ?>" alt="">
			<h4 class="red-title"><?php the_field('reports_title'); ?></h4>
			<ul>
				<?php for ($i=1; $i < 10; $i++) { ?>
					<?php if (get_field('reports_item'.$i)) { ?>
						<li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp; <?php the_field('reports_item'.$i); ?></li>
					<?php } ?>
				<?php } ?>
			</ul>
			<a href="<?php the_field('reports_link'); ?>" class="button btn-black" target="_blank"><?php the_field('reports_button_text'); ?></a>
		</div>
		<div class="clearfix"></div>
		<section class="view-resources">

			<?php $count = 0; ?>
			<?php for ($i=1; $i < 5; $i++) { ?>

				<div class="medium-6 large-3 columns hide-for-small-only">
					<img src="<?php the_field('icon'.$i); ?>" alt="ProtectionPro <?php the_field('title'.$i); ?>">
					<h5 class="red-title"><?php the_field('title'.$i); ?></h5>
					<p><?php the_field('body'.$i); ?></p>
					<a href="<?php if(get_field('link'.$i)=='/faq' || get_field('link'.$i)=='/contact'){echo site_url();}the_field('link'.$i); ?>" <?php if(get_field('link'.$i) == 'https://play.google.com/store/apps/details?id=com.clearplex.clearplex20&hl=en' || get_field('link'.$i) == 'https://play.google.com/store/apps/details?id=com.clearplex.clearplex20&hl=es' || get_field('link'.$i) == 'https://play.google.com/store/apps/details?id=com.clearplex.clearplex20&hl=it' || get_field('link'.$i) == 'http://devices.clearplex.com'){echo 'target="_blank"';} ?> class="button resource-cta"><?php the_field('button_text'.$i); ?></a>
				</div>

				<div class="medium-6 large-3 columns show-for-small-only">
					<div class="row">
						<div class="small-3 columns">
						<img src="<?php the_field('icon'.$i); ?>" alt="ProtectionPro <?php the_field('title'.$i); ?>">
						</div>
						<div class="small-9 columns">
							<h5 class="red-title"><?php the_field('title'.$i); ?></h5>
							<p><?php the_field('body'.$i); ?></p>
							<a href="<?php the_field('link'.$i); ?>" class="button resource-cta"><?php the_field('button_text'.$i); ?></a>
						</div>
					</div>
				</div>

				<?php $count++; ?>
				<?php if ($count % 2 == 0) { ?>
					<div class="clearfix show-for-medium-only"></div>
				<?php } ?>

			<?php } ?>
		</section>
	</div>
</section>

<?php endwhile; endif; ?>

<?php get_footer();  ?>
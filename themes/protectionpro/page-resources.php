<?php
	/* Template Name: Resources */
	get_header(); 
	get_template_part('template-parts/top-bg');
?>
<style>
	.resources .medium-4 img{height:auto}
	.app-download h2{
		margin:50px 0 20px
	}
	.resources .download-images img{
		height: auto;
	}
	.resources .download-images a:first-of-type img{
		margin-right: 30px;
	}
	@media(max-width: 640px){
		.app-download h2{
			margin:0 0 20px;
		}
	}
	@media(max-width: 414px){
		.resources .download-images img{
			width: 120px;
		}
		.resources .download-images a:first-of-type img{
			margin-right: 20px;
		}
	}
	@media(max-width: 340px){
		.resources .download-images img{
			width: 110px;
		}
	}
</style>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="resources">
	<div class="row">
		<div class="medium-8 medium-offset-2 columns text-center">
			<h1><?php the_title(); ?></h1>
			<hr class="yellow-line">
			<div class="body"><?php the_content(); ?></div>
		</div>
		<div class="medium-6 large-3 columns">
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
		<div class="medium-6 large-3 columns">
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
		<div class="medium-6 large-3 columns">
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
		<div class="medium-6 large-3 columns">
			<img src="<?php the_field('marketing_img'); ?>" alt="">
			<h4 class="red-title"><?php the_field('marketing_title'); ?></h4>
			<ul>
				<?php for ($i=1; $i < 10; $i++) { ?>
					<?php if (get_field('marketing_item'.$i)) { ?>
						<li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp; <?php the_field('marketing_item'.$i); ?></li>
					<?php } ?>
				<?php } ?>
			</ul>
			<a href="<?php the_field('marketing_link'); ?>" class="button btn-black" target="_blank"><?php the_field('marketing_button_text'); ?></a>
		</div>
		<div class="clearfix"></div>
		<section class="view-resources">

			<?php 
			  if (ICL_LANGUAGE_CODE == 'en') {
				  $length = 4;
			  }else{
			  	$length = 5;
			  }
			?>
			<?php $count = 0; ?>
			<?php for ($i=1; $i < $length; $i++) { ?>

				<div class="medium-6 large-4 columns hide-for-small-only" style="margin-bottom: 20px">
					<img src="<?php the_field('icon'.$i); ?>" alt="ProtectionPro <?php the_field('title'.$i); ?>">
					<h5 class="red-title"><?php the_field('title'.$i); ?></h5>
					<p><?php the_field('body'.$i); ?></p>
					<a href="<?php the_field('link'.$i); ?>" class="button resource-cta" ><?php the_field('button_text'.$i); ?></a>
				</div>

				<div class="medium-6 large-4 columns show-for-small-only">
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

		<?php if(ICL_LANGUAGE_CODE == 'en') { ?>
		<section class="app-download">
			<div class="large-12 columns">
				<h2 class="text-center"><?php the_field('resources_app_title'); ?></h2>
				<hr class="yellow-line">
				<p class="text-center"><?php the_field('resources_app_subhead'); ?></p>
				<img src="<?php the_field('resources_app_image'); ?>" alt="ProtectionPro Android iOS Download" style="width:100%;height:auto">
				<div class="text-center download-images">
					<a href="<?php the_field('resources_android_link'); ?>" target="_blank"><img src="<?php the_field('resources_android_image'); ?>" alt="Download Android App"></a>
					<a href="<?php the_field('resources_ios_link'); ?>" target="_blank"><img src="<?php the_field('resources_ios_image'); ?>" alt="Download iOS App"></a>
				</div>
			</div>
		</section>
	  <?php } ?>

	</div>
</section>

<?php endwhile; endif; ?>

<?php get_footer();  ?>
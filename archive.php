<?php get_header(); 
breadcrumbs(); ?>

<section class="news">
	<div class="container">
		<?php if (have_posts()) : ?>
			<div class="row">
				<div class="col-xs-12 text-center">
					<h1><?php single_month_title(' '); ?></h1> 
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
					<div class="news-section">
						<?php while (have_posts()) : the_post();
							get_template_part('partials/content','blog');
						endwhile; 
						navigator('<','>'); ?>
					</div>
				</div>
			</div>
		<?php endif; ?>
	</div>
</section>

<?php go_back_button(); 
get_footer(); ?>
<?php get_header(); ?>

<section class="lawyer">
	<div class="container">
		<?php if (have_posts()) : ?>
			<div class="row">
				<div class="col-xs-12 text-center">
					<h1 class="archive-lawyer mt-20">Alla advokater som jobbar med <?php single_cat_title(); ?></h1>
				</div>
			</div>
			<div class="row">
				<?php while (have_posts()) : the_post(); ?>
					<div class="col-xs-12 col-sm-6 col-md-3">
						<?php get_template_part('partials/content','lawyer'); ?>
					</div>
				<?php endwhile; ?>
			</div>
			<div class="row">
				<div class="col-xs-12 text-center">
					<?php navigator('<','>'); ?>
				</div>
			</div>
		<?php endif; ?>
	</div>
</section>

<?php go_back_button(); ?>

<?php get_footer(); ?>
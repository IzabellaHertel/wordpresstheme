<?php get_header(); ?>

	<section class="taxonomy">
		<div class="filter">
			<div class="container">
				<div class="row text-center">
					<div class="col-xs-12">
						<h2 class="archive-lawyer">Rättsområden</h2>
					</div>
				</div>
				<div class="row">
					<?php my_taxonomies('lawyer_field'); ?>
				</div>
			</div>
		</div>
	</section>

	<section class="lawyer">
		<div class="container">
			<div class="row text-center">
				<div class="col-xs-12">
					<h2 class="archive-lawyer">Advokater</h2>
				</div>
			</div>
			<div class="row text-center">
				<?php if (have_posts()) :
					while (have_posts()) : the_post(); ?>
						<div class="col-xs-12 col-sm-6 col-md-3">
							<?php get_template_part('partials/content','lawyer'); ?>
						</div>
					<?php endwhile;
				endif; ?>
			</div>
			<div class="row text-center">
				<?php navigator('<','>'); ?>
			</div>
		</div>
	</section>

<?php get_footer(); ?>
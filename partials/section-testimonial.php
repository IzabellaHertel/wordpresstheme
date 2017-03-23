<?php 
	$background = get_sub_field('background');
	if ( $background == 'image' ) : ?>
		<section class="testimonial" style="background-image: url('<?php the_sub_field("background_image"); ?>')">
	<?php elseif ( $background == 'color' ) : ?>
		<section class="testimonial <?php the_sub_field('background_color'); ?>">
	<?php endif; ?>

	
		<?php $filter = get_sub_field('filter');
		if ($filter == 'light') : ?>
			<div class="filter-light">
		<?php elseif ($filter == 'dark') : ?>
			<div class="filter-dark">
		<?php endif; ?>
			
			<div class="container">
				<div class="row">
				<?php $icon = get_sub_field('icon');

				if ($icon) : ?>
					<div class="col-xs-12 col-sm-6 col-sm-offset-2 text-center">
						<h2 class=""><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('text'); ?></a></h2>
					</div>
					<div class="col-sm-2 hidden-xs">
						<i class="fa fa-<?php the_sub_field('icon'); ?>"></i>
					</div>
				<?php else : ?>
					<div class="col-xs-12 col-sm-8 col-sm-offset-2 text-center">
						<h2 class=""><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('text'); ?></a></h2>
					</div>
				<?php endif; ?>

			</div> 
		</div>
	</div>
</section>
<section class="taxonomies <?php the_sub_field('background_color'); ?>">
	<div class="filter">
		<div class="container">
			<div class="row text-center">
				<div class="col-xs-12">
					<h2 class="mb-20"><?php the_sub_field('title'); ?></h2>
				</div>
			</div>
			<div class="row text-center">
				<?php $fields = get_sub_field('list_fields');
				if ( $fields ) :
					foreach ($fields as $field) :
						echo '<div class="col-xs-6 col-sm-3">';
							echo '<div class="block">';
								echo '<i class="fa fa-'.$field['icon'].'"></i>';
								echo '<a href="'.get_term_link($field['field']).'">';
									echo '<p>'.$field['field']->name.'</p>';
								echo '</a>';
							echo '</div>';
						echo '</div>';
					endforeach; 
				endif; ?>
			</div>
			<div class="row text-center">
				<div class="col-xs-12">
					<?php if (get_sub_field('button_link') && get_sub_field('button_text') ) :
						echo '<button class="button mt-40">';
							echo '<a href="'.get_sub_field('button_link').'">';
								the_sub_field('button_text');
							echo '</a>';
						echo '</button>';
					endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
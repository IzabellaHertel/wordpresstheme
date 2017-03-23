<section class="two-fields <?php the_sub_field('background_color'); ?>">
	<div class="container">
		<div class="row">	

			<?php if (get_sub_field('number') == 'two' ) : ?>
				<div class="col-xs-12 col-sm-6 col-md-4 col-md-offset-1">
					<div class="block">
						<div class="icon-holder">
							<i class="fa fa-<?php the_sub_field('icon_left'); ?>"></i> 
						</div>
						<div class="text-holder">
							<h4><?php the_sub_field('title_left'); ?></h4>
							<p><?php  the_sub_field('text_left'); ?></p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-md-offset-2">
					<div class="block">
						<div class="icon-holder">
							<i class="fa fa-<?php the_sub_field('icon_right'); ?>"></i> 
						</div>
						<div class="text-holder">
							<h4><?php the_sub_field('title_right'); ?></h4>
							<p><?php  the_sub_field('text_right'); ?></p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 text-center">
					<?php 
					$button = get_sub_field('button_text' && 'button_link');
					if ( $button ) {
						echo '<button class="button mt-20"><a href="' . get_sub_field('button_link') . '">' . get_sub_field('button_text') . '</a></button>';
					} ?>
					</div>
				</div>
			<?php elseif (get_sub_field('number') == 'one' ) : 
				echo '<div class="col-xs-12 col-sm-10 col-sm-offset-1 text-center">';
					echo '<h4 class="mb-20">' . get_sub_field('title') . '</h4>';
					echo '<p>' . get_sub_field('text') . '</p>';
					echo '<br />';
					$button = get_sub_field('button_text' && 'button_link');
					if ( $button ) {
						echo '<button class="button mt-20"><a href="' . get_sub_field('button_link') . '">' . get_sub_field('button_text') . '</a></button>';
					} ?>
					</div>
				</div>
			<?php endif; ?>
			
		</div>
	</div>
</section>
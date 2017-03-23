<?php get_header('alt');
acf_form_head();

	if (have_posts()) : ?>
		<section class="question">
			<div class="container">
				<div class="row">
					<?php while (have_posts()) : the_post(); ?>
						<div class="col-xs-12 col-md-8 col-md-offset-2">
							<div class="question-block">
								<?php 
									echo '<h2 class="mb-10">';
										echo '<a href="'.get_permalink().'">'.get_the_title().'</a>';
									echo '</h2>'; 
									echo '<div class="q-and-a">';
										echo '<h4>Fråga: </h4>';
										echo '<p>'.get_field('question').'</p>'; 
										echo '<br />';
										echo '<div class="text-center">';
											echo '<button class="button"><a href="'.get_permalink().'">Se svar</a></button>';
										echo '</div>';
									echo '</div>';
								?>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
				<div class="row">
					<div class="col-xs-12 text-center">
						<?php navigator('<','>'); ?>
					</div>
				</div>
			</div>
		</section>
	<?php endif;

get_footer(); ?>
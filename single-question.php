<?php get_header('alt');
acf_form_head(); ?>

<?php if (have_posts()) : ?>
	<section class="question">
		<div class="container">
			<div class="row">
				<?php while (have_posts()) : the_post(); ?>
					<div class="col-xs-12 col-md-8 col-md-offset-2">
						<div class="question-block">
							<?php 
								echo '<h2 class="mb-10 archive-lawyer">'.get_the_title().'</h2>'; 
								echo '<div class="q-and-a">';
									echo '<h4>Fråga: </h4><p>'.get_field('question').'</p>'; 
									echo '<div class="mb-20"></div>';
									echo '<div class="breaker"></div>';
									echo '<div class="mb-20"></div>';
									echo '<h4>Svar: </h4><p>'.get_field('answer').'</p>';
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
	<div class="text-center">
		<?php go_back_button(false); ?>
	</div>
<?php endif;

get_footer('alt'); ?>
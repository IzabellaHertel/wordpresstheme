<?php
/* Template Name: Rådgivning */

acf_form_head();
get_header();
	if (have_posts()) :
		while (have_posts()) : the_post(); ?>
			<section class="new-question">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-8 col-sm-offset-2 text-center">	
							<h1 class="mb-10 archive-lawyer"><?php the_title(); ?></h1>
						</div>
					</div>	
					<div class="row">
						<div class="col-xs-12 col-sm-8 col-sm-offset-2">
						<?php 
							the_post_thumbnail(); 
							the_content();
							echo '<div class="breaker mt-20">';
							form_question('Skicka in din fråga', get_field('logged_in','options'));
							echo '</div>';
						?>
						</div>
					</div>
				</div>
			</section>
		<?php endwhile;
	endif;
get_footer(); ?>
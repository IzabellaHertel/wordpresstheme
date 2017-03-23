<?php

/* Template Name: Centrerad (bild överst) */

get_header(); 
	if (have_posts()):
		while (have_posts()) : the_post(); ?>
			<section class="double">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-8 col-sm-offset-2">
							<div class="image">
								<?php the_post_thumbnail(); ?>
							</div>
						</div>
						<div class="col-xs-12 col-sm-8 col-sm-offset-2 text-center">
							<h2><?php the_title(); ?></h2>
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</section>
		<?php endwhile;
	endif;
get_footer(); ?>
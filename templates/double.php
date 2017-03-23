<?php
/* Template Name: Text / Bild */

get_header(); 
	if (have_posts()):
		while (have_posts()) : the_post(); ?>
			<section class="double">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<h2><?php the_title(); ?></h2>
							<?php the_content(); ?>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="image">
								<?php the_post_thumbnail(); ?>
							</div>
						</div>
					</div>
				</div>
			</section>
		<?php endwhile;
	endif;
get_footer(); ?>
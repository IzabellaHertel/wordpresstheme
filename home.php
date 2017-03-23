<?php get_header(); 

	if (have_posts() ) : ?>
		<section class="news">
			<div class="container">
				<div class="row">
					<div class="hidden-xs col-sm-4">
						<?php if ( is_active_sidebar( 'news-sidebar' ) ) :
							dynamic_sidebar( 'news-sidebar' );
						endif; ?>
					</div>

					<div class="col-xs-12 col-sm-8">
						<div class="news-section">
							<?php while (have_posts() ) : the_post();
								get_template_part('partials/content','blog'); 
							endwhile; ?>
						</div>
						<div class="text-center">
							<?php navigator('Nyare inlägg','Äldre inlägg'); ?>
						</div>
					</div>	
				</div>
			</div>
		</section>
	<?php endif;

get_footer(); ?>
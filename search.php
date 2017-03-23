<?php get_header(); ?>

<section class="search">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 text-center">
				<h1 class="mb-20 archive-lawyer">Sökresultat för '<?php the_search_query(); ?>'</h1>
			</div>
		</div>
		<div class="row">
			<div class="hidden-xs hidden-sm col-md-4">
				<?php if ( is_active_sidebar( 'news-sidebar' ) ) :
						dynamic_sidebar( 'news-sidebar' );
					endif; ?>
			</div>
			<div class="col-xs-12 col-md-8">
				<?php if (have_posts() ) :
					while (have_posts() ) : the_post(); 
						get_template_part('partials/content','search');
					endwhile;
				else :
					get_template_part('partials/content','none');
				endif; ?>
				<div class="row text-center">
					<div class="col-xs-12">
						<?php navigator('<','>'); ?>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</section>

<?php get_footer(); ?>
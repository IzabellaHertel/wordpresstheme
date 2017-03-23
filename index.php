<?php get_header(); 

	if (have_posts()) :
		while (have_posts()) : the_post();
			get_template_part('partials/content');
		endwhile;
	else :
		get_template_part('partials/content','none');
	endif;

get_footer(); ?>
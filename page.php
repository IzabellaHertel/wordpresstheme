<?php get_header(); 

	if (have_posts() ) : 
		while (have_posts() ) : the_post(); 
			if (get_field('sections')) : 
				get_template_part('partials/flexible'); 
			else: 
				get_template_part('partials/content','none'); 
			endif; 
		endwhile; 
	endif; 

get_footer(); ?>
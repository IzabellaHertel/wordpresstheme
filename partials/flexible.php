<?php 

if (have_rows('sections')) : 
	while (have_rows('sections')) : the_row();
		if (get_row_layout() == 'hero') :
			get_template_part('partials/section','hero');
		elseif (get_row_layout() == 'testimonial') :
			get_template_part('partials/section','testimonial');
		elseif (get_row_layout() == 'text-fields') :
			get_template_part('partials/section','text-fields');
		elseif (get_row_layout() == 'slideshow') :
			get_template_part('partials/section','slideshow');
		elseif (get_row_layout() == 'list_lawyers') :
			get_template_part('partials/section','list-lawyer');
		elseif (get_row_layout() == 'hours') :
			get_template_part('partials/section','hours');
		elseif (get_row_layout() == 'taxonomy') :
			get_template_part('partials/section','taxonomy');
		endif; 
	endwhile;
endif;
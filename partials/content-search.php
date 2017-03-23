<div class="search-box">
	<?php if (get_post_type() == 'post'): ?>
		<h2 class="archive-lawyer small bold inline">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h2>
		<i>-nyhetsinlägg</i>
		<div class="breaker mb-10"></div>
		<?php the_excerpt(); ?>
		<p class="mt-20"><i>Skrivet av <?php the_author_posts_link(); ?> </i></p>

	<?php elseif (get_post_type() == 'lawyer'): ?>
		<h2 class="archive-lawyer small bold inline">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h2>
		<i>-advokat</i>
		<div class="breaker mb-10"></div>
		<?php $areas = get_the_terms(get_the_ID(), 'lawyer_field');
			echo '<p>| ';
				foreach ($areas as $area ) : 
					echo '<a href="'.get_term_link($area).'"> ' .  $area->name . '</a> |'; 
				endforeach;
			echo '</p>';

	elseif (get_post_type() == 'question'): ?>
		<h2 class="archive-lawyer small bold inline">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h2>
		<i>-inskickad fråga</i>
		<div class="breaker mb-10"></div>
		<?php the_field('question');

	elseif (get_post_type() == 'page') : 
		echo '<h2 class="archive-lawyer small bold inline"><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h2><i>-sida</i>';
	else :
		echo '<h2 class="archive-lawyer small bold inline"><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h2>';
	endif; ?>
</div>
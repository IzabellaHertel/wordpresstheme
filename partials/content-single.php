<article class="article">
	<?php 
		if (has_post_thumbnail()) :
			the_post_thumbnail();
		endif;
		echo '<div class="textarea">';
		echo '<h1 class="archive-lawyer mb-10">' .get_the_title(). '</h1>'; 
		the_content();

		echo '<div class="bottom">';

		echo '<p class="category"><strong>#';
		the_category('   #');
		echo '</strong></p>';

		echo '<div class="author">Skrivet av ';
		the_author_posts_link();
		echo ' den ';
		the_date();
		echo '</div></div></div>';
	?>
</article>
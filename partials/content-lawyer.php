
<div class="block">	
	<?php 
		$image = get_field('image'); 
		$size = $image['sizes']['thumbnail'];

	if ($image): ?>
		<img src="<?php echo $size; ?>" />
	<?php else: ?>
		<div class="placeholder"></div>
	<?php endif; ?>
	<h2 class="text-center"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<blockquote><?php the_field('quote'); ?></blockquote>
	<div class="black-box text-center">
		<a href="<?php the_field('skype'); ?>"><i class="fa fa-skype"></i></a>
		<a href="mailto:<?php the_field('email'); ?>"><i class="fa fa-envelope-o"></i></a>
	</div>
</div>

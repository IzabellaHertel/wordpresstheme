<?php $number = get_sub_field('number'); ?>

<section class="slideshow" data-items="<?php the_sub_field('number'); ?>">
	<?php if (have_rows('slides')) :
		while (have_rows('slides')) : the_row(); 

			$image = get_sub_field('image'); ?>
			<div class="slide" style="background-image: url('<?php echo $image; ?>')"></div> 

		<?php endwhile; 
	endif; ?>
</section>
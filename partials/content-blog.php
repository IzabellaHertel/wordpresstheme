
<?php if ( has_post_thumbnail() ) : ?>
	<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
	<div class="placeholder-image" style="background-image:url('<?php echo $url ?>')"></div>

<?php else: ?>
	<div class="placeholder"></div>
<?php endif; ?>

<div class="block">
	<div class="gravatar">
		<?php user_profile_picture(); ?>
	</div>
	<p class="by mb-10">
		Av <?php the_author_posts_link(); ?>
		den <time><?php the_date(); ?></time>
	</p>
	<h2 class="mb-10"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<p><?php the_excerpt(); ?></p>
</div>

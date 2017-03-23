<?php get_header(); 
breadcrumbs(); ?>

	<section class="news author">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-8 col-sm-offset-2  text-center">
					<div class="author-about">

						<h1 class="mb-20 archive-lawyer ws">Artiklar av <?php the_author(); ?></h1>

						<div class="gravatar mb-10">
							<?php user_profile_picture(); ?>
						</div>

						<p class="mb-20">
							<i><?php echo get_the_author_meta('description'); ?></i>
						</p>

						<p class="mb-10">
							<a href="mailto:<?php the_author_email(); ?>">
								<strong><?php the_author_email(); ?></strong>
							</a>
						</p>
						<div class="breaker">
							<?php if (user_social_media()) : 
								user_social_media(); 
							endif; ?>
						</div>
					</div>
				</div>

				<?php if (have_posts()) : ?>
					<div class="col-xs-12 col-sm-8 col-sm-offset-2">
						<div class="news-section">
							<?php while (have_posts()) : the_post(); ?>
								<?php get_template_part('partials/content','blog'); ?>
							<?php endwhile; ?>
						</div>
						<div class="text-center">
							<?php navigator('Nyare inlägg','Äldre inlägg'); ?>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</section>

<?php get_footer(); ?>
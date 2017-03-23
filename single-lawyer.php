<?php get_header(); ?>

<section class="single-lawyer">
	<div class="container">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-4 col-md-offset-1">
						<?php if ( get_field('image') ) : 
							echo '<img src="'.get_field('image')['sizes']['large'].'" />';
						else :
							echo '<div class="no-picture"><i class="camera"></i></div>';
						endif; ?>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6">
						<h1 class="mb-10"><?php the_title(); ?></h1>
							<?php 
								$areas = get_the_terms(get_the_ID(), 'lawyer_field');
								echo '<p>Arbetar med: <br/>';
									foreach ($areas as $area ) : 
										echo '<a href="'.get_term_link($area).'">' .  $area->name . '</a> <br />'; 
									endforeach;
								echo '</p>';
							?>
							<div class="contact">
								<p><i class="fa fa-mobile"></i>
								<?php the_field('phone_number'); ?></p>
								<p><i class="fa fa-envelope-o fa-1x"></i> 
								<a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></p>
							</div>

							<div class="social">
								<?php 
									$social = get_field('social_media');
									foreach ($social as $item) {
										echo '<a href="'.$item['link'].'"><i class="fa fa-'.$item['social_item'].'"></i></a>';
									}
								?>
							</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-10 col-sm-offset-1 about">
						<h3>Om <?php the_title(); ?></h3>
						<?php the_content(); ?>
					</div>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</section>

<?php go_back_button(); ?>

<?php get_footer(); ?>
<?php 
/* Template Name: Kontaktsida */

get_header();
	if (have_posts()) {
		while(have_posts()) { the_post(); ?>
			<section class="contact">
				<div class="container">
					<div class="row mb-20">
						<div class="col-xs-12 text-center col-md-10 col-md-offset-1">
							<h1 class="archive-lawyer mb-10"><?php the_title(); ?> </h1>
						</div>
					</div>
					<div class="row">
						<div class="bar">
							<div class="col-xs-12 col-sm-8 col-sm-offset-2">
								<?php the_field('google_maps'); ?>
							</div>
							<div class="col-xs-12 col-sm-8 col-sm-offset-2">
								<div class="social black">
									<p><?php the_field('contact_phone_number'); ?> |</p>
									<p><?php the_field('contact_adress'); ?> |</p>
									<p><a href="mailto:<?php the_field('contact_email'); ?>"><?php the_field('contact_email'); ?></a></p>
								</div>
							</div>
						</div>
					</div>
					<div class="row text-center mt-20 mb-20">
						<div class="col-xs-12 col-sm-10 col-sm-offset-1">
							<?php the_content(); ?>
						</div>
					</div>
					<?php if(get_field('contact_social')): ?>
						<div class="row text-center">
							<div class="col-xs-12">
								<div class="social mt-20">
									<?php 
										$social = get_field('social_footer','options');
										foreach ($social as $item): 
											echo '<a href="'.$item['link'].'"><i class="fa fa-'.$item['icon'].'"></i></a>';
										endforeach;
									?>
								</div>
							</div>
						</div>
					<?php endif; ?>
				</div>
			</section>
			<?php if (get_field('sections')) : 
				get_template_part('partials/flexible'); 
			endif;
		}
	}
get_footer();
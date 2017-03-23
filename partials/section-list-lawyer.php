<section class="lawyer list <?php the_sub_field('background_color'); ?>">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 text-center">
				<h2 class="mb-10"><?php the_sub_field('title'); ?></h2>
			</div>
		</div>	
		<div class="row">
			<?php $recent_posts = wp_get_recent_posts( array(
				'post_type' => 'lawyer',
				'numberposts' => -1
			)); 
			
			foreach( $recent_posts as $recent ){
				echo '<div class="col-xs-6 col-sm-3"><div class="block text-center">';

				$image = get_field('image',$recent['ID']); 
				$size = $image['sizes']['thumbnail'];
				if($image) :
					echo "<img src='$size' />";
				else : 
					echo '<div class="placeholder"></div>';
				endif;

				echo '<h2><a href="' . get_permalink($recent["ID"]) . '">' . $recent["post_title"] . '</a></h2>';
				echo '<blockquote>'.get_field('quote', $recent['ID']).'</blockquote>';
				echo '<p>' . get_the_terms('lawyer_field',$recent['ID']) . '</p>';

				echo '<div class="black-box">';
				echo '<a href="'.get_field('skype',$recent['ID']).'"><i class="fa fa-skype"></i></a>';
				echo '<a href="mailto:'.get_field('email',$recent['ID']).'"><i class="fa fa-envelope-o"></i></a>';
				echo '</div></div></div>';
			}
			wp_reset_query(); ?>
		</div>
	</div>
</section>
<section class="hours <?php the_sub_field('background_color'); ?>">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<?php 
				echo '<h3 class="text-center">' . get_sub_field('title') . '</h3>';

				if (get_sub_field('what_kind') == 'weekday') :
					opening_hours('Monday', 'Måndag');
					opening_hours('Tuesday', 'Tisdag');
					opening_hours('Wednesday', 'Onsdag');
					opening_hours('Thursday', 'Torsdag');
					opening_hours('Friday', 'Fredag');
					opening_hours('Saturday', 'Lördag');
					opening_hours('Sunday', 'Söndag');

				elseif (get_sub_field('what_kind') == 'special') :
					echo '<table>';
						echo '<tr>';
							echo '<th>Dag</th>';
							echo '<th>Tid</th>';
						echo '</tr>';
						foreach (get_sub_field('special_days') as $day) :
							echo '<tr>';
								echo '<td>'.$day['special_day'] . '</td>';
								echo '<td> ' . $day['special_time'] . '<td>';
							echo '</tr>';
						endforeach; 
					echo '</table>';
				endif;
				?>
			</div>
		</div>
	</div>
</section>
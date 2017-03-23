<?php

/* Egna funktioner
--------------------------------------------------------------------------*/

#1 Lägga till logga ifall det finns en inlagd, annars läggs sidnamnet till.
	function my_logo(){
		if ( get_field('logo','options') ){
			echo '<div class="logotype">';
				echo '<img src="'.get_field('logo','options').'">';
			echo '</div>';
		}
		 else {
		 	echo '<div class="logotype">';
				bloginfo('name');
			echo '</div>';
		}	
	}

#2 Lista mina taxonomier
	function my_taxonomies($taxonomy_name){
		$taxonomies = get_terms("$taxonomy_name", array("fields" => "all")); 
			foreach ($taxonomies as $taxonomy) :
				echo '<div class="col-xs-6 col-sm-3">';
					echo '<div class="block">';
						echo '<h2><a href="'.get_term_link( $taxonomy ).'">'.$taxonomy->name.'</a></h2>';
					echo '</div>';
				echo '</div>';
			endforeach;
		}

#3 Profilbild(eller avatar) för användare
	function user_profile_picture(){
			$author_id = get_the_author_meta('ID');
			$author_badge = get_field('profile_picture', 'user_'. $author_id );

		if ($author_badge) : ?>
		 	<img src="<?php echo $author_badge['sizes']['thumbnail']; ?>"  />
		<?php else: 
			echo get_avatar( get_the_author() ); 
		endif;
	}

#4 Sociala medier för användare
	function user_social_media(){
			$author_id = get_the_author_meta('ID');
			$author_badge = get_field('profile_social_media', 'user_'. $author_id );

		foreach($author_badge as $item):
			echo '<strong>';
				echo '<a href="' . $item["profile_link"] . '">';
					echo '<i class="fa fa-' . $item["profile_icon"] . '"></i>';
				echo '</a>';
			echo '</strong> ';
		endforeach;
	}

#5 Öppettider
	function opening_hours($day, $title) {
		$today = current_time('l');

		echo '<table>';
			if ($today == $day && get_field($day,'options')) :
				echo '<tr>';
					echo "<td><strong>$title </strong></td>";
					echo '<td><strong> ' . get_field($day,'options') . '</strong></td>';
				echo '</tr>';
			else :
				echo '<tr>';
					echo "<td>$title </td>";
					echo '<td>' . get_field($day,'options'). '</td>';
				echo '</tr>' ;
			endif;
		echo '</table';
	}

#6 Navigation
	function navigator($previous, $next){
		if (get_previous_posts_link() || get_next_posts_link()) {
			echo '<nav class="navigation pagination">';
				echo '<div class="nav-links">';
					if (get_previous_posts_link()) :
						echo '<span class="page-numbers">';
							previous_posts_link($previous);
						echo '</span>';
					endif;
					if (get_next_posts_link()) :
						echo '<span class="page-numbers">';
							next_posts_link($next);
						echo '</span>';
					endif;
				echo '</div>';
			echo '</nav>';
		}
	}

#7 Frågeformulär
	function form_question($button, $logged_in){
		if ( $logged_in ) :
			if ( is_user_logged_in() ) : 
				acf_form(array(
					'post_id' => 'new_post',
					'post_title' => false,
					'post_content' => false,
					'fields' => array('question'),
					'new_post' => array(
						'post_type' => 'question',
						'post_status' => 'draft'
						),
					'submit_value' => "$button"
				));
			else :
				wp_login_form(); 
			endif;
		else : 
			acf_form(array(
				'post_id' => 'new_post',
				'post_title' => false,
				'post_content' => false,
				'fields' => array('question'),
				'new_post' => array(
					'post_type' => 'question',
					'post_status' => 'draft'
					),
				'submit_value' => "$button"
			));
		endif;
	}

#8 Tillbakaknapp
	function go_back_button($section = true){
		if ($section) : ?>
			<section class="go-back">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center">
							<input class="button" type="button" value="Gå tillbaka" onclick="history.back(-1)" />
						</div>
					</div>
				</div>
			</section>
		<?php else :
			echo '<input class="button" type="button" value="Gå tillbaka" onclick="history.back(-1)" />';
		endif;
	}

#9 Breadcrumbs
	function breadcrumbs() {
		global $post;

		$separator = " / ";
		$home = "Nyheter";

		echo '<section class="breadcrumbs">';
			echo '<div class="container">';
				echo '<div class="row">';
					echo '<div class="col-xs-12">';
						echo '<ul class="breadcrumbs archive-lawyer tiny">';
							echo '<li>Du är här: </li>';
							if ( is_home() ) {
								echo '<li>' . $home . '</li>';
							}
							else {
								echo '<li><a href="'.get_permalink( get_option('page_for_posts')).'">' . $home . '</a></li>';
							}
							if ( is_single() ) {
								echo '<li>' . $separator . '</li>';
								echo '<li>' . $post->post_title . '</li>';
							}
							if ( is_author() ) {
								echo '<li>' . $separator . '</li>';
								echo '<li>Författare</li>';
								echo '<li>' . $separator . '</li>';
								echo '<li>' . get_the_author("display_name") . '</li>';
							}
							if ( is_category() ) {
								echo '<li>' . $separator . '</li>';
								echo '<li>Kategori</li>';
								echo '<li>' . $separator . '</li>';
								echo '<li>';
								single_cat_title();
								echo '</li>';
							}
							if ( is_archive() && !is_author() && !is_category() ) {
								echo '<li>' . $separator . '</li>';
								echo '<li>Arkiv</li>';
								echo '<li>' . $separator . '</li>';
								single_month_title( " " );
							}
							if ( is_search() ) {
								echo '<li>' . $separator . '</li>';
								echo '<li>Sökresultat</li>';
							}
						echo '</ul>';
					echo '</div>';
				echo '</div>';
			echo '</div>';
		echo '</section>';
	}

<?php

/* Custom Post Types
--------------------------------------------------------------------------*/

# Lägg till custom post type: Advokater och frågor
	function create_new_post_type(){
		register_post_type('lawyer',array(
			'labels' => array(
				'name' => 'Advokater',
				'singular_name' => 'Advokat',
				'view_item' => 'Visa advokat',
				'edit_item' => 'Redigera advokat',
				'add_new' => 'Lägg till ny advokat',
				'not_found' => 'Hittade inga advokater',
				'search_items' => 'Sök advokat',
				'all_items' => 'Alla advokater',
				'new_item' => 'Ny advokat'
				),
			'public' => true,
			'has_archive' => true,
			'menu_position' => 5,
			'menu_icon' => 'dashicons-businessman'
		));	

		register_post_type('question',array(
			'labels' => array(
				'name' => 'Rådgivning',
				'singular_name' => 'Fråga',
				'view_item' => 'Visa fråga',
				'edit_item' => 'Redigera fråga',
				'add_new' => 'Lägg till ny fråga',
				'not_found' => 'Hittade inga frågor',
				'search_items' => 'Sök fråga',
				'all_items' => 'Alla frågor',
				'new_item' => 'Ny fråga'
				),
			'public' => true,
			'has_archive' => true,
			'menu_position' => 5,
			'menu_icon' => 'dashicons-testimonial'
		)); 
	}

	add_action('init','create_new_post_type');


# Lägg till custom taxonomies: Rättsområde
	function create_new_taxonomy(){
		register_taxonomy(
			'lawyer_field',
			'lawyer',
			array(
				'labels' => array(
					'name' => 'Rättsområden',
					'single_name' => 'Rättsområde',
					'edit_item' => 'Redigera rättsområde',
					'view_item' => 'Visa rättsområde',
					'search_items' => 'Sök rättsområden',
					'all_items' => 'Alla rättsområden',
					'update_item' => 'Uppdatera rättsområde',
					'add_new_item' => 'Lägg till rättsområde'
				),
				'hierarchical' => true,
				'show_admin_column' => true
			)
		);		
	}

	add_action('init','create_new_taxonomy');
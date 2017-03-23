<?php

/* Admin och temainställningar
--------------------------------------------------------------------------*/

# Lägg till js-scripts och css-filer
	function add_scripts(){
		wp_enqueue_style( 'main' , get_template_directory_uri().'/assets/css/main.css' );
		wp_enqueue_script( 'owl.carousel' , get_template_directory_uri().'/assets/js/owl.carousel.js', array('jquery') , false , true );
		wp_enqueue_script( 'scripts' , get_template_directory_uri().'/assets/js/scripts.js', array('jquery', 'owl.carousel') , false , true );
	}
	add_action( 'wp_enqueue_scripts' , 'add_scripts' );

#Lägga till menyer
	function register_my_menu(){
		register_nav_menu( 'huvudmeny', 'Huvudmeny' );
		}
	add_action( 'after_setup_theme', 'register_my_menu' );

# Lägg till options i adminpanelen
	if (function_exists('acf_add_options_page')) {
		acf_add_options_page('Alternativ');
	}

# Byt namn på inlägg till nyheter
	function change_post_menu_label() {
		global $menu, $submenu;
		$menu[5][0] = 'Nyheter';
		$submenu['edit.php'][5][0] = 'Nyheter';
		$submenu['edit.php'][10][0] = 'Skapa ny';
	}
	add_action( 'admin_menu', 'change_post_menu_label' );

#Registrera sidebar
	function register_my_sidebars(){
		register_sidebar(array(
			'name' => 'Sidebar Nyheter',
			'id' => 'news-sidebar',
			'before_widget' => '<div class="news-sidebar">',
			'after_widget' => '</div>',
			'before_title' => '<h4>',
			'after_title' => '</h4>'
		));
	}

	add_action( 'widgets_init' , 'register_my_sidebars' );

# Tillåt thumbnails
	add_theme_support('post-thumbnails');



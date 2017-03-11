<?php

function scripts_and_styles() {
  if (!is_admin() && $_SERVER['SCRIPT_NAME'] != '/wp-login.php') {
	
		// de and re register jquery
		wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js');
    wp_enqueue_script( 'jquery' );
    
    wp_register_style( 'respgrid', get_template_directory_uri() . '/library/css/foundation.min.css', array(), '6.0', 'all' );
    wp_register_style( 'stylesheet', get_stylesheet_directory_uri() . '/library/css/style.css', array(), '1.0.0', 'all' );
		wp_enqueue_style( 'respgrid' );
		wp_enqueue_style( 'stylesheet' );
		
    
   	wp_register_script( 'modernizr', get_stylesheet_directory_uri() . '/library/js/libs/modernizr.custom.min.js', array(), '2.5.3', false );
   	wp_register_script( 'waypoints', get_stylesheet_directory_uri() . '/library/js/libs/min/jquery.waypoints.min.js', array(), '4.0.1', false );
   	wp_register_script( 'slick', get_stylesheet_directory_uri() . '/library/js/libs/min/slick.min.js', array(), '1.6.0', true );
   	wp_register_script( 'classie', get_stylesheet_directory_uri() . '/library/js/classie.js', array(), '1.0.0', true );
   	wp_register_script( 'navscr', get_stylesheet_directory_uri() . '/library/js/nav.js', array(), '1.0.0', true );
		wp_register_script( 'allscripts', get_stylesheet_directory_uri() . '/library/js/scripts.js', array(), '1.0.0', true );
		wp_enqueue_script( 'modernizr' );
		wp_enqueue_script( 'waypoints' );
		//wp_enqueue_script( 'classie' );
		wp_enqueue_script( 'navscr' );
		wp_enqueue_script( 'slick' );
		wp_enqueue_script( 'allscripts' );
		
	}
}

/* Enqueue base scripts and styles */
add_action('wp_enqueue_scripts', 'scripts_and_styles', 999);



/* Hide Admin Bar */
show_admin_bar( false );

add_filter('gform_validation_message', 'change_message', 10, 2);
function change_message($message, $form){
return '
<div class="validation_error">Please add your details below.</div>
';
}


add_filter( 'gform_confirmation_anchor', '__return_true' );


/**
 * add page slug to body class, if on a page
 */
 
add_filter('body_class','smartestb_pages_bodyclass');
function smartestb_pages_bodyclass($classes) {
  if (is_page()) {
      // get page slug
      global $post;
      $slug = get_post( $post )->post_name;

      // add slug to $classes array
      $classes[] = $slug;
      // return the $classes array
      return $classes;
  } else { 
      return $classes;
  }
}
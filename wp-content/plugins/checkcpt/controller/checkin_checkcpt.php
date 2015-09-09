<?php
/*
Plugin Name: CheckCPT
Plugin URI: http://checkin.dev/
Description: This is the plugin for the custom post type registration for "business" and "profession"
Version: 0.0.1
Author: Scott Adrian
Author URI: http://www.storebloom.com/
*/

class CheckCPT{

	const SITE_PREFIX = 'checkin_';

	function __construct() {

		add_action( 'init', 'checkin_create_multiple_post_types' );
		add_action( 'init_post_types', 'checkin_create_post_type' 10, 3);
	}

	public function checkin_create_multiple_post_types(){

		do_action('init_post_types', self::SITE_PREFIX . 'business', 'Businesses', 'Business');
		do_action('init_post_types', self::SITE_PREFIX . 'profession', 'Professions', 'Profession')

	}

	public function checkin_create_post_type($post_type, $name, $singular) {
 		
 		register_post_type( 

 			$post_type,

    		array(
	      		'labels' => array(
	        		'name' => __( $name ),
	        		'singular_name' => __( $singular )
	     		 ),
      			'public' => true,
      			'has_archive' => true,
    		)
  		);
	}
}
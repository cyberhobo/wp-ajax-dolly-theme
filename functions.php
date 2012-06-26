<?php 

// Pattern: static class as PHP 5.2 namespace

AjaxRecipesTheme::load();

class AjaxRecipesTheme {

	static function load() {

		add_action( 
			'admin_enqueue_scripts', 
			array( 
				__CLASS__, 
				'action_admin_enqueue_scripts' 
			) 
		);

		add_action(
			'wp_ajax_hello_dolly',
			array( 
				__CLASS__,
				'action_wp_ajax_hello_dolly'
			)
		);

	}

	static function action_admin_enqueue_scripts() {

		wp_enqueue_script( 
			'ajax-recipes-hello-admin',
			get_stylesheet_directory_uri() . '/hello-admin.js',
			array( 'jquery' ),
			false,
			true 
		);

	}

	static function action_wp_ajax_hello_dolly() {
		exit( hello_dolly_get_lyric() );
	}

}

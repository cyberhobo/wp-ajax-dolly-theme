<?php 
wp_enqueue_script( 
	'ajax-recipes-hello',
	get_stylesheet_directory_uri() . '/hello.js',
	array( 'jquery' ),
	false,
	true
); 

$hello_config = array( 
	'ajaxurl' => admin_url( 'admin-ajax.php' )
);

wp_localize_script( 
	'ajax-recipes-hello',
	'ajaxRecipesConfig',
	$hello_config
);
?>

<?php get_header(); ?>

<div id="primary">
	<div id="content" role="main">

		<h1 class="entry-title">Are You Dolly?</h1>

		<button id="ajax-recipe-impersonate-dolly">I'm Dolly</button>

		<p id="ajax-recipe-spinner" style="display:none;">
			<img src="<?php 
				echo get_stylesheet_directory_uri(); ?>/spinner.gif"
				alt="..." />
		</p>

		<p id="ajax-recipe-dolly-message">
		If you're Dolly, I have a message for you.
		</p>

	</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>

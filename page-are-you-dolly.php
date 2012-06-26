<?php wp_enqueue_script( 'jquery' ); ?>

<?php get_header(); ?>

<div id="primary">
	<div id="content" role="main">

		<h1 class="entry-title">Are You Dolly?</h1>

		<button id="ajax-recipe-impersonate-dolly">I'm Dolly</button>

		<p id="ajax-recipe-dolly-message">
		If you're Dolly, I have a message for you.
		</p>

	</div><!-- #content -->
</div><!-- #primary -->

<script>
jQuery( function( $ ) {
	var $message = $( '#ajax-recipe-dolly-message' );

	$( '#ajax-recipe-impersonate-dolly' ).click( function() {
		$message.html( '...' );
		$.ajax( {
			url: '<?php echo admin_url( 'admin-ajax.php' ); ?>',
			data: { action: 'hello_dolly' },
			dataType: 'text',
			success: function( data ) {

				$message.html( data );

			} 
		} );
	} );
} );
</script>
<?php get_footer(); ?>

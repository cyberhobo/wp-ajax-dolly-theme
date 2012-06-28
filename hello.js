jQuery( function( $ ) {
	var $message = $( '#ajax-recipe-dolly-message' ),
		$spinner = $( '#ajax-recipe-spinner' );

	$( '#ajax-recipe-impersonate-dolly' ).click( function() {
		$message.hide();
		$spinner.show();
		$.ajax( {
			url: ajaxRecipesConfig.ajaxurl,
			data: { action: 'hello_dolly' },
			dataType: 'text',
			success: function( data ) {

				$spinner.hide();
				$message.show().html( data );

			} 
		} );
	} );
} );

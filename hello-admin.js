jQuery( function( $ ) {
	var $dolly = $( '#dolly' );

	$dolly.click( function() {

		$dolly.html( 'loading...' );

		$.ajax( {
			url: ajaxurl,
			data: { action: 'hello_dolly' },
			dataType: 'text', 
			success: function( lyric ) {
				$dolly.html( lyric );
			}
		} );
	} );
} );

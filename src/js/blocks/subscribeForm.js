import Swal from 'sweetalert2';

const subscribeForm = ( $ ) => {
	const subscribeForm = $( '.subscribe-form' );

	if ( subscribeForm.length ) {
		subscribeForm.submit( function( e ) {
			e.preventDefault();

			const data = {
				action: BulkQRTheme.subscribeAction,
				nonce: BulkQRTheme.subscribeNonce,
				email: $( '#subs_email' ).val()
			};


			$.ajax( {
				type: 'POST',
				url: BulkQRTheme.ajaxUrl,
				data: data,
				success: function( res ) {
					if ( res.success ) {
						Swal.fire( {
							title: res.data.title,
							text: res.data.message,
							icon: 'success'
						} );
					} else {
						Swal.fire( {
							icon: 'error',
							title: 'Oops...',
							text: res.data.message,
						} );
					}

					subscribeForm[ 0 ].reset();
				},
				error: function( xhr ) {
					console.log( 'error...', xhr );
					//error logging
					Swal.fire( {
						icon: 'error',
						title: 'Oops...',
						text: 'Something went wrong!',
					} );
				}
			} );
		} );
	}
};

export default ( ( $ ) => $( subscribeForm ) )( jQuery );

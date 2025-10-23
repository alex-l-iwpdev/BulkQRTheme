const plansSubscribe = ( $ ) => {
	const planSelector = $( '.plans-radio input' );
	if ( planSelector.length ) {
		planSelector.change( function( e ) {
			let value = $( this ).val();
			const plansItem = $( '.plans-item' );

			plansItem.map( ( index, item ) => {
				let html = '';

				if ( 'monthly' === value ) {
					let monthlyPrice = $( item ).find( '.price' ).data( 'by_month' );

					html = `<span>$${monthlyPrice}</span> / ${value}`;
				}

				if ( 'yearly' === value ) {
					let yearlyPrice = $( item ).find( '.price' ).data( 'by_yearly' );

					html = `<span>$${yearlyPrice}</span> / ${value}`;
				}

				$( item ).find( '.price' ).html( html );
			} );
		} );
	}
};

export default ( ( $ ) => $( plansSubscribe ) )( jQuery );

import CurrencyAPI from '@everapi/currencyapi-js';

const plansSubscribe = ( $ ) => {
	const planSelector = $( '.plans-radio input' );
	const currencyApi = new CurrencyAPI( BulkQRTheme.currencyApiKey );
	const plansItem = $( '.plans-item' );
	const currencySelect = $( '#plans-currency' );
	let symbol = currencySelect.val();
	const currencySymbol = {
		USD: '$',
		EUR: '€',
		PLN: 'zł',
		UAH: '₴',
	};
	const planCtaButton = $( '.plans-item .btn' );
	const modal = $( '.registration' );


	if ( planSelector.length ) {
		planSelector.change( function( e ) {
			convertCurrency( 'USD', symbol );
		} );
	}

	if ( currencySelect.length ) {
		currencySelect.change( function( e ) {
			let value = $( this ).val();
			convertCurrency( 'USD', value );
			symbol = value;
		} );
	}

	/**
	 * Converts the currency values of items displayed on the page based on the specified base currency and target currency.
	 *
	 * @param {string} base_currency The base currency from which conversion rates will be calculated.
	 * @param {string} currency The target currency to which values will be converted.
	 * @return {void} This method does not return a value; it updates the displayed currency values on the page.
	 */
	function convertCurrency( base_currency, currency ) {
		let currenCourse = 0;

		currencyApi.latest( {
			base_currency: base_currency,
			currencies: currency,
			type: 'fiat',
		} ).then( response => {
			currenCourse = response.data[ currency ][ 'value' ];

			let currentPlan = $( '.plans-radio input:checked' ).val();

			plansItem.map( ( index, item ) => {

				let html = '';
				let stripeLink = '';
				if ( 'monthly' === currentPlan ) {
					let monthlyPrice = Math.round( $( item ).find( '.price' ).data( 'by_month' ) * currenCourse );
					stripeLink = $( item ).find( '.btn' ).data( 'form_m' );

					html = `<span>${currencySymbol[ symbol ]} ${monthlyPrice}</span> / Monthly`;
				}

				if ( 'yearly' === currentPlan ) {
					let yearlyPrice = Math.round( $( item ).find( '.price' ).data( 'by_yearly' ) * currenCourse );
					stripeLink = $( item ).find( '.btn' ).data( 'form_y' );

					html = `<span>${currencySymbol[ symbol ]} ${yearlyPrice}</span> / Yearly`;
				}

				$( item ).find( '.price' ).html( html );
				if ( stripeLink.length ) {
					$( item ).find( '.btn' ).attr( 'href', stripeLink );
				}
			} );
		} );
	}

	if ( planCtaButton.length ) {
		planCtaButton.click( function( e ) {
			if ( '#registation' === $( this ).attr( 'href' ) ) {
				e.preventDefault();
				modal.modal( 'show' );
			}
		} );
	}
};

export default ( ( $ ) => $( plansSubscribe ) )( jQuery );

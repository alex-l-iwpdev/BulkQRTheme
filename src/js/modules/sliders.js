jQuery( document ).ready( function( $ ) {
	let reviewsSlider = $( '.reviews-items' ),
		bannerSlider = $( '.banner-slider' ),
		iconArrowPrev = '<i class="bi bi-chevron-left"></i>',
		iconArrowNext = '<i class="bi bi-chevron-right"></i>';
	if ( bannerSlider.length ) {
		bannerSlider.slick( {
			slidesToShow: 1,
			prevArrow: iconArrowPrev,
			nextArrow: iconArrowNext,
			responsive: [
				{
					breakpoint: 1024,
					settings: {
						arrows: false
					}
				}]
		} );
	}
	if ( reviewsSlider.length ) {
		reviewsSlider.slick( {
			slidesToShow: 3,
			slidesToScroll: 1,
			arrows: false,
			dots: true,
			infinite: true,
			responsive: [
				{
					breakpoint: 1200,
					settings: {
						slidesToShow: 2
					}
				},
				{
					breakpoint: 768,
					settings: {
						slidesToShow: 1
					}
				}
			]
		} );
	}
} );

jQuery(document).ready(function ($) {
	let reviewsSlider = $('.reviews-items'),
		bannerSlider = $('.banner-slider'),
		planSlider = $('.plans-items'),
		iconArrowPrev = '<i class="bi bi-chevron-left"></i>',
		iconArrowNext = '<i class="bi bi-chevron-right"></i>';
	if (bannerSlider.length) {
		bannerSlider.slick({
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
		});
	}
	if (reviewsSlider.length) {
		reviewsSlider.slick({
			slidesToShow: 3,
			slidesToScroll: 1,
			arrows: false,
			dots: true,
			infinite: true,
			responsive: [
				{
					breakpoint: 992,
					settings: "unslick"
				},
				{
					breakpoint: 768,
					settings: {
						slidesToShow: 1
					}
				}
			]
		});
	}
	if (planSlider.length) {
		function slederPlan() {
			if ($(window).width() >= 992) {
				if (planSlider.hasClass('slick-initialized')) {
					planSlider.slick('unslick');
				}
			} else if (!planSlider.hasClass('slick-initialized')) {
				planSlider.slick({
					arrows: false,
					dots: true,
					infinite: false,
					responsive: [
						{
							breakpoint: 992,
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
				});
			}
		}
		slederPlan();
		$(window).on('resize', function () {
			slederPlan();
		});
	}
});

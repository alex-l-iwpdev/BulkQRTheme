jQuery(document).ready(function($) {
    let reviewsSlider = $('.reviews-items'),
    planSlider = $('.plans-items'),
    bannerSlider = $('.banner-slider'),
    iconArrowPrev = '<i class="bi bi-chevron-left"></i>',
    iconArrowNext = '<i class="bi bi-chevron-right"></i>';
    if(bannerSlider.length) {
        bannerSlider.slick({
            slidesToShow: 1,
            prevArrow: iconArrowPrev,
            nextArrow: iconArrowNext,
        });
    }
    if(reviewsSlider.length){
        reviewsSlider.slick({
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
        });
    }
    if(planSlider.length){
        planSlider.slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            arrows: false,
            dots: true,
            infinite: false,
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
        });
    }
});

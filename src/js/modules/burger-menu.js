jQuery(document).ready(function ($) {
    function menuMobile() {
        const menuEl = $('header .menu'),
            menuWrapper = '<div class="mobile-menu"></div>',
            burgerBtn = '<div class="burger-menu"><span></span><span></span><span></span></div>';
        if ($(window).width() > 1024) {
            $('.mobile-menu .burger-menu').remove();
            menuEl.unwrap('.mobile-menu');
        } else {
            if ($('.mobile-menu').length === 0) {
                menuEl.wrap(menuWrapper);
                $('.mobile-menu').prepend(burgerBtn);
            }
        }
    }
    menuMobile();
    $(window).on('resize', function () {
        menuMobile();
    });
    $(".burger-menu").on('click', function () {
        $(".burger-menu").toggleClass('close-menu');
        $('.mobile-menu').toggleClass('open-menu');
        $("body").toggleClass('hidden');
    });
});
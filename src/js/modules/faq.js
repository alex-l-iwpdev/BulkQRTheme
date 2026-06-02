jQuery(document).ready(function ($) {
    // Accordion functionality
    $('.faq__q').click(function () {
        const $item = $(this).closest('.faq__item');
        const isOpen = $item.hasClass('faq__item--open');

        // Close all other items in the same group or globally (depending on desired behavior)
        // Usually, for this design, we close others in all groups
        $('.faq__item').removeClass('faq__item--open').find('.faq__q').attr('aria-expanded', 'false');

        if (!isOpen) {
            $item.addClass('faq__item--open');
            $(this).attr('aria-expanded', 'true');
        }
    });

    // Sidebar navigation
    $('.faq__nav-item').click(function (e) {
        e.preventDefault();
        const targetId = $(this).attr('href');
        const $target = $(targetId);

        if ($target.length) {
            $('html, body').animate({
                scrollTop: $target.offset().top - 30 // adjust offset if needed
            }, 600);

            // Update active state
            $('.faq__nav-item').removeClass('faq__nav-item--active');
            $(this).addClass('faq__nav-item--active');
        }
    });

    // Optional: Update active nav item on scroll
    $(window).scroll(function () {
        const scrollDistance = $(window).scrollTop();

        $('.faq__group').each(function (i) {
            if ($(this).offset().top - 100 <= scrollDistance) {
                $('.faq__nav-item').removeClass('faq__nav-item--active');
                $('.faq__nav-item').eq(i).addClass('faq__nav-item--active');
            }
        });
    });
});

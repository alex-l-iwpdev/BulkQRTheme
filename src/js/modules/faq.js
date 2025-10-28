jQuery(document).ready(function($){
    $('.faq-item h3').click(function(){
        if($(this).find('i').hasClass('bi-plus')) {
            $('.faq-item i').removeClass('bi-dash').addClass('bi-plus');
            $('.faq-description').slideUp();
            $(this).find('i').removeClass('bi-plus').addClass('bi-dash');
            $(this).parent().find('.faq-description').slideDown();
        }else{
            $(this).find('i').removeClass('bi-dash').addClass('bi-plus');
            $(this).parent().find('.faq-description').slideUp();
        }
    });
});
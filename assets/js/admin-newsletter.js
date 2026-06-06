jQuery(document).ready(function($) {
    $('#bqs-newsletter-form').on('submit', function(e) {
        e.preventDefault();

        const $form = $(this);
        const $btn = $('#send-newsletter-btn');
        const $spinner = $form.find('.spinner');
        const $response = $('#newsletter-response');

        if (!confirm('Are you sure you want to send this newsletter to all users?')) {
            return;
        }

        $btn.prop('disabled', true);
        $spinner.addClass('is-active');
        $response.html('');

        const formData = new FormData(this);
        formData.append('action', BQSNewsletter.action);
        formData.append('nonce', BQSNewsletter.nonce);

        $.ajax({
            url: BQSNewsletter.ajaxUrl,
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                if (response.success) {
                    $response.html('<div class="notice notice-success"><p>' + response.data.message + '</p></div>');
                } else {
                    $response.html('<div class="notice notice-error"><p>' + response.data.message + '</p></div>');
                }
            },
            error: function() {
                $response.html('<div class="notice notice-error"><p>An error occurred while sending the newsletter.</p></div>');
            },
            complete: function() {
                $btn.prop('disabled', false);
                $spinner.removeClass('is-active');
            }
        });
    });
});

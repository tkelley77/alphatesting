jQuery(document).ready(function($) {
    $('#kanoa-notice .notice-dismiss').on('click', function() {
        $.ajax({
            type: 'POST',
            url: ajaxurl,
            data: {
                action: 'kanoa_dismiss_notice'
            }
        });
    });
});
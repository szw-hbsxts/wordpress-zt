jQuery(function ($) {
    $(document.body).on('click', '.connect_with_stripe', (e) => {
        const target = $(e.currentTarget);
        target.attr('disabled', 'disabled');

        if (target.data('connect') !== 'unconnect') {
            jQuery.get(
                ajaxurl,
                {
                    action: 'get_oauth_link',
                    status: `${target.data('status')}`,
                },
                function (res) {
                    if (res.success) {
                        window.location = res.data.url;
                    } else {
                        target.removeAttr('disabled');
                        target.textContent = '<Something went wrong>';
                        console.log('data', res);
                    }
                }
            );
        } else {
            jQuery.post(
                ajaxurl,
                {
                    action: 'deautoorize',
                },
                function (res) {
                    if (res.success) {
                        window.location.reload();
                    } else {
                        target.removeAttr('disabled');
                        target.textContent = '<Something went wrong>';
                        console.log('data', res);
                    }
                }
            );
        }
    });

    $('#woocommerce_stripe_partner_fee_type').change(function(value){
        if($(this).val()=='stable'){
            $('#woocommerce_stripe_partner_fee').closest('tr').show();
            $('#woocommerce_stripe_partner_rate').closest('tr').hide();
        }else{
            $('#woocommerce_stripe_partner_fee').closest('tr').hide();
            $('#woocommerce_stripe_partner_rate').closest('tr').show();
        }
    }).change();
});

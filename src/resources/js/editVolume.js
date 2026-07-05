$(document).ready(function() {
    var hetznerChangeExpiryValue = function () {
        var parent = $(this).parents('.field'),
            amount = parent.find('.hetzner-expires-amount').val(),
            period = parent.find('.hetzner-expires-period select').val();

        var combinedValue = (parseInt(amount, 10) === 0 || period.length === 0) ? '' : amount + ' ' + period;

        parent.find('[type=hidden]').val(combinedValue);
    };

    $('.hetzner-expires-amount').keyup(hetznerChangeExpiryValue).change(hetznerChangeExpiryValue);
    $('.hetzner-expires-period select').change(hetznerChangeExpiryValue);
});

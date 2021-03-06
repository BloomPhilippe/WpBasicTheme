(function ($) {
    $(function () {
        $('#contact-page').submit(function (e) {
            e.preventDefault();
            var formResult = $(this).serialize();
            console.log(Infos);
            $.ajax({
                type: "get",
                contentType: "application/json; charset=utf-8",
                url: Infos.ajaxurl,
                data: {
                    action: 'contact_form',
                    nonce: 1234,
                    formData: formResult
                }
            })
                .done(function (result) {
                    var resultObj = JSON.parse(result);
                    if (resultObj.code == 200) {
                        $('.form-success').text(resultObj.message).fadeIn();
                    } else {
                        $('.form-error').text(resultObj.message).fadeIn();
                    }
                });

        })
    });
})(jQuery);

var $ = require('jquery');

module.exports = function(){

    $(document).ready( function() {
        $('#contact-page').submit(function (e) {
            e.preventDefault();
            console.log('send data');
            var formResult = $(this).serialize();
            $.ajax({
                type : "get",
                contentType: "application/json; charset=utf-8",
                url : Infos.ajaxurl,
                data : {
                    action: 'contact_form',
                    nonce: 1234,
                    formData: formResult
                }
            })
            .success(function (result) {
                console.log('success');
            });

        })

    });

};
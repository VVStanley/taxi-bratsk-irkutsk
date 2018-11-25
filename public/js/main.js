$(document).ready(function () {

    function ajax(url, data, callback, callbackErr) {

        $.ajax({
            url: url,
            type: 'POST',
            data: data,
            dataType: 'json',

            success: function (response) {
                console.log('ok');
                callback(response);
            },
            error: function (response) {
                console.log('bad');
                callbackErr(response);
            }
        })
    }


    $('.contact_form').on('submit', function (e) {
        e.preventDefault();

        ajax(
            $(this).attr('action'),
            $(this).serialize(),
            function (response) {

                console.log(response);

                $('.success').text('сообщение отправлено')
            },
            function (response) {

                console.log(response);
                $('.success').text('Введите верный номер телефона')
            }
            )
    })

});

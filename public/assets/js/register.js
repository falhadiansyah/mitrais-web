function pad(value) {
    return (parseInt(value) < 10 ? '0' : '') + parseInt(value);
}

$(function () {
    jQuery.validator.setDefaults({
        debug: true,
        success: "valid"
    });
    if (!$('#login-link').hasClass('hidden')) {
        $('#login-link').addClass('hidden');
    }

    $('#sign_up').validate({
        highlight: function (input) {
            $(input).parents('.form-line').addClass('error');
        },
        unhighlight: function (input) {
            $(input).parents('.form-line').removeClass('error');
        },
        errorPlacement: function (error, element) {
            $(element).parents('.input-group').append(error);
            $(element).parents('.form-group').append(error);
        },
        submitHandler: function (form) {
            let url = API_URL + "/auth/register";
            var data = $(form).serializeObject();

            if ((data.year && data.year.length == 4) && (data.month && pad(data.month).length == 2) && (data.date && pad(data.date).length == 2)) {
                data['birthdate'] = data.year +'-'+ pad(data.month) +'-'+ pad(data.date);
            }

            $('#sign_up').find('input, select, button').addClass('disabled').prop('disabled', true)
            axios.post(
                url,
                data
            )
            .then(function (response) {
                let apiResponse = response.data;
                console.log(apiResponse);

                if (apiResponse.message) {
                    let alertClass = apiResponse.success == true ? 'alert-info' : 'alert-warning';
                    let content = '<div class="alert '+ alertClass +'">'+ apiResponse.message +'</div>';
                    $('#alert-box').html(content).removeClass('hidden');
                }
                else {
                    $('#alert-box').html('').addClass('hidden');
                }

                if (apiResponse.success !== undefined && apiResponse.success !== true) {
                    $('#sign_up').find('input, select, button').removeClass('disabled').prop('disabled', false);

                    if (apiResponse.exceptions) {
                        $.each(apiResponse.exceptions, function(key, item) {
                            let content = '<label id="'+ key +'-error" class="error" for="'+ key +'" style="display: block;">'+ item +'</label>';
                            $(form).find('input[name="'+ key +'"]').parents('.form-line').addClass('error');
                            $(form).find('input[name="'+ key +'"]').parents('.input-group').append(content);
                            $(form).find('input[name="'+ key +'"]').parents('.form-group').append(content);
                        });
                    }
                }

                if (apiResponse.success == true && apiResponse.status == 200) {
                    $('#login-link').removeClass('hidden');
                    $('#footer-content').addClass('hidden');
                }
            })
            .catch(function (error) {
                console.log(error);
                $('#sign_up').find('input, select, button').removeClass('disabled').prop('disabled', false);
            });
        }
    });
});
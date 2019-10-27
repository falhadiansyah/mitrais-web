$(function () {
    jQuery.validator.setDefaults({
        debug: true,
        success: "valid"
    });

    $('#sign_in').validate({
        highlight: function (input) {
            $(input).parents('.form-line').addClass('error');
        },
        unhighlight: function (input) {
            $(input).parents('.form-line').removeClass('error');
        },
        errorPlacement: function (error, element) {
            $(element).parents('.input-group').append(error);
        },
        submitHandler: function (form) {
            let url = API_URL + "/auth/login";
            var data = $(form).serializeObject();

            $('#sign_in').find('input, select, button').addClass('disabled').prop('disabled', true)
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
                    $('#sign_in').find('input, select, button').removeClass('disabled').prop('disabled', false);

                    if (apiResponse.exceptions) {
                        $.each(apiResponse.exceptions, function(key, item) {
                            let content = '<label id="'+ key +'-error" class="error" for="'+ key +'" style="display: block;">'+ item +'</label>';
                            $(form).find('input[name="'+ key +'"]').parents('.form-line').addClass('error');
                            $(form).find('input[name="'+ key +'"]').parents('.input-group').append(content);
                        });
                    }
                }

                if (apiResponse.success == true && apiResponse.status == 200) {
                    let dataResult = apiResponse.data;
                    if (dataResult) {
                        $.cookie("auth", JSON.stringify(dataResult.user), { expires : 1 });
                        $.cookie("token", JSON.stringify(dataResult.access_token), { expires : 1 });
                    }

                    location.href = APP_URL;
                }
            })
            .catch(function (error) {
                console.log(error);
                $('#sign_in').find('input, select, button').removeClass('disabled').prop('disabled', false);
            });
        }
    });
});

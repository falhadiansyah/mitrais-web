$(function () {
    $('#btn-logout').click(function() {
        $.removeCookie("auth");
        $.removeCookie("token");

        location.href = APP_URL +'/signin';
    });
});

function doLogin()
{
    var loginInput = $("#loginInput").val();
    var passwordInput = $("#passwordInput").val();

    if(loginInput != "" && passwordInput != "")
    {
        $.ajax({
            type:'post',
            url:'/',
            data: {
                isLogin: true,
                login: loginInput,
                password: passwordInput
            },
            success: function(response) {

                var json = $.parseJSON(response);

                if(json.authorized == "true") {
                    $('#spinner').removeClass('fa-spinner fa-pulse fa-times-circle').addClass('fa-check-circle');
                    window.location.href="/admin/dashboard";
                } else {
                    $('#spinner').removeClass('fa-spinner fa-pulse').addClass('fa-times-circle');
                    $('#loginBtn').removeClass('disabled');
                    $('#loginForm').removeClass('disabled');
                    $('#passwordForm').removeClass('disabled');
                    $('#loginInput').removeClass('grey-text');
                    $('#passwordInput').removeClass('grey-text');
                }
            }
        });
    }

    else
    {
        console.log('empty login or password')
    }

    return false;
}
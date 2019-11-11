if ($(window).width() < 768) {
    $('#loginPanel').removeClass('w-25').addClass('w-50');
}
if ($(window).width() < 425) {
    $('#loginPanel').removeClass('w-50').addClass('w-75');
}

$( "#loginInput" ).focus(function() {
    if ($('#loginInput').val() == '') {
        $('#loginInput').addClass('validationErr');
        $('#validLoginLabel').addClass('errLabel');
    } else {
        $('#loginInput').removeClass('validationErr');
        $('#validLoginLabel').removeClass('errLabel');
    }
});

$( "#loginInput" ).keyup(function() {
    if ($('#loginInput').val() == '') {
        $('#loginInput').addClass('validationErr');
        $('#validLoginLabel').addClass('errLabel');
    } else {
        $('#loginInput').removeClass('validationErr');
        $('#validLoginLabel').removeClass('errLabel');
    }
});

$( "#passwordInput" ).focus(function() {
    if ($('#passwordInput').val() == '') {
        $('#passwordInput').addClass('validationErr');
        $('#validPasswordLabel').addClass('errLabel');
    } else {
        $('#passwordInput').removeClass('validationErr');
        $('#validPasswordLabel').removeClass('errLabel');
    }
});

$( "#passwordInput" ).keyup(function() {
    if ($('#passwordInput').val() == '') {
        $('#passwordInput').addClass('validationErr');
        $('#validPasswordLabel').addClass('errLabel');
    } else {
        $('#passwordInput').removeClass('validationErr');
        $('#validPasswordLabel').removeClass('errLabel');
    }
});

$( "#loginBtn" ).click(function() {

    if ($('#loginInput').val() == '') {
        $('#loginInput').addClass('validationErr');
        $('#validLoginLabel').addClass('errLabel');
    }

    if ($('#passwordInput').val() == '') {
        $('#passwordInput').addClass('validationErr');
        $('#validPasswordLabel').addClass('errLabel');
    }

    if($('#loginInput').val() != '' && $('#passwordInput').val() != '') {
        $('#loginBtn').addClass('disabled');
        $('#spinner').addClass('fa-spinner fa-pulse').removeClass('fa-robot fa-times-circle');
        $('#loginForm').addClass('disabled');
        $('#passwordForm').addClass('disabled');
        $('#loginInput').addClass('grey-text');
        $('#passwordInput').addClass('grey-text');
    }
});
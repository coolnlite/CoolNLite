$(document).ready(function () {
    //UP DOWN PANDA
    $('#password').focusin(function () {
        $('form').addClass('up')
    });
    $('#password').focusout(function () {
        $('form').removeClass('up')
    });

    // Panda Eye move
    $(document).on("mousemove", function (event) {
        var dw = $(document).width() / 15;
        var dh = $(document).height() / 15;
        var x = event.pageX / dw;
        var y = event.pageY / dh;
        $('.eye-ball').css({
            width: x,
            height: y
        });
    });
    //FORM LOGIN ADMIN
    $("#form-login").validate({
        rules: {
            username: {
                required: true,
                maxlength: 50,
            },
            password: {
                required: true,
                minlength: 8,
            },
        },
        messages: {
            username: {
                required: "Vui lòng nhập Tên tài khoản / Email",
                maxlength: "Vui lòng không nhập quá 50 ký tự"
            },
            password: {
                required: "Vui lòng nhập mật khẩu",
                minlength: "Vui lòng nhập ít nhất 8 ký tự",
            },
        },
        submitHandler: function (form) {
            $.ajax({
                type: "POST",
                url: "modules/login.php",
                data: $(form).serializeArray(),
                dataType : 'json',
                success: function (response) {
                    if(response.status == 0){
                        $('#alert').text(response.message);
                    }else{
                        window.location = response.message;
                    }
                },
            });
        },
    });
})

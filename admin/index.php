<?php
    ob_start(); 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ĐĂNG NHẬP VÀO COOL N LITE</title>
    <link rel="icon" sizes="32x32" href="../shared/img/icon.png">
    
    <link rel="stylesheet" href="./css/login.css">
</head>

<body>

        <div class="panda">
            <div class="ear"></div>
            <div class="face">
                <div class="eye-shade"></div>
                <div class="eye-white">
                    <div class="eye-ball"></div>
                </div>
                <div class="eye-shade rgt"></div>
                <div class="eye-white rgt">
                    <div class="eye-ball"></div>
                </div>
                <div class="nose"></div>
                <div class="mouth"></div>
            </div>
            <div class="body"> </div>
            <div class="foot">
                <div class="finger"></div>
            </div>
            <div class="foot rgt">
                <div class="finger"></div>
            </div>
        </div>
        <form id="form-login">
            <div class="hand"></div>
            <div class="hand rgt"></div>
            <div class="box-logo"><img src="../shared/img/logo.png" alt=""></div>
            <div class="form-group">
                <label class="form-label">Tên tài khoản / Email</label>
                <input type="text" class="form-control" name="username" />
                
            </div>
            <div class="form-group">
                <label class="form-label">Mật khẩu</label>
                <input id="password" type="password" name="password" class="form-control" />
               
                <p class="alert" id="alert"></p>
                <button type="submit" name="btn-login" class="btn">Đăng nhập</button>
            </div>
            <a href="forget_password.php" class="forget">Quên mật khẩu</a>
        </form>

    <!-- javascript -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.min.js"></script>
        <script>
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

        </script>
    <!-- javascript -->
</body>

</html>
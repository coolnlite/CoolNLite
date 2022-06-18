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
        <form id="form-">
            <div class="hand"></div>
            <div class="hand rgt"></div>
            <div class="box-logo"><img src="../shared/img/logo.png" alt=""></div>
            <h3 class="title-forget">Thay đổi mật khẩu</h3>
            <div class="form-group">
                <label class="form-label">Mật khẩu</label>
                <input type="password" class="form-control" id="password" name="password" />
            </div>
            <div class="form-group">
                <label class="form-label">Nhập lại mật khẩu</label>
                <input type="password" class="form-control" name="confirm_password" />
            </div>
            <div class="form-group">
                <p class="error" id="error"></p>
                <p class="success" id="success"></p>
                <button type="submit" name="_password" style="margin-top: 0px" class="btn">Cập Nhật</button>
            </div>
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
                $.validator.addMethod("pwcheck", function(value) {
                return /^[A-Za-z0-9\d=!\-@._*]*$/.test(value) // consists of only these
                    && /[a-z]/.test(value) // has a lowercase letter
                    && /\d/.test(value) // has a digit
                });

                $("#form-login").validate({
                    rules: {
                        password: {
                            required: true,
                            nowhitespace : true,
                            pwcheck : true,
                            maxlength: 33,
                        },
                        confirm_password: {
                            required: true,
                            nowhitespace : true,
                            equalTo: "#password",
                            maxlength: 33,
                        },
                    },
                    messages: {
                        password: {
                            required: "Vui lòng nhập mật khẩu",
                            nowhitespace : "Vui lòng không nhập khoảng trắng",
                            pwcheck : "Mật khẩu phải có ít nhất một thường, ít nhất 1 chữ hoa",
                            maxlength: "Vui lòng không nhập quá 33 ký tự"
                        },
                        confirm_password: {
                            required: "Vui lòng không để trống",
                            nowhitespace : "Vui lòng không nhập khoảng trắng",
                            equalTo : "Mật khẩu không khớp",
                            maxlength: "Vui lòng không nhập quá 33 ký tự"
                        },
                    },
                    submitHandler: function (form) {
                        $.ajax({
                            type: "POST",
                            url: "modules/password_reset_code.php",
                            data: $(form).serializeArray(),
                            dataType : 'json',
                            success: function (response) {
                                if(response.status == 1){
                                    $('#error').text(response.message);
                                }else{
                                    $('#success').text(response.message);
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
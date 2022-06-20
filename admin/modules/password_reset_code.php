<?php
    require_once('../../config/config.php');
    require_once('../../config/dbhelper.php');
    require_once('./function.php');
    
    include("../PHPMailer/src/PHPMailer.php");
    include("../PHPMailer/src/Exception.php");
    include("../PHPMailer/src/SMTP.php");


    if(isset($_POST['reset_password']) && !empty($_POST['email'])){

        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $token = getToken(30);

        $sql = "SELECT `email`,`full_name` FROM `users` WHERE `email` = '$email' LIMIT 1";
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0){

            $row = mysqli_fetch_array($result);
            $get_full_name = $row['full_name'];
            $get_email = $row['email'];

            $update_token = "UPDATE `users` SET `email_token`='$token' WHERE `email`='$get_email' LIMIT 1 ";
            $result_token = mysqli_query($conn, $update_token);
            if($result_token){
                send_password_reset($get_full_name,$get_email,$token);
                echo json_encode(array(
                    'status' => 0,
                    'message' => 'Chúng tôi đã gửi mail đến '.$email
                ));
                exit();
            }else{
                echo json_encode(array(
                    'status' => 1,
                    'message' => 'Có lỗi gì đó xảy ra'
                ));
                exit();
            }

        }else{
            echo json_encode(array(
                'status' => 1,
                'message' => 'Email '.$email.' trên không tồn tại'
            ));
            exit();
        }
    }
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    function send_password_reset($get_full_name,$get_email,$token){
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 2;                      //Enable verbose debug output
            $mail->isSMTP();
            $mail->CharSet = 'utf-8';                                      //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'damlongcaca@gmail.com';                     //SMTP username
            $mail->Password   = 'wopycvfyccegmlcs';                               //SMTP password
            $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('damlongcaca@gmail.com', 'Dam Long');
            $mail->addAddress($get_email, $get_full_name);     //Add a recipient

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Thông báo cập nhật lại mật khẩu';
            $email_templete = "
            <p>Xin Chào <b>$get_full_name</b></p>
            <p>Xin vui lòng nhấp vào đường dẫn bên dưới để cập nhật lại mật khẩu cho tài khoản của bạn</p>
            <a href='http://localhost/CoolNLite/admin/password_change.php?token=$token&email=$get_email'>
            http://localhost/CoolNLite/admin/password_change.php?token=$token&email=$get_email
            </a>
            ";
            $mail->Body    = $email_templete;
            $mail->smtpConnect( array(
                "ssl" => array(
                    "verify_peer" => false,
                    "verify_peer_name" => false,
                    "allow_self_signed" => true
                )
            ));
            
            $mail->send();
            echo 'Đã gửi mail thành công';
        } catch (Exception $e) {
            echo "Mail không gửi được. Mail lỗi: {$mail->ErrorInfo}";
        }
    }

?>
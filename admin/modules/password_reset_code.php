<?php
    require_once('../../config/config.php');
    require_once('../../config/dbhelper.php');
    require_once('./function.php');

    function send_password_reset($get_full_name,$get_email,$token){
        
    }

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
?>
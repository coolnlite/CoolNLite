<?php
    require_once('../../config/config.php');
    require_once('../../config/dbhelper.php');
    require_once('./function.php');

    if(isset($_POST['reset_password']) && !empty($_POST['email'])){

        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $token = getToken(30);

        $sql = "SELECT `email` FROM `users` WHERE `email` = '$email' LIMIT 1";
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0){

            $row = mysqli_fetch_array($result);
            $get_name = $row['name'];
            $get_email = $row['email'];

            $update_token = "UPDATE `users` SET `email_token`='$token' WHERE `email`='$email' LIMIT 1 ";
            $result_token = mysqli_query($conn, $update_token);
            if($result_token){

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
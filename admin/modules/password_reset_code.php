<?php
    require_once('../../config/config.php');
    require_once('../../config/dbhelper.php');
    require_once('./function.php');

    if(isset($_POST['reset_password']) && !empty($_POST['email'])){

        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $token = getToken(30);

        $sql = "SELECT `email` FROM `users` WHERE `email` = $email LIMIT 1";
        $result = mysqli_query($conn,$sql);

        if($result){

        }else{
            echo json_encode(array(
                'status' => 1,
                'message' => 'Email'.$email.'không tồn tại trong hệ thống'
            ));
        }
    }
?>
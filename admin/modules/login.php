<?php
ob_start(); 
session_start();
require_once('../../config/config.php');
require_once('../../config/dbhelper.php');
require_once('./function.php');

if(isset($_POST['btn-login'])){
    if(!empty($_POST['username']) && !empty($_POST['password'])){
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $password = md5($password);
        $on = 1;

        $sql = "SELECT `id`,`position` FROM `users` WHERE `user_name` = '$username' and `pass_word` = '$password' and `status` = $on
        || `email` = '$username' and `pass_word` = '$password' and `status` = $on";

        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        
        if($row != NULL){
            $id = $row['id'];
            $permision = $row['position'];

            $count = mysqli_num_rows($result);
            
            $token = getToken(30);
            
            $sql = "UPDATE `users` SET `token` = '$token' WHERE `id` = '$id'";
            execute($sql);

            if($count == 1) {
            
            $_SESSION['user_id'] = $id;
            $_SESSION['permision'] = $permision;
            $_SESSION['token'] = $token;

            echo json_encode(array(
                'status' => 0,
                'message' => 'http://localhost/CoolNLite/admin/dashboard.php'
            ));
            exit();

            }

        }else{
            echo json_encode(array(
                'status' => 1,
                'message' => 'Mật khẩu hoặc tài khoản không đúng hoặc bị vô hiệu hóa'
            ));
            exit();
        }
       

        
    }
}
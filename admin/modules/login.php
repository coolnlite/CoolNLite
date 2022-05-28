<?php
ob_start(); 
session_start();
require_once('../../config/config.php');
require_once('../../config/dbhelper.php');
require_once('./permision.php');

if(isset($_POST['btn-login'])){
    if(isset($_POST['username']) && isset($_POST['password'])){
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
            
            if($count == 1) {
            
            $_SESSION['user_id'] = $id;
            $_SESSION['permision'] = $permision;

            echo json_encode(array(
                'status' => 1,
                'message' => $DOMAIN.'dashboard.php'
            ));
            exit();

            }

        }else{
            echo json_encode(array(
                'status' => 0,
                'message' => 'Mật khẩu hoặc tài khoản không đúng'
            ));
            exit();
        }
       

        
    }
}
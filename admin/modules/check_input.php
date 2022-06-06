<?php
    require_once('../../config/config.php');
    require_once('../../config/dbhelper.php');

   if(isset($_GET['email']) && !empty($_GET['email'])){

    $email = mysqli_real_escape_string($conn, $_GET['email']);

    $sql = "SELECT * FROM `users` WHERE `email` LIKE '$email'";
    $result = mysqli_query($conn,$sql);
    
    if($result !== false && $result -> num_rows > 0){//Tồn tại email
        echo json_encode(false);
    }else{//Không tồn tại email
        echo json_encode(true);
    }

   }

   if(isset($_GET['user_name']) && !empty($_GET['user_name'])){

    $user_name = mysqli_real_escape_string($conn, $_GET['user_name']);

    $sql = "SELECT * FROM `users` WHERE `user_name` LIKE '$user_name'";
    $result = mysqli_query($conn,$sql);
    
    if($result !== false && $result -> num_rows > 0){//Tồn tại email
        echo json_encode(false);
    }else{//Không tồn tại email
        echo json_encode(true);
    }

   }
?>
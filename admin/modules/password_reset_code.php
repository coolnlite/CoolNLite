<?php
    require_once('../../config/config.php');
    require_once('../../config/dbhelper.php');
    require_once('./function.php');

    if(isset($_POST['reset_password']) && !empty($_POST['email'])){

        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $token = getToken(30);

        $sql = "SELECT `email` FROM `users` WHERE ";
    }
?>
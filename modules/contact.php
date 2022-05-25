<?php
require_once('../config/config.php');
require_once('../config/dbhelper.php');
date_default_timezone_set('Asia/Ho_Chi_Minh');

if (isset($_POST['btn_contact'])) {
    if(isset($_POST['fullname']) && isset($_POST['tel'])){
        //Lấy thông tin
        $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
        $tel = mysqli_real_escape_string($conn, $_POST['tel']);
        $messenger = mysqli_real_escape_string($conn, $_POST['messenger']);
        $models = mysqli_real_escape_string($conn, $_POST['models']);
        $area = mysqli_real_escape_string($conn, $_POST['area']);
        
        $sql = "INSERT INTO `contact` ( `full_name` , `tel`, `models` , `area`, `message`) 
        VALUES (' $fullname', '$tel' ,'$models','$area' ,'$messenger')";

        $result = mysqli_query($conn,$sql);

        if($result){
            echo json_encode(array(
                'status' => 1,
                'message' => 'Succes'
            ));
            exit();
        }else{
            echo json_encode(array(
                'status' => 0,
                'message' => 'Error'
            ));
            exit();
        }

    }
}
mysqli_close($conn);
?>
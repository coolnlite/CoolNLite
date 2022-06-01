<?php
 require_once('../../config/config.php');
 require_once('../../config/dbhelper.php');

if(isset($_POST['id_key']) && isset($_POST['name_key'])){
    $id_key = $_POST['id_key'];
    $name_key = mysqli_real_escape_string($conn, $_POST['name_key']);
    $time = date('Y-m-d H:i:s');

    $sql = "UPDATE `keyword` SET `name` = '$name_key', `time` = '$time' WHERE `id` = '$id_key'";
    $result = mysqli_query($conn,$sql);
    if($result == true){
        echo json_encode(array(
            'status' => 1,
            'message' => 'Cập nhật từ khóa thành công'
        ));
        exit();
    }else{
        echo json_encode(array(
            'status' => 0,
            'message' => 'Cập nhật từ khóa thất bại'
        ));
        exit();
    }
}

 ?>
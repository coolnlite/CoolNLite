<?php
 require_once('../../config/config.php');
 require_once('../../config/dbhelper.php');

//delete contact
    if(isset($_POST['delete_customer']) && isset($_POST['id_contact'])){
        $id_contact = $_POST['id_contact'];
        $sql = "DELETE FROM `contact` WHERE `id_contact`='$id_contact'";
        $result =mysqli_query($conn,$sql);
        if($result == true)
        {
            $data = array(
                'status'=>'success',
            
            );

            echo json_encode($data);
        }
        else
        {
            $data = array(
                'status'=>'failed',
            
            );

            echo json_encode($data);
        } 

    }
//delete news
if(isset($_POST['delete_news']) && isset($_POST['id_news'])){
    $id_news = $_POST['id_news'];
    $sql = "DELETE FROM `news` WHERE `id`='$id_news'";
    $result =mysqli_query($conn,$sql);
    if($result == true)
    {
        $data = array(
            'status'=>'success',
        
        );

        echo json_encode($data);
    }
    else
    {
        $data = array(
            'status'=>'failed',
        
        );

        echo json_encode($data);
    } 

}

//delete keyword
if(isset($_POST['delete_key']) && isset($_POST['id_key'])){
    $id_key = $_POST['id_key'];
    $sql = "DELETE FROM `keyword` WHERE `id`='$id_key'";
    $result =mysqli_query($conn,$sql);
    if($result == true)
    {
        $data = array(
            'status'=>'success',
        );

        echo json_encode($data);
    }
    else
    {
        $data = array(
            'status'=>'failed',
        );

        echo json_encode($data);
    } 

}

//delete agency
if(isset($_POST['delete_agency']) && isset($_POST['id_agency'])){
    $id_agency = $_POST['id_agency'];
    $sql = "SELECT `img` FROM `agency` WHERE `id` = '$id_agency'";
    $agency = executeResult($sql);
    foreach($agency as $ag){
        $img = $ag['img'];
        $link = '../..';
        $file = $link.$img;
        unlink($file);
    }

    $sql = "DELETE FROM `agency` WHERE `id`='$id_agency'";
    $result =mysqli_query($conn,$sql);
    if($result == true)
    {
        $data = array(
            'status'=>'success',
        );

        echo json_encode($data);
    }
    else
    {
        $data = array(
            'status'=>'failed',
        );

        echo json_encode($data);
    } 

}

?>
<?php
 require_once('../../config/config.php');
 require_once('../../config/dbhelper.php');

//delete contact
    if(isset($_POST['delete_customer']) && isset($_POST['id_contact'])){
        $id_contact = $_POST['id_contact'];
        $sql = "DELETE FROM `contact` WHERE `id_contact`='$contact_id'";
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
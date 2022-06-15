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

    $sql = "SELECT `id_news` FROM `news_keyword` WHERE `id_news` = '$id_news'";
    $result = mysqli_query($conn,$sql);
    if($result){
        $row = mysqli_fetch_assoc($result);
        while ($row) {
            $news = $row['id_news'];
            $sql = "DELETE FROM `news_keyword` WHERE `id_news`= '$news'";
            mysqli_query($conn,$sql);
        }
    }
   
    
    $sql = "SELECT `thumnail` FROM `news` WHERE `id` = '$id_news'";
    $news = executeResult($sql);
    foreach($news as $ns){
        $img = $ns['thumnail'];
        $link = $base_url;
        $file = $link.$img;
        unlink($file);
    }
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

    $sql = "SELECT `id_tag` FROM `news_keyword` WHERE `id_tag` = '$id_key'";
    $result = mysqli_query($conn,$sql);
    if($result){
        $row = mysqli_fetch_assoc($result);
        while ($row) {
            $news = $row['id_news'];
            $sql = "DELETE FROM `news_keyword` WHERE `id_tag`= '$id_key'";
            mysqli_query($conn,$sql);
        }
    }

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
        $link = $base_url;
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

//delete users
if(isset($_POST['delete_users']) && !empty($_POST['id_users'])){
    $id_users = $_POST['id_users'];
    $sql = "SELECT `image` FROM `users` WHERE `id` = '$id_users'";
    $users = executeResult($sql);
    foreach( $users as $us){
        $image = $us['image'];
        $link = $base_url;
        $file = $link.$image;
        unlink($file);
    }

    $sql = "DELETE FROM `users` WHERE `id`= '$id_users'";
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

//delete menu
if(isset($_POST['delete_menu']) && !empty($_POST['id_menu'])){
    $id_menu = $_POST['id_menu'];
    
    $sql = "DELETE FROM `menu` WHERE `id`= '$id_menu'";
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

//delete menu
if(isset($_POST['delete_sidebar']) && !empty($_POST['id_sidebar'])){
    $id_menu = $_POST['id_sidebar'];
    
    $sql = "DELETE FROM `sidebar` WHERE `id`= '$id_sidebar'";
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
<?php
    require_once('../../config/config.php');
    require_once('../../config/dbhelper.php');
    require_once('./permision.php');
    
    if(isset($_POST['add_news'])){
       if(
           isset($_POST['url']) && isset($_POST['title']) 
            && isset($_POST['thumnail']) && isset($_POST['description'])
            && isset($_POST['content']) && isset($_POST['radio'] )
       )
       {
        $url = mysqli_real_escape_string($conn, $_POST['url']);
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $description = mysqli_real_escape_string($conn, $_POST['description']);
        $content = mysqli_real_escape_string($conn, $_POST['content']);
        $radio = mysqli_real_escape_string($conn, $_POST['radio']);
       }
    }
?>
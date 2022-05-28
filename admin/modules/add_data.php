<?php
    require_once('../../config/config.php');
    require_once('../../config/dbhelper.php');
    require_once('./permision.php');
    
    if(isset($_POST['add_news'])){
       if(
           isset($_POST['url']) && isset($_POST['title']) 
            && isset($_POST['thumnail']) && isset($_POST['description'])
            && isset($_POST['content']) && isset($_POST['radio'] )
       ){

       }
    }
?>
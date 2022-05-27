<?php
   ob_start(); 
   session_start();
   
   if(session_destroy()) {
      header("Location: http://localhost/CoolNLite/admin/");
   }
?>

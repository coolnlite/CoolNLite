<?php
   ob_start(); 
   session_start();
   
   if(session_destroy()) {
      header("Location: https://coolnlite.000webhostapp.com/admin/");
   }
?>

<?php
if (isset($_SESSION['user_id']) == false) {
	
	header('Location: https://coolnlite.000webhostapp.com/admin/');
}else {
	$user_id = ($_SESSION['user_id']);
	$DOMAIN = "https://coolnlite.000webhostapp.com/admin/";
	
	if (isset($_SESSION['permision']) == true) {
		
		$permission = $_SESSION['permision'];

	}
}
?>
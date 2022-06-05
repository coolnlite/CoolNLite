<?php
if (isset($_SESSION['user_id']) == false) {
	
	header('Location: http://localhost/CoolNLite/admin');
}else {
	$user_id = ($_SESSION['user_id']);
	$token = ($_SESSION['token']);
	$DOMAIN = "http://localhost/CoolNLite/admin/";
	
	if (isset($_SESSION['permision']) == true) {
		
		$permission = $_SESSION['permision'];

	}
}
?>
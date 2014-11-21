<?php // destroy session and start over
session_start();
session_destroy();
	header('Location: Login.php');
?>
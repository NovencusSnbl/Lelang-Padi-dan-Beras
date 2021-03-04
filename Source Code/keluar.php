<?php
	include_once('autoload.php');
	if (isset($_SESSION['is_logged_in'])) {
		unset($_SESSION['is_logged_in']);
		unset($_SESSION['logged_username']);
		header('Location: index.php');
	}
?>
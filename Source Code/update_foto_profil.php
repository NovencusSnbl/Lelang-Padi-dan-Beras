<?php
	$s_username = $_SESSION['logged_username'];
	$database = mysqli_connect('127.0.0.1', 'root', '', 'lelang_padi_beras_pa1');
	$query = "UPDATE user SET foto_profil=? WHERE username=?";
	$statement = $database->prepare($query);
	$statement->bind_param('ss', $foto_profil, $s_username);
	$statement->execute();
?>
<?php
	$s_username = $_SESSION['logged_username'];
	$database = mysqli_connect('127.0.0.1', 'root', '', 'lelang_padi_beras_pa1');
	$query = 'SELECT * FROM user WHERE username=?';
	$statement = $database->prepare($query);
	$statement->bind_param('s', $s_username);
	$statement->execute();
	$statement->bind_result($id, $nama_lengkap, $username, $password, $jenis_kelamin, $alamat, $role,  $foto_profil);
	$statement->fetch();
?>
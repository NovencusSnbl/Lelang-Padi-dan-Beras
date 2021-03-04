<?php
	$database = mysqli_connect('127.0.0.1', 'root', '', 'lelang_padi_beras_pa1');
	$query = 'SELECT padi_beras.id_padi_beras FROM padi_beras WHERE nama_padi_beras=?';
	$statement = $database->prepare($query);
	$statement->bind_param('s', $nama_padi);
	$statement->execute();
	$statement->bind_result($id_padi);
	$statement->fetch();
?>
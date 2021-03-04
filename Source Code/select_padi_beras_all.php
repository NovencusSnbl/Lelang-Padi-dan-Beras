<?php
	$database = mysqli_connect('127.0.0.1', 'root', '', 'lelang_padi_beras_pa1');
	$query = "SELECT * FROM padi_beras WHERE id_padi_beras=?";
	$statement = $database->prepare($query);
	$statement->bind_param('i', $id_padi);
	$statement->execute();
	$statement->bind_result($id_padi, $nama_padi, $harga, $jenis, $banyak, $foto_padi, $deskripsi);
	$statement->fetch();
?> 	
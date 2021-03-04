<?php
	$id_padi = $_GET['id_padi_beras'];
	$id_user = $_GET['id_user'];
	include_once('select_transaksi.php');
	include_once('select_padi_all.php');
	$harga_baru = $harga_transaksi + ($harga_transaksi*10/100);
	$jumlah_tawar_baru = $jumlah_tawar + 1;
	$database = mysqli_connect('127.0.0.1', 'root', '', 'lelang_padi_beras_pa1');
	$query = "UPDATE lelang SET penawar=?, harga=?, jumlah_tawar=? WHERE id_transaksi=?";
	$statement = $database->prepare($query);
	$statement->bind_param('idii', $id_user, $harga_baru, $jumlah_tawar_baru, $id_transaksi);
	$statement->execute();
	header("Location: view_padi.php?id_padi_beras=$id_padi");
?>
<?php
	$database = mysqli_connect('127.0.0.1', 'root', '', 'lelang_padi_beras_pa1');
	$query = "SELECT * FROM lelang WHERE padi=?";
	$statement = $database->prepare($query);
	$statement->bind_param('i', $id_padi);
	$statement->execute();
	$statement->bind_result($id_transaksi, $harga_transaksi, $pelelang, $tanggal_mulai, $penawar, $tanggal_berakhir, $padi, $jumlah_tawar,$time_out, $status);
	$statement->fetch();
?>
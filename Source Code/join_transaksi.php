<?php
	$database = mysqli_connect('127.0.0.1', 'root', '', 'lelang_padi_beras_pa1');
	$query = "SELECT padi_beras.id_padi_beras, padi_beras.nama_padi_beras, lelang.tanggal_mulai FROM padi_beras INNER JOIN lelang ON (padi_beras.id_padi_beras = lelang.padi) WHERE lelang.pelelang = $id";
	$transaksi = mysqli_query($database, $query);
?>
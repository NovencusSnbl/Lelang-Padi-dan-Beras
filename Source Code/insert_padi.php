<?php
	$database = mysqli_connect('127.0.0.1', 'root', '', 'lelang_padi_beras_pa1');
	$nama_padi = $_POST['nama_padi'];
	$harga = $_POST['harga'];
	$jenis_padi = $_POST['jenis_padi'];
	$banyak = $_POST['banyak'];
	$deskripsi = $_POST['deskripsi'];
	$query = "INSERT INTO padi_beras(nama_padi_beras, harga, jenis, stok, foto_padi_beras, deskripsi) VALUES('$nama_padi' , '$harga', '$jenis_padi', '$banyak', '$foto_padi', '$deskripsi')";
	mysqli_query($database, $query);
?>
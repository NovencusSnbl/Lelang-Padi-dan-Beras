<?php
	$database = mysqli_connect('127.0.0.1', 'root', '', 'lelang_padi_beras_pa1');
	$tanggal_mulai = date('Y-m-d');
	$masa_lelang = $_POST['masa_lelang'];
	$tanggal_berakhir = date('Y-m-d', strtotime("+$masa_lelang days", strtotime($tanggal_mulai)));
	$query = "INSERT INTO lelang(harga, pelelang, tanggal_mulai, tanggal_berakhir, padi) VALUES('$harga', '$id', '$tanggal_mulai', '$tanggal_berakhir', '$id_padi')";
	mysqli_query($database, $query);
	$_SESSION['alert'] = 'Padi Anda Telah Masuk Daftar Lelang';
	header('Location: profil.php');
?>
<?php
	$database = mysqli_connect('127.0.0.1', 'root', '', 'lelang_padi_beras_pa1');
	$query = 'SELECT * FROM jenis_padi';
	$jenis_padi = mysqli_query($database, $query);
?>
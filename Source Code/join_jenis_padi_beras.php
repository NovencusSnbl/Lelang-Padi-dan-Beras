<?php
	$database = mysqli_connect('127.0.0.1', 'root', '', 'lelang_padi_beras_pa1');
	$query = "SELECT a.jenis FROM jenis_padi a JOIN padi_beras b ON (a.id_jenis = b.jenis) WHERE b.id_padi_beras = $id_padi";
	$result = mysqli_query($database, $query);
?>
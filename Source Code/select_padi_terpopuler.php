<?php
	$database = mysqli_connect('127.0.0.1', 'root', '', 'lelang_padi_beras_pa1');
	$query = "SELECT a.id_padi_beras ,a.nama_padi_beras,a.foto_padi_beras, b.jumlah_tawar FROM padi_beras a INNER JOIN lelang b ON (a.id_padi_beras = b.padi) WHERE b.status=0 ORDER BY b.jumlah_tawar DESC LIMIT 5";
	$result = mysqli_query($database, $query);
?>
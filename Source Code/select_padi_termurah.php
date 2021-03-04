<?php
	$database = mysqli_connect('127.0.0.1', 'root', '', 'lelang_padi_beras_pa1');
	$query = "SELECT a.id_padi_beras ,a.nama_padi_beras, a.foto_padi_beras, b.harga FROM padi_beras a INNER JOIN lelang b ON (a.id_padi_beras = b.padi) WHERE b.status=0 ORDER BY b.harga ASC LIMIT 10";
	$result = mysqli_query($database, $query);
?>
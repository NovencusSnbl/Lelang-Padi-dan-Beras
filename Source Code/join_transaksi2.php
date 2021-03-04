<?php
	$database = mysqli_connect('127.0.0.1', 'root', '', 'lelang_padi_beras_pa1');
	$query = "SELECT user.id, user.username FROM user INNER JOIN lelang ON (user.id = lelang.penawar) WHERE user.id = $penawar && lelang.id_transaksi = $id_transaksi";
	$user = mysqli_query($database, $query);
?>
<?php
		$database = mysqli_connect('127.0.0.1', 'root', '', 'lelang_padi_beras_pa1');
		$query = "UPDATE transaksi_padi SET time_out = 1 WHERE padi = $id_padi";
		mysqli_query($database, $query);
?>
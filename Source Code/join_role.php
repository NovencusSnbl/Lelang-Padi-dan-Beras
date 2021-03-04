<?php
	$database = mysqli_connect('127.0.0.1', 'root', '', 'lelang_padi_beras_pa1');
	$query = 'SELECT role.role FROM role INNER JOIN user ON user.role = role.id_role';
	$result = mysqli_query($database, $query);
	$row = mysqli_fetch_array($result);
?>
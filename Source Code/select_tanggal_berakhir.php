<?php
	$id_padi = $_SESSION['id_padi_beras'];
	unset($_SESSION['id_padi_beras']);
	$database = mysqli_connect("127.0.0.1", "root", "", "lelang_padi_beras_pa1");
	$query = "SELECT tanggal_berakhir FROM lelang WHERE padi=$id_padi";
	$result = mysqli_query($database, $query);

	while ($row = mysqli_fetch_array($result)) {
		$tanggal_berakhir = $row['tanggal_berakhir'];
	}
	$time = date('M d, Y', strtotime($tanggal_berakhir));
?>
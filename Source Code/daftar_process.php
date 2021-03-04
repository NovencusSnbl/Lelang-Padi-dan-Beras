<?php
	session_start();
	if (isset($_SESSION['is_logged_in'])) {
		header('Location: index.php');
	}
	$nama_lengkap = $_POST['nama'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$alamat = $_POST['alamat'];		
	$jenis_kelamin = $_POST['jenis_kelamin'];	
	$database = mysqli_connect('127.0.0.1', 'root', '', 'lelang_padi_beras_pa1');
	$query = "INSERT INTO user(nama, username, password, jenis_kelamin, alamat) VALUES ('$nama_lengkap', '$username', '$password', '$jenis_kelamin', '$alamat')";
	mysqli_query($database, $query);
	header('Location: index.php');	

	$result =mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
	
?>
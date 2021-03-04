<?php
	include_once('autoload.php');
	if (isset($_SESSION['is_logged_in'])) {
		header('Location: index.php');
	}
	$username = $_POST['username'];
	$password = $_POST['password'];
	$database = mysqli_connect('127.0.0.1', 'root', '', 'lelang_padi_beras_pa1');
	$query = 'SELECT * FROM user WHERE username=? AND password=?';
	$statement = $database->prepare($query);
	$statement->bind_param('ss', $username, $password);
	$statement->execute();

	$result_set = $statement->get_result();
	if ($result_set->num_rows) {
		$_SESSION['is_logged_in'] = true;
		$_SESSION['logged_username'] = $username;
		header('Location: index.php');
	}
	else {
		header('Location: masuk.php');
		$_SESSION['error'] = 'Username atau Password yang Anda Masukkan Salah!';
	}
?>
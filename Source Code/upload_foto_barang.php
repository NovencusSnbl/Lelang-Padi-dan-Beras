<?php
	$target_dir = "Images/padi/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

	if (isset($_POST['submit'])) {
		$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		if ($check !== false) {
			$uploadOk = 1;
		}
		else {
			$uploadOk = 0;
			header('Location: lelang.php');
		}
	}

	if ($_FILES["fileToUpload"]["size"] > 2000000) {
		$uploadOk = 0;
		$_SESSION['error'] = "File Ini Terlalu Besar";
		header('Location: lelang.php');
	}

	if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
		$uploadOk = 0;
		$_SESSION['error'] = "Hanya JPG, PNG, JPEG, dan GIF yang diperbolehkan";
		header('Location: lelang.php');
	}

	if ($uploadOk != 0) {
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			$foto_padi = basename( $_FILES["fileToUpload"]["name"]);
		}
		else {
			$_SESSION['error'] = "Maaf, Ada Kesalahan Pada Proses File";
			header('Location: lelang.php');
		}
	}
?>
<?php include_once('autoload.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Akun</title>
</head>
<body>
	<div class="container-fluid">
		<section id="form-masuk">
			<div class="container text-center">
				<div class="row">
					<div class="col-sm-12">
						<img class="responsive" src="Images/user/user.png">
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<h3>Daftarkan Diri Anda</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<form action="daftar_process.php" method="post">
							<div class="row">
								<div class="col-sm-12">
									<input class="text-center" type="text" name="nama" id="input" placeholder="Nama Lengkap" required="true">
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-sm-12">
									<input class="text-center" type="text" name="username" id="input" placeholder="Username" required="true">
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-sm-12">
									<input class="text-center" type="password" name="password" id="input" placeholder="Password" required="true">
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-sm-12">
									<input class="text-center" type="text" name="alamat" id="input" placeholder="Alamat" required="true">
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-sm-12">
									<select name="jenis_kelamin" id="input" class="text-center">
										<option>Jenis Kelamin</option>
										<option value="Laki-laki">Laki-laki</option>
										<option value="Perempuan">Perempuan</option>
									</select>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-sm-12">
									<input class="btn btn-success" type="submit" name="submit" id="submit" value="Daftar">
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<p>Sudah punya akun? <a href="masuk.php">Masuk</a></p>
					</div>
				</div>
			</div>
		</section>
	</div>
</body>
</html>
<?php
	include_once('autoload.php');
	include_once('select_user.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Lelang Padi</title>
</head>

<body>
	<div class="container-fluid">
		<section id="form-masuk">
			<div class="container text-center">
				<div class="row">
					<div class="col-sm-12">
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<form action="lelang_padi_beras_process.php" method="post" enctype="multipart/form-data" style="outline-color: orange">
							<div class="row">
								<div class="col-sm-12">
									<input class="text-center" type="text" name="nama_padi" id="input" placeholder="Nama Padi/Beras" required="true">
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-sm-12">
									<input class="text-center" type="number" name="harga" id="input" placeholder="Harga Padi/Beras" required="true">
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-sm-12">
									<select name="jenis_padi" id="input" class="text-center" required="true">
										<option>--Pilih Jenis--</option>
										<?php
											include_once('select_jenis_padi_beras.php');
											while ($row = mysqli_fetch_assoc($jenis_padi)) {
												echo "<option value='" . $row['id_jenis'] . "'>" . $row['jenis'] . "</option>";
											}
										?>
									</select>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-sm-12">
									<input class="text-center" type="number" name="banyak" id="input" placeholder="Banyak Padi/Beras (Karung)" required="true">
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-sm-12">
									<select class="text-center" name="masa_lelang" id="input" required="true">
										<option selected="true">Jangka Waktu</option>
										<option value="3">3 Hari</option>
										<option value="4">4 Hari</option>
										<option value="5">5 Hari</option>
									</select>
								</div>
							</div>
							<br>
							<div class="row">

								<div class="col-sm-12">
									<center>
									<input class="text-center" type="file" name="fileToUpload" id="input" required="true">
									</center>
								</div>
							</div>
							<p class="text-center small" style="color: mediumseagreen">Sangat Disarankan Untuk Tidak Lebih Dari 4 MB</p>
							<div class="row">
								<div class="col-sm-12">
									<textarea class="text-center" name="deskripsi" id="input" placeholder="Deskripsi" required="true"></textarea>
								</div>
							</div>
							<br>
							<?php
								if (isset($_SESSION['error'])) {
							?>
							<div class="row">
								<div class="offset-sm-4 col-sm-4 offset-sm-4">
									<div class="card text-white bg-danger mb-3">
										<div class="card-body">
											<p class="card-text small">
												<?php
													echo $_SESSION['error'];
													unset($_SESSION['error']);
												?>
											</p>
										</div>
									</div>
								</div>
							</div>
							<br>
							<?php } ?>
							<div class="row">
								<div class="col-sm-12">
									<input class="btn btn-success" type="submit" name="submit" id="submit" value="Lelang">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
	</div>
</body>
</html>
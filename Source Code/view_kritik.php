<?php include_once('autoload.php'); 
require 'kritik_process.php';
if(isset($_POST["kritik"])) {

 //cek apakah data berhasil dikirm atau tidak
 if(kritik($_POST)>0) {
 	echo "
 	<script>
 	alert('Kritik dan saran anda sudah kami terima, Terimakasih !');
 	document.location.href = 'index.php'
 	</script>
 	";
 }
 else{
 	echo "
 	<script>
 	alert('Data Gagal ditambahkan');
 	document.location.href = 'view_kritik.php'
 	</script>
 	";
 }
 }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Utama</title>
</head>
<body>
	<div class="container-fluid">
		<section id="form-masuk">
			<div class="container text-center">	

				<div class="row">
					<div class="col-sm-12">
						<h3>Masukan kritik dan Saran</h3>
					</div>
				</div>
				<fieldset>
				<div class="row">
					<div class="col-sm-12">
						<form action="" method="post">
							<div class="row">
								<div class="col-sm-12">
									<input class="text-center" type="text" name="nama" id="input" placeholder="Nama lengkap" required="true">
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-sm-12">
									<input class="text-center" type="text" name="email" id="input" placeholder="email" required="true">
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-sm-12">
									<textarea class="text-center" type="text" name="deskripsi" id="input" placeholder="Kritik dan saran" required="true" style="height: 200px;"></textarea>	
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
							<?php } ?>
							<div class="row">
								<div class="col-sm-12">
									<input class="btn btn-success" type="submit" name="kritik" id="submit" value="Kirim">
								</div>
							</div>
						</form>
					</div>
				</div>
			    </fieldset>
			</div>
		</section>
	</div>
</body>
</html>
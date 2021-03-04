<?php include_once('autoload.php'); ?>
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
						<img class="responsive" src="Images/user/user.png">
					</div>
				</div>

				<div class="row">
					<div class="col-sm-12">
						<h3>Masuk ke Akun Anda</h3>
					</div>
				</div>
				<fieldset>
				<div class="row">
					<div class="col-sm-12">
						<form action="masuk_process.php" method="post">
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
									<input class="btn btn-success" type="submit" name="submit" id="submit" value="Masuk">
								</div>
							</div>
						</form>
					</div>
				</div>
			    </fieldset>
				<div class="row">
					<div class="col-sm-12">
						<p>Anda belum punya akun? <a href="daftar.php">Daftarkan sekarang juga!</a></p>
					</div>
				</div>
			</div>
		</section>
	</div>
</body>
</html>
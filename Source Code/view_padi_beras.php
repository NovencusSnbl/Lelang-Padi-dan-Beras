<?php
	$id_padi = $_GET['id_padi_beras'];
	include_once('autoload.php');
	include_once('select_padi_beras_all.php');
	if (!isset($_SESSION['is_logged_in'], $_SESSION['logged_username'])) {
		$_SESSION['error'] = 'Anda Harus Login Terlebih Dahulu Untuk Melanjutkan';
		header('Location: masuk.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $nama_padi?></title>
</head>
<br>
<br><br><br>
<body style="color: white">
	<div class="container">
		<div class="row text-center">
			<div class="col-lg-6">
				<div class="row">
					<div class="col-sm-12">
						<img id="foto_padi" class="img-fluid img-thumbnail" src="Images/padi/<?php echo $foto_padi; ?>" alt="Foto Padi">
					</div>
				</div>
				<br>
				<?php
					if (isset($_SESSION['alert'])) {
				?>
				<div class="row">
					<div class="offset-sm-2 col-sm-8 offset-sm-2">
						<div class="card text-white bg-info mb-3">
							<div class="card-body">
								<p class="card-text small">
									<?php
										echo $_SESSION['alert'];
										unset($_SESSION['alert']);
									?>
								</p>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>				
			</div>
			<div class="col-lg-6" >
				<div class="row">
					<div class="col-sm-12" >
						<div class="offset-sm-2 col-sm-8 offset-sm-2"		>
							<div class="card text-white bg-success mb-3" >
								<h6 class="card-header" style="background-color: orange;font-size: 20px;">
									<?php
										echo $nama_padi;
										include_once('join_jenis_padi_beras.php');
									?>
								</h6>
								<h6 class="card-body small text-justify" style="background-color: orange">
								<p style="text-align: center;font-size: 16px;">
									<?php echo $deskripsi; ?>
								</p>
								<hr>
								<p style="font-size: 14px;">
								<?php while ($row = mysqli_fetch_array($result)){ ?>
								<?php
									echo "Jenis  : " . $row['jenis'] . ", ";
									echo "Banyak : " . $banyak . " Kaleng";
								?>
								</p>
								<?php
									}
									include_once('select_transaksi.php');
									include_once('select_user.php');
									include_once('join_transaksi2.php');
								?>
								<hr>
								<div class="card text-white bg-info mb-3" >
									<h6 class="card-header text-center">
										<?php echo "Harga Tawaran Terakhir : Rp $harga_transaksi,00"; ?>
									</h6>
									<h6 class="card-body text-center" style="font-size: 15px;">
										<?php
											if ($status == 0) {
												if ($id == $pelelang && $penawar != NULL) {
													while ($row = mysqli_fetch_array($user)) {
														echo "<span class='small'>Penawar Terakhir : " . $row['username'] . "</span>";
														echo "<a href='tawar.php'><button class='btn btn-primary btn-sm' disabled='true'>Ini Adalah Barang Anda</button></a>";
													}
												}
												else if ($id == $pelelang && $penawar == NULL) {
													echo "<a href='tawar.php'><button class='btn btn-primary btn-sm' disabled='true'>Ini Adalah Barang Anda</button></a>";
												}
												else if ($id != $pelelang && $penawar == NULL) {
													echo "<a href='tawar.php?id_padi_beras=$id_padi&&id_user=$id'><button class='btn btn-primary'>Tawar</button></a>";
												}
												else if ($id != $pelelang && $id != $penawar) {
													while ($row = mysqli_fetch_array($user)) {
														echo "<span class='small'>Penawar Terakhir : " . $row['username'] . " </span>";
														echo "<a href='tawar.php?id_padi_beras=$id_padi&&id_user=$id'><button class='btn btn-primary'>Tawar</button></a>";
													}
												}
												else if ($id == $penawar) {
													echo "<span class='small'>Anda Adalah Penawar Terakhir </span>";
													echo "<a href='tawar.php'><button class='btn btn-primary' disabled>Tawar</button> </a>";
												}
											}
											else if ($status == 1) {
												echo "<a href='tawar.php'><button class='btn btn-primary btn-sm' disabled='true'>Barang Ini Sudah Terjual</button></a>";
											}
											echo '<br>';
											echo "<span class='small'>Padi Ini Telah Ditawar Sebanyak : " . $jumlah_tawar . " Kali</span>";
										?>
									</h6>
								</div>
								<div class="card text-white bg-danger mb-3">
									<h6 class="card-header text-center">Waktu Yang Tersisa</h6>
									<h6 class="card-body text-center">
										<?php
											$_SESSION['id_padi_beras'] = $id_padi;
											include_once("time_view.php");
											$now = date('Y-m-d');
											if ($now == $tanggal_berakhir) {
												include_once('update_time_out.php');
											}
										?>
									</h6>
								</div>
								<?php if ($id == $pelelang) { ?>
									<p class="small text-right">Masalah Pada Gambar? <a href="upload_ulang_foto_barang.php?id_padi_beras=<?php echo $id_padi ?>">Upload Ulang</a></p>
								<?php } ?>
								</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
	<?php if ($status == 1) { ?>
		<hr>
		<section class="section text-white bg-success">
			<div class="row">
				<div class="col-lg-6 text-center">
					<?php
						$counter = 0;
						while ($counter < $rating) { 
					?>
					<img class="img-fluid" src="Images/star.png" height="40px" width="40px">
					<?php
						$counter++;
						}
					?>
				</div>
				<div class="col-lg-6 text-center">
					<p><i>"<?php echo $review?>"</i></p>
				</div>
			</div>
			
		</section>
	<?php } ?>
	<hr>
	<section class="section">
		<div class="row">
			<div class="col-sm-12">
				<div class="owl-carousel">
				  	<?php
				  		include_once('select_padi_flash.php');
				  		while ($row = mysqli_fetch_array($result)) { ?>
				  			<div class="card bg-success mb-4">
							  	<a href="view_padi.php?id_padi_beras=<?php echo $row['id_padi_beras']?>"><img class="card-img-top" src="Images/padi/<?php echo $row['foto_padi_beras']?>" height="250" width="250" alt="Card image cap"></a>
							  	<div class="card-body" style="background-color: orange">
							    	<p class="card-text text-center"><?php echo $row['nama_padi_beras'] . " <br> " . "Rp " . $row['harga'] . ",00"; ?></p>
							    	<p class="card-text text-center small"><?php echo "Berakhir Pada : " . $row['tanggal_berakhir']; ?></p>
							  	</div>
							</div>
				  	<?php } ?>
				</div>
			</div>
		</div>
	</section>
	<section class="section">
		<div class="row">
			<div class="col-sm-12">
				<div class="owl-carousel">
				  	<?php
				  		include_once('select_padi_termurah.php');
				  		while ($row = mysqli_fetch_array($result)) { ?>
				  			<div class="card bg-success mb-4">
							  	<a href="view_padi.php?id_padi_beras=<?php echo $row['id_padi_beras']?>"><img class="card-img-top" src="Images/padi/<?php echo $row['foto_padi_beras']?>" height="250" width="250" alt="Card image cap"></a>
							  	<div class="card-body" style="background-color: orange">
							    	<p class="card-text text-center small"><?php echo $row['nama_padi_beras'] ."<br>". " Masih Terjangkau! Hanya"; ?></p>
							    	<p class="card-text text-center"><?php echo "Rp " . $row['harga'] . ",00"; ?></p>
							  	</div>
							</div>
				  	<?php } ?>
				</div>
			</div>
		</div>
	</section>
</body>
</html>
<?php include_once('autoload.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Lelang Padi dan Beras</title>
</head>
<br>
<br>
<body>
	<section class="section" >
		<div class="row">
			<div class="col-sm-12">
				<div id="carousel" class="carousel slide mb-4" data-ride="carousel">
					<?php
						$counter = 0;
						include_once('select_padi_terpopuler.php');
					?>
					<div class="carousel-inner">
						<?php while ($row = mysqli_fetch_array($result)) { ?>
							<div class="carousel-item 	<?php if ($counter == 0) echo "active"?>">
								<a href="view_padi_beras.php?id_padi_beras=<?php echo $row['id_padi_beras']?>">
									<img class="img-fluid" src="Images/padi/<?php echo $row['foto_padi_beras']?>" alt="Barang" style="height: 500px;">
									<div class="carousel-caption">
										<h3><?php echo $row['nama_padi_beras']; ?></h3>
										<p>Padi Ini Telah Ditawar Sebanyak <?php echo $row['jumlah_tawar']; ?> Kali</p>
									</div>
								</a>
							</div>
						<?php
							$counter = 1;
							}
						?>
					</div>
					<a class="carousel-control-prev" href="#carousel" data-slide="prev">
						<span class="carousel-control-prev-icon"></span>
					</a>
					<a class="carousel-control-next" href="#carousel" data-slide="next">
						<span class="carousel-control-next-icon"></span>
					</a>
				</div>
			</div>
		</div>
	</section>
	<!--//////////////////////////////////////////////////////////////////
		//Membuat image yang kecil
		/////////////////////////////////////////-->
	<section class="section">
		<div class="row">
			<div class="col-sm-12">
				<div class="owl-carousel" >
				  	<?php
				  		include_once('select_padi_flash.php');
				  		while ($row = mysqli_fetch_array($result)) { ?>
				  			<div class="card bg-success mb-4">
							  	<a href="view_padi_beras.php?id_padi_beras=<?php echo $row['id_padi_beras']?>"><img class="card-img-top" src="Images/padi/<?php echo $row['foto_padi_beras']?>" height="250" width="250" alt="Card image cap"></a>
							  	<div class="card-body" style="background-color: orange;text-align: center;color: white">
							    	<p class="card-text text-center"><?php echo $row['nama_padi_beras'] . " <br> " ?></p>
							    	<p class="card-text text-center small" style="font-size: 14px;"><?php echo "Berakhir dalam : " . $row['tanggal_berakhir']; ?></p>
							  	</div>
							</div>
				  	<?php } ?>
				</div>
			</div>
		</div>
	</section>
		<!--//////////////////////////////////////////////////////////////////
		//Membuat image yang kecil
		/////////////////////////////////////////-->

	<section class="section">
		<div class="row">
			<div class="col-sm-12">
				<div class="owl-carousel">
				  	<?php
				  		include_once('select_padi_termurah.php');
				  		while ($row = mysqli_fetch_array($result)) { ?>
				  			<div class="card bg-success mb-4">
							  	<a href="view_padi_beras.php?id_padi_beras=<?php echo $row['id_padi_beras']?>"><img class="card-img-top" src="Images/padi/<?php echo $row['foto_padi_beras']?>" height="250" width="250" alt="Card image cap"></a>
							  	<div class="card-body" style="background-color: orange;text-align: center;color: white">
							    	<p class="card-text text-center small"><?php echo $row['nama_padi_beras'] ."<br>". " Harga Tawaran terakhir"; ?></p>
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

<?php 
include_once('autoload.php');
include_once('select_search.php');
$loker = query("SELECT * FROM padi_beras");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Lelang Padi</title>
</head>
<body >
<br>
<br>
<br><br>
	<form action="search.php" method="post" style="padding-left: 920px">
		<input type="text" name="nama" size="30" autofocus placeholder="Masukkan keyword pencarian" autocomplete="off" class="cari" style="height: 40px;border-radius: 4px;">
		<button type="submit" name="cari" class="btn cari1">Cari!</button>
	</form><br><br>
	<!--////////////////////////////////////////// ////////////////////////
		//Membuat image yang kecil
		/////////////////////////////////////////-->
	<section class="section" style="font-size: bold;color: white">
		<div class="row">
			<div class="col-sm-12">
				<div class="owl-carousel">
				  	<?php
				  		include_once('select_padi_termurah.php');
				  		while ($row = mysqli_fetch_array($result)) { ?>
				  			<div class="card bg-success mb-4">
							  	<a href="view_padi_beras.php?id_padi_beras=<?php echo $row['id_padi_beras']?>"><img class="card-img-top" src="Images/padi/<?php echo $row['foto_padi_beras']?>" height="250" width="250" alt="Card image cap"></a>
							  	<div class="card-body" style="background-color: orange">
							    	<p class="card-text text-center small"><?php echo $row['nama_padi_beras'] ."<br>"; ?></p>
							    	<p class="card-text text-center"><?php echo "Rp " . $row['harga'] . ",00"; ?></p>
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
</body>
</html>
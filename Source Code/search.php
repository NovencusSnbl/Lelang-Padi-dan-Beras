<?php
include"autoload.php";
$database = mysqli_connect('127.0.0.1', 'root', '', 'lelang_padi_beras_pa1');
$name= $_POST['nama']; //get the nama value from form
$q = "SELECT * from padi_beras where nama_padi_beras like '%$name%' "; //query to get the search result
$result = mysqli_query($database,$q);
echo "<h2> Hasil Searching </h2>";
while ($data = mysqli_fetch_array($result)) {?> 
<br><br><br>
	<!-- <form action="search.php" method="post" style="padding-left: 920px">
		<input type="text" name="nama" size="30" autofocus placeholder="Masukkan keyword pencarian" autocomplete="off" class="cari" style="height: 40px;border-radius: 4px;">
		<button type="submit" name="cari" class="btn cari1">Cari!</button>
	</form><br><br> -->
<section class="section" style="font-size: bold;color: white;display: inline;">
		<div class="row">
			<div class="col-sm-12">
				<div class="owl-carousel">
				  			<div class="card bg-success mb-4">
							  	<a href="view_padi.php?id_padi_beras=<?php echo $data['id_padi_beras']?>">
							  		<img class="card-img-top" src="Images/padi/<?php echo $data['foto_padi_beras']?>" height="250" width="250" alt="Card image cap">
							  	</a>
							  	<div class="card-body" style="background-color: orange">
							    	<p class="card-text text-center small"><?php echo $data['nama_padi_beras'] ."<br>"; ?></p>
							    	<p class="card-text text-center"><?php echo "Rp " . $data['harga'] . ",00"; ?></p>
							  	</div> 
							</div>
                            </div>
			</div>
		</div>
	</section>
<?php
}
// echo "</table>";
?>
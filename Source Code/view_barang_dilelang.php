	<?php
	include_once('autoload.php');
	include_once('select_padi_beras_all.php');
	include_once('join_transaksi.php');
?>
<table class="table">
	<th>Tanggal</th>
	<th>Nama Padi</th>
	<?php
		$counter = 1;
		while ($row = mysqli_fetch_array($transaksi)){
	?>
	<tr>
		<td><?php echo $counter . " (" . $row['tanggal_mulai'] . ")" ?></td>
		<td><a href="view_padi.php?id_padi_beras=<?php echo $row['id_padi_beras']?>"><?php echo $row['nama_padi_beras'] ?></a></td>
	</tr>
	<?php
		$counter++;
		}
	?>
</table>
<div class="row">
	<div class="col-sm-12">
		<a href="lelang.php"><button class="btn btn-success btn-sm">Tambah Lelangan</button></a>





		
	</div>
</div>
<!-- if ($pelelang === 4) {
		while ($row = mysqli_fetch_array($user)) {
			echo '
			<div class="row">
				<div class="col-sm-12">
					<a href="lelang.php"><button class="btn btn-success btn-sm">Tambah Lelangan</button></a>
				</div>
			</div>

			';
		}
	}
	// else if ($id == $pelelang && $penawar == NULL) {
	// echo '
	// 	<div class="row">
	// 			<div class="col-sm-12">
	// 				<a href="lelang.php"><button class="btn btn-success btn-sm">Tambah Lelangan</button></a>
	// 			</div>
	// 		</div>

	// ';
	// }
?>
?>
 -->
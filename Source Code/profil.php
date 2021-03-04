<?php
	include_once('autoload.php');
	include_once('select_user.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profil Akun</title>
</head>
<br>
<br>
<br>

<body>
	<div class="container">
		<div class="row text-center">
			<div class="col-lg-8">
				<div class="row">
					<div class="col-sm-12">
						<ul class="nav nav-tabs"> 
						  	<li class="nav-item">
						   		<a class="nav-link" data-toggle="tab" href="#barang_dilelang">Padi Dilelang</a>
						  	</li>
						</ul>

						<div class="tab-content">
						  	<div class="tab-pane container active" id="data_diri">
						  		<br>
						  		<?php
						  			include_once('view_barang_dilelang.php');
						  		?>
						  	</div>
						  
						  	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
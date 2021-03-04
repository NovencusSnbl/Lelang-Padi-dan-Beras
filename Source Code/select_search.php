<?php 
$conn=mysqli_connect("localhost","root","","lelang_padi_beras_pa1");

function query($query ){
	global $conn;  
	$result = mysqli_query($conn,$query);
	$rows=[];
	while 	($row = mysqli_fetch_assoc($result)) {
		$rows[]=$row;
	}
	return $rows;
}

function cari($keyword){
	$query="SELECT * FROM padi_beras
		nama_padi_beras LIKE '%$keyword%'
		";
	return query($query);
}
?>
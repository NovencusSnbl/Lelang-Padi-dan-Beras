<?php
$conn=mysqli_connect('127.0.0.1', 'root', '', 'lelang_padi_beras_pa1');

function kritik($data){
global $conn;

$nama = htmlspecialchars($data['nama']);
$email = htmlspecialchars($data['email']);
$deskripsi = htmlspecialchars(($data['deskripsi']));

$query = "INSERT INTO  saran VALUES ('','$nama','$deskripsi','$email')";
mysqli_query($conn,$query);

return mysqli_affected_rows($conn);
}

?>
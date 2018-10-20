<?php
require_once("db7.php");

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$tanggal = $_POST['tanggal'];
$jeniskelamin = $_POST['jeniskelamin'];
$prodi = $_POST['prodi'];
$fakultas = $_POST['fakultas'];
$asal = $_POST['asal'];
$moto = $_POST['moto'];

$sql = "UPDATE mahasiswabaru SET nama='$nama', nim='$nim', tanggal='$tanggal', jeniskelamin='$jeniskelamin', prodi='$prodi', fakultas='$fakultas', asal='$asal', moto='$moto' where nim = '$nim'";

if (mysqli_query($conn, $sql)) {
	# code...
	header("Location:data.php?nim=".$nim);
}else{
	echo "Error:".$sql."<br>".mysql_errpr($conn);
}
?>
<?php
session_start();
require_once("db7.php");
$nama = $_POST['nama'];
$_SESSION ['nama'] = $nama;


$nim = $_POST['nim'];
$_SESSION ['nim'] = $nim;

$tanggal = $_POST['tanggal'];
$_SESSION ['tanggal'] = $tanggal;

$jeniskelamin = $_POST['jeniskelamin'];
$_SESSION ['jeniskelamin'] = $jeniskelamin;

$prodi = $_POST['prodi'];
$_SESSION ['prodi'] = $prodi;


$fakultas = $_POST['fakultas'];
$_SESSION ['fakultas'] = $fakultas;


$asal = $_POST['asal'];
$_SESSION ['asal'] = $asal;


$moto = $_POST['moto'];
$_SESSION ['moto'] = $moto;

$sql = "INSERT INTO mahasiswabaru(nama, nim, tanggal, jeniskelamin, prodi, fakultas, asal, moto) values ('$nama', '$nim', '$tanggal', '$jeniskelamin', '$prodi','$fakultas', '$asal', '$moto')";

if (mysqli_query($conn, $sql)) {
	# code...
	header("Location:view.php");
}else {

	echo "Data Gagal Masuk: ".$sql."<br>".mysqli_error($conn);
}
mysqli_query($conn);
?>
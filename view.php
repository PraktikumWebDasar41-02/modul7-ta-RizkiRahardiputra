<?php
session_start();
require_once("db7.php");
?>
<table border="1">
	<head>
		<form action="search.php" method="POST">
			<input type="text" name="nim" placeholder="Cari Nim Mahasiswa">
			<input type="submit" name="search" value="Search"> &nbsp
			<a href="formmahasiswa.php"><b>Input</b></a><br>
			<th>NIM</th>
			<th>NAMA</th>
			<th>Program Studi</th>
			<th>AKSI</th>
		</head>
		<tbody>

<?php

$sql = "SELECT * FROM mahasiswabaru";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0){
	# code...
	while($baris = mysqli_fetch_assoc($result)) {
		# code...
	
	$nim = $baris['nim'];
	echo "<tr>";
	echo "<td>".$baris["nama"]."</td>";
	echo "<td>".$baris["nim"]."</td>";
	echo "<td>".$baris["prodi"]."</td>";
		echo "<td>"."<a href='delete.php?nim=$nim'>Delete</a>|";
		echo "<a href='detail.php?nim=$nim'>Edit</a>"."</td>";
	echo "</tr>";
	}
}else{
	echo "0 Hasil";
}
mysqli_close($conn);
?>		
		
	</tbody>
	
</table>
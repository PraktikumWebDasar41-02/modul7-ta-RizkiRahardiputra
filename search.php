<?php
$db = new mysqli("localhost","root","","mahasiswabaru");
$nim = $_POST ['nim'];
$sql = "SELECT * FROM mahasiswabaru where nim like '%$nim'";
$result = mysqli_query($db, $sql);
$baris = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Hasil Pencarian Data</title>
</head>
<body>
	<table border="1">
		<thead>
			<th>Nama</th>
			<th>NIM</th>
			<th>Prodi</th>
			<th>Aksi</th>
	</thead>
	<tbody>
		<?php
		if ($baris>0) {
			# code...
			while ($baris = mysqli_fetch_assoc($result)){
				$nim = $baris ['nim'];
				echo "<tr>";
				echo "<td>".$baris["nama"]."</td>";
				echo "<td>".$baris["nim"]."</td>";
				echo "<td>".$baris["prodi"]."</td>";
				echo "<td>"."<a href='delete.php?nim=$nim'>Delete</a>"."</td>";
				echo "</tr>";
			}
		}

		else{
			echo "0result";
		}

		?>

	</tbody>
</table><br>

<a href="formmahasiswa.php">INPUT LAGI</a>

</body>
</html>

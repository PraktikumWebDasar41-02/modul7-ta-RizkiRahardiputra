<?php
session_start();
require_once "db7.php";
$nim=$_GET['nim'];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<form>
			<tr>

				<?php
				echo "<td>"."<a href='hasilupdate.php?nim=$nim'>EDIT</a>";

				?>

				<td>
					<a href="formmahasiswa.php">INPUT DATA</a>
				</td>
			</tr>
			<?php
			$sql = "SELECT * FROM mahasiswabaru where nim = '$nim'";
			$result = mysqli_query($conn, $sql);
			$baris = mysqli_fetch_assoc($result);

			echo "<tr>";

			echo "<td>"."<br><br>"."INPUTAN DATA"."</td>";
			echo "</tr>";

			echo "<tr>";
			echo "<td colspan=4>"."Nama: ".$baris['nama']."<br><br>";

			echo "Nim : ".$baris['nim']."<br><br>";

			echo "Tanggal Lahir : ".$baris['tanggal']."<br><br>";

			echo "Jenis Kelamin : ".$baris['jeniskelamin']."<br><br>";

			echo "Program Studi : ".$baris['prodi']."<br><br>";

			echo "Fakultas : ".$baris['fakultas']."<br><br>";

			echo "Asal : ".$baris['asal']."<br><br>";

			echo "Moto Hidup : ".$baris['moto']."</td>";

			echo "</tr>";

			mysqli_close($conn);
			?>

		</form>
	</table>

</body>
</html>
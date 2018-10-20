<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
	<form action="koneksi.php" method="POST" enctype="multipart/form-data">
		FORM MAHASISWA<br><br>
		Nama: <input type="text" name="nama" placeholder="Masukkan Nama"><br><br>

		NIM: <input type="text" name="nim" placeholder="Masukkan NIM"><br><br>

		Tanggal Lahir: <input type="date" name="tanggal"><br><br>
		Jenis Kelamin: <select name="jeniskelamin">
			<option value="Laki-Laki" >Laki-Laki</option>
			<option value="Perempuan" >Perempuan</option>
		</select><br><br>

		Program Studi : <select name="prodi">
			<option value="MI">MI</option>
			<option value="SISFO">SISFO</option>
			<option value="IKOM">IKOM</option>
			<option value="TT">TT</option>
			<option value="DKV">DKV</option>
			<option value="ADBIS">ADBIS</option>
		</select><br><br>

		Fakultas : 
		<input type="radio" name="fakultas">FRI<br>
		<input type="radio" name="fakultas">FIF<br>

		<input type="radio" name="fakultas">FKB<br>
		<input type="radio" name="fakultas">FEB<br>

		<input type="radio" name="fakultas">FTE<br>
		<input type="radio" name="fakultas">FIK<br>

		<input type="radio" name="fakultas">FIT<br>

		Asal : <input type="text" name="asal" placeholder="Masukkan asal anda"><br><br>
		
		Moto Hidup : <input type="textarea" name="moto" placeholder="Masukkan moto hidup anda" width="10px" height="10px"><br><br>

		<input type="submit" name="submit" value="SEND">


	</form>
	</center>
</body>
</html>
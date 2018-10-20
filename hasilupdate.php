<?php
require_once("db7.php");

$nim=$_GET['nim']; 
$mahasiswabaru =mysqli_query($conn, "SELECT * from mahasiswabaru where nim='$nim'");
$baris=mysqli_fetch_array($mahasiswabaru);
$fakultas=array('FRI','FIF','FKB','FEB','FTE','FIK','FIT');

$query=mysqli_query($conn,"SELECT * FROM mahasiswabaru where nim='$nim'");
$baris=mysqli_fetch_array($query);

function active_radio_button($value,$input){
    $result = $value == $input?'checked':'';
    return $result;
}
?>
<html>
<head>
    <title></title>
</head>
<body>
    <input type="hidden" value="<?php echo $baris['nim'];?>" name="nim">
    <table>
    <form action="edit.php" method="POST">

        <tr>

            <td>Nama</td>
            <td>:</td>
            <td><input type="text" value="<?php echo $baris['nama']; ?>" name="nama"></td>

        </tr>

        <tr>

            <td>Nim</td>
            <td>:</td>
            <td><input type="text" value="<?php echo $baris['nim']; ?>" name="nim"></td>

        </tr>


        <tr>

            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type="date" value="<?php echo $baris['tanggal']; ?>" name="tanggal"></td>

        </tr>

        <tr>

            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>

                <select name="jeniskelamin">
                <option value="Laki-Laki" <?php if($baris['jeniskelamin']=="jeniskelamin"){ ?> selected="selected" <?php } ?>>Laki-Laki</option>
                 <option value="Perempuan" <?php if($baris['jeniskelamin']=="jeniskelamin"){ ?> selected="selected" <?php } ?>>Perempuan</option>
                 </select>


            </td>



            
        </tr>

        <tr>
            <td>Program Studi</td>
            <td>:</td>
            <td>
                <select name="prodi">
                <option value="MI" <?php if($baris['prodi']=="MI"){ ?> selected="selected" <?php } ?>>MI</option>
                <option value="SISFO" <?php if($baris['prodi']=="SISFO"){ ?> selected="selected" <?php } ?>>SISFO</option>
                <option value="IKOM" <?php if($baris['prodi']=="IKOM"){ ?> selected="selected" <?php } ?>>IKOM</option>
                <option value="TT" <?php if($baris['prodi']=="TT"){ ?> selected="selected" <?php } ?>>TT</option>
                <option value="DKV" <?php if($baris['prodi']=="DKV"){ ?> selected="selected" <?php } ?>>DKV</option>
                <option value="ADBIS" <?php if($baris['prodi']=="ADBIS"){ ?> selected="selected" <?php } ?>>ADBIS</option>
                
            </select>
        </td>
        </tr>

        <tr>
            <td>Fakultas</td>
            <td>:</td>
            <td>

        <input type="radio" value="FRI" <?php if($baris['fakultas']=="FRI"){ ?> selected="selected" <?php } ?>>FRI<br>
        <input type="radio" value="FIF" <?php if($baris['fakultas']=="FIF"){ ?> selected="selected" <?php } ?>>FIF<br>

        <input type="radio" value="FIF" <?php if($baris['fakultas']=="FKB"){ ?> selected="selected" <?php } ?>>FKB<br>
        <input type="radio" value="FEB" <?php if($baris['fakultas']=="FEB"){ ?> selected="selected" <?php } ?>>FEB<br>

        <input type="radio" value="FTE" <?php if($baris['fakultas']=="FTE"){ ?> selected="selected" <?php } ?>>FTE<br>
        <input type="radio" value="FIK" <?php if($baris['fakultas']=="FIK"){ ?> selected="selected" <?php } ?>>FIK<br>

        <input type="radio" value="FIT" <?php if($baris['fakultas']=="FIT"){ ?> selected="selected" <?php } ?>>FIT<br>
            </td>
           
        </tr>

        <tr>

            <td>Asal</td>
            <td>:</td>
            <td><input type="text" value="<?php echo $baris['asal']; ?>" name="asal"></td>

        </tr>

        <tr>

            <td>Moto Hidup</td>
            <td>:</td>
            <td><input type="textarea" value="<?php echo $baris['moto']; ?>" name="moto"></td>

        </tr>

        <tr>

            <td><input type="submit" name="submit" value="Simpan"></td>

        </tr>
    </form>
</table>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">
		<tr>
			<td>INPUT DATA</td>
		</tr><br><br>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama"></td><br><br>
		</tr>
		<tr>
			<td>Nim</td>
			<td><input type="number" name="nim"></td><br><br>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td><input type="date" name="tgllahir"></td><br><br>
		</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><input type="radio" name="jk" value="laki">Laki-laki
				<input type="radio" name="jk" value="perempuan">Perempuan</td>
			</tr><br><br>
		<tr>
				<td>Program Studi</td>
				<td>:</td>
				<td><select name="prodi">
					<option value="D3SI">D3 Sistem informasi</option>
					<option value="S1IKOM">S1 Ilmu komunikasi</option>
					<option value="D4SM">D4 Sistem Multimedia</option>
				</select></td><br><br>
			</tr>
		<tr>
			<td>Fakultas</td>
			<td>:</td>
			<td><select name="fakultas">
				<option value="FIT">FIT</option>
				<option value="FIK">FIK</option>
				<option value="FKB">FKB</option>
			</select></td><br><br>
		</tr>
		<tr>
			<td>Asal</td>
			<td><input type="text" name="asal"></td><br><br>
		</tr>
		<tr>
			<td>Moto Hidup</td>
			<td><input type="text" name="motohidup" maxlength="50"></td><br><br>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="submit"><a href="data.php">View</td>
		</tr>

	</form>


</body>
</html>

<?php  
include "koneksi.php";
if (isset($_POST['submit'])) {
	$nama = $_POST['nama'];
	if (is_numeric($_POST['nim'])) {
	}
	$nim = $_POST['nim'];
	$tgllahir = $_POST['tgllahir'];
	$jk = $_POST['jk'];
	$prodi = $_POST ['prodi'];
	$fakultas = $_POST ['fakultas'];
	$asal = $_POST ['asal'];
	$motohidup = $_POST ['motohidup'];

	if (isset($nim)) {
	
	$query=mysqli_query($con,"INSERT INTO `mahasiswa`(`nama`, `nim`, `tgllahir`, `jk`, `prodi`, `fakultas`, `asal`, `motohidup`) VALUES ('$nama','$nim','$tgllahir','$jk','$prodi','$fakultas','$asal','$motohidup')");

	if ($query) {
		echo "berhasil";
	}
	else{
		echo "gagal";
	}

}

}




?>
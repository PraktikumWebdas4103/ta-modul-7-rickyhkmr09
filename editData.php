<?php
require_once('db.php');
$id = $_GET['nim'];
$sql = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE nim = '$id'");
$row = mysqli_fetch_assoc($sql);
if(isset($_POST['upload'])){
 $nim				= $_POST["nim"];
 $nama 				= $_POST["nama"];
 $jeniskelamin		= $_POST["jeniskelamin"];
 $programstudi		= $_POST["programstudi"];
 $fakultas			= $_POST["fakultas"];
 $asal 				= $_POST["asal"];
 $mottohidup		= $_POST["motohidup"];
 $sql = "UPDATE mahasiswa SET nama = '$nama', nim = '$nim', jeniskelamin = '$jeniskelamin', programstudi = '$programstudi', fakultas = '$fakultas', asal = '$asal', motohidup = '$motohidup' WHERE nim='$id'";
 if (mysqli_query($conn, $sql)) {
 header('Location: tampilan.php');
 }else {
 echo "Data gagal diupload! " . $sql . "<br?" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>
<!DOCTYPE html>

<html>

<head>
<center>
	<title>ubah data mahasiswa</title>
</head>
<body background="taylor.jpg">
		<h1>UBAH DATA</h1>
		<form method="POST">

		<table>
		<tr>
			<td>Nama</td> 
			<td>:</td>
			<td><input type="text" name="nama"  minlength="1" maxlength="25"  value="<?php echo $row["nama"];?>"><br><br></td>
		</tr>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="number"  name="nim" maxlength="10"  value="<?php echo $row["nim"];?>"  required ><br><br></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><input type="radio" name="jk" value="Laki - Laki" required>Kaum Adam<br></td> 
			<td><input type="radio" name="jk" value="Perempuan" required>Kaum Hawa<br></td>
		</tr>
		<tr>
			<td>Program Studi</td>
			<td>:</td>
			<td><select name="prodi">
						<option> D3 Manajemen Informatika</option>
						<option> D3 Teknik Telekomunikasi</option>
						<option> D3 Teknik Komputer</option>
						<option> D3 Teknik Informatika</option>
						<option> D3 Manajamen Pemasaran</option>
						<option> D3 Perhotelan</option>
						<option> D3 Komputerisasi Akuntansi</option>
						<option> D4 Sistem Multimedia</option>
					</select><br><br></td>
		</tr>
		<tr>
			<td>Fakultas</td>
			<td>:</td>
			<td><select name="fakultas">
					<option> ---Pilih--- </option>
						<option> Fakultas Ilmu Terapan</option>
						<option> Fakultas Wibu Sejagat</option>
						<option> Fakultas Avatar</option>
						<option> Fakultas Ninja Komunikasi</option>
						<option> Fakultas Perancangan Body Sejagad</option>
					</select><br><br></td>
		</tr>
		<tr>
			<td>Asal</td> 
			<td>:</td>
			<td><input type="text" name="asal" value="<?php echo $row["asal"];?>"><br><br></td>
		</tr>
		<tr>
			<td>Motto Hidup</td> 
			<td>:</td>
			<td><input type="textarea" name="motohidup" value="<?php echo $row["motohidup"];?>"><br><br></td>
		</tr>
		<tr>
			<td><input type="submit" name="upload" id="upload" value="Kirim" style="width: 120px"></td>
	</form>
</body>
</html>
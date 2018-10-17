<!DOCTYPE html>
<html>
<head>
	<title>Input Data Mahasiswa</title>
</head>
<body bgcolor="red">
	<table align="center">
		<form action="proses.php" method="POST" enctype="multipart/form-data">
			<tr>
				<td colspan="3" align="center"><marquee><h1>INPUT DATA MAHASISWA</h1></marquee></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"></br></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="number" name="nim"></td>
			</tr>

			<tr>
				<td> Jenis Kelamin</td>
				<td>:</td>
				<td>
					<input type="radio" name="jeniskelamin" value="Laki-Laki">Male</br>
					<input type="radio" name="jeniskelamin" value="Perempuan">Female
				</td>
			</tr>

			<tr>
				<td>Program Studi</td>
				<td>:</td>
				<td>
					<select name="programstudi">
						<option> D3 Manajemen Informatika</option>
						<option> D3 Teknik Telekomunikasi</option>
						<option> D3 Teknik Komputer</option>
						<option> D3 Teknik Informatika</option>
						<option> D3 Manajamen Pemasaran</option>
						<option> D3 Perhotelan</option>
						<option> D3 Komputerisasi Akuntansi</option>
						<option> D4 Sistem Multimedia</option>
					</select>
				</td>
			</tr>

			<tr>
				<td>Fakultas</td>
				<td>:</td>
				<td>
					<select name="fakultas">
					    <option> ---Pilih--- </option>
						<option> Fakultas Ilmu Terapan</option>
						<option> Fakultas Wibu Sejagat</option>
						<option> Fakultas Avatar</option>
						<option> Fakultas Ninja Komunikasi</option>
						<option> Fakultas Perancangan Body Sejagad</option>
					</select>
				</td>
			</tr>

			<tr>
				<td>Asal</td>
				<td>:</td>
				<td><input type="text" name="asal"></td>
			</tr>

			<tr>
				<td>Moto Hidup</td>
				<td>:</td>
				<td><textarea name="motohidup"></textarea></td>
			</tr>

			<tr>
				<td><input type="submit" name="submit" value="submit"></td>
			</tr>
		</form>
	</table>
</body>
</html>
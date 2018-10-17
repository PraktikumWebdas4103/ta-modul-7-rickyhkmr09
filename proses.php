<html>
<body bgcolor="blue">
</html>
<?php 
require_once("db.php");
$nama 			= $_POST['nama'];
$nim 			= $_POST['nim'];
$jeniskelamin	= $_POST['jeniskelamin'];
$programstudi	= $_POST['programstudi'];
$fakultas 		= $_POST['fakultas'];
$asal 			= $_POST['asal'];
$motohidup 		= $_POST['motohidup'];
$sql = "INSERT INTO mahasiswa(nama,nim,jeniskelamin,programstudi,fakultas,asal,motohidup) 
		VALUES ('$nama', '$nim', '$jeniskelamin', '$programstudi', '$fakultas', '$motohidup', '$asal')";
if (mysqli_query($conn, $sql)) {
	echo "<center>BERHASIL</center>";
}else{
	echo "Error: ". $sql . "<br>" . mysqli_error($conn);
}		
mysqli_close($conn);
echo"<br>";
echo "<center> Silahkan klik <a href='tampilan.php'>link ini</a> untuk selanjutnya </center>";
?>
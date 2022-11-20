<!DOCTYPE html>
<html>
<head>
	<title>Biodata</title>
</head>
<body>
  <h1><center>BIODATA DIRI</center></h1>
</body>
</html>
<?php 
$Nama=$_POST['Nama'];
$nim=$_POST['NIM'];
$JK=$_POST['JK'];
$Tempat=$_POST['Tempat'];
$tanggal=$_POST['tanggal'];
$alamat=$_POST['alamat'];
$jurusan=$_POST['jurusan'];
$hobby=$_POST['hobby'];



echo "Nama     : $Nama<br>";
echo "NIM      : $nim<br>";
echo "Jenis Kelamin : $JK<br>";
echo "Tempat dan Tanggal Lahir : $Tempat, $tanggal<br>";
echo "Alamat : $alamat<br>";
echo "Jurusan  : $jurusan<br>";
echo "Hobby      : $hobby<br>";
?>
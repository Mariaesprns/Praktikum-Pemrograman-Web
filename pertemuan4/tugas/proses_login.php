<!DOCTYPE html>
<html>
<head>
	<title>Proses Login</title>
	<link href="style.css" rel="stylesheet">
</head>
<body>
<?php
echo "<center><br><br><br><br><br><br><br><br><br><br>";
echo "<h3><center>PERKENALKAN, NAMA SAYA MARIA !</center></h3>";
echo "<table width=500 cellpadding=0 cellspacing=0 border=1";
echo "<tr>";
echo "<td>";
echo "<h3>Nama : ". $_POST['nama']. "</h3>";
echo "<h3>Email : ". $_POST['email']. "</h3>";
date_default_timezone_set('Asia/Jakarta');
echo "Login Pada jam :"; echo date("H:i:s A"); 
echo "<br>";
echo date("l, d-m-Y");
echo "</td>";
echo "</tr>";
echo "</table>";
echo '<meta http-equiv="refresh" content="2; url=./ceklogin.php"/>';
echo "<center><h3>Berhasil, dalam 2 detik kamu akan dialihkan ke halaman utama</h3></center>";
?>

<input type="submit" name="btnLogout" value="LOGOUT" >

</body>
</html>
<html>
 <head>
  <title>Biodata DIRI</title>
 </head>
 <body>
  <h1><center>BIODATA DIRI</center></h1>
  <table border=0>
  <form action="output_biodata.php" method="POST">
  <tr>
   <td>Nama Lengkap</td>
   <td>:</td>
   <td><input type="text" name="Nama"></td>
  </tr>
  <tr>
   <td>NIM</td>
   <td>:</td>
   <td><input type="text" name="NIM"></td>
  </tr>
  <tr>
  <tr>
   <td>Jenis Kelamin</td>
   <td>:</td>
   <td><input type="radio" name="JK" value="Laki-laki">Laki-laki<input type="radio" name="JK" value="Perempuan">Perempuan</td>
  </tr>
  <tr>
   <td>Tempat dan Tanggal Lahir</td>
   <td>:</td>
   <td>
    <input type="text" name="Tempat" size="15">
    <input type="date" name="tanggal">
   </td>
  </tr>
  <tr>
   <td>Alamat</td>
   <td>:</td>
   <td><textarea name="alamat"></textarea>
  </tr>
  <tr>
  <tr>
  <td>Jurusan</td>
  <td>:</td>
  <td>
    <select name="jurusan">
      <option name="jurusan">Jurusan
      <option name="jurusan">T. Informatika
      <option name="jurusan">T. Elektro
      <option name="jurusan">T. Sipil
      <option name="jurusan">T. PWK
      <option name="jurusan">T. Arsitektur
      <option name="jurusan">T. Industri
      <option name="jurusan">T. Mesin
      <option name="jurusan">T. Sistem Informasi
    </select>  
  </td>
  </tr>    
   <td>Hobby</td>
   <td>:</td>
   <td><input type="text" name="hobby" size="15"></td>
  </tr>
  <tr>
   <td> </td>
   <td> </td>
   <td><input type="submit" name="tambah" value="Masukkan Data">
   <input type="reset" name="kembali" value="Reset Data"></td>
  </tr>
  </form>
  </table>
 </body>
</html>

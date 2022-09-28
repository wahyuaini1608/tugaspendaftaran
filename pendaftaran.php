<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran</title>
</head>
<center>
<body>
    <h3>Pendaftaran Siswa Baru
        SMKN 1 Sayung</h3>
        <form action="proses-daftar.php" method="post">
        <table border=0>
        <tr>
<td>Nama Lengkap      : </td>
<td><input type="text" name="nama" /></td>
</tr>
<tr>
<td>Tempat Lahir      : </td>
<td><input type="text" name="tempat" /></td>
</tr>
<tr>
<td>Tanggal Lahir     : </td>
<td><input type="date" name="tanggal" /></td>
</tr>
<tr>
    <td>Jenis Kelamin : </td>
<td><input type="radio" name="jk" value="Laki-Laki" />Laki-Laki </td>
<td><input type="radio" name="jk" value="Perempuan" />Perempuan </td>
</tr>
<tr>
<td>Alamat            : </td>
<td><textarea name="alamat"></textarea></td>
</tr>
<tr>
<td>Agama             : </td>
<td><select name="agama">
<option value="islam">Islam 
<option value="kristen">Kristen 
<option value="katolik">Katolik 
<option value="buddha">Buddha 
<option value="hindu">Hindu 
</select> </td>
</tr>
<tr>
<td> <input type="reset" value="Ulangi" /></td>


<td><input type="submit" value="Submit" /> </td>
</tr>
</form>
</center>
</body>
</html>
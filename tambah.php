<!--
+====================================================================================================+
+  _ _ _ _ _     __     __    _ _ _ _ _     __ _ _ _ __    _ _ _ _      __    __ _ _ _    __         +
+ |_ _    _ _|  |  |   |  |  |_ _    _ _|  /     _     \  |   __   \   |  |  /   __   \  |  |        +
+     |  |      |  |   |  |      |  |      |   /   \   |  |  |_ |  |   |  |  |  |__|  |  |  |        +
+     |  |      |  |   |  |      |  |      |   |   |   |  |   _   _/   |  |  |   __   |  |  |        +
+     |  |      |  \_ _/  |      |  |      |   \ _ /   |  |  | \  \    |  |  |  |  |  |  |  |_ _ __  +
+     |__|      \__ _ _ _ /      |__|      \_ _ _ _ _ _/  |__|  \__\   |__|  |__|  |__|  |_ _ _ _ _| +  
+   __    __    _ _ _ _ _ _    _ _ _ _     __    _ _ _     __    _ _ _ _ _                           +
+  |  | /   /  /     _     \  |   __  \   |  |  |     \   |  |  /   _ _ __\                          +
+  |  |/   /   |   /   \   |  |  /  \  |  |  |  |  |\  \  |  |  |  /  _ __                           +
+  |      /    |   |   |   |  |  |  |  |  |  |  |  | \  \ |  |  |  | |_   \                          +
+  |  |\  \    |   \ _ /   |  |  \ _/  |  |  |  |  |  \  \|  |  |  |__ |  |                          +
+  |__| \__\   \_ _ _ _ _ _/  |_ _ _ _/   |__|  |__|   \_ _ _|  \ _ _ _ _ /                          +
+====================================================================================================+
!-->
<?php include "koneksi.php"; 

if (isset($_POST['simpan'])) {
	$nis=$_POST['nis'];
	$nama=$_POST['nama'];
	$alamat=$_POST['alamat'];
	$kelamin=$_POST['kelamin'];
	$sqlsimpan=mysql_query("insert into siswa(nis,nama,alamat,kelamin) values ('".$nis."','".$nama."','".$alamat."','".$kelamin."')");
	echo "<center>Data siswa berhasil disimpan</center>";
	echo "<meta http-equiv='refresh' content=3;url='./'>";
}

?>
<form method="post" action="">
<table width="600" cellpadding="0" cellspacing="0" align="center">
<tr>
<td colspan="3" align="center"><h2>Tambah data siswa</h2></td>
</tr>
<tr>
<td>NIS</td>
<td>:</td>
<td><input type="text" name="nis"></td>
</tr>
<tr>
<td>Nama</td>
<td>:</td>
<td><input type="text" name="nama"></td>
</tr>
<tr>
<td>Alamat</td>
<td>:</td>
<td><textarea name="alamat"></textarea></td>
</tr>
<tr>
<td>Jenis Kelamin</td>
<td>:</td>
<td><select name="kelamin">
<option value="Laki - Laki" selected>Laki - Laki</option>
<option value="Perempuan">Perempuan</option>
</select>
</td>
</tr>
<tr>
<td colspan="2">&nbsp;</td>
<td><input type="submit" name="simpan" value="Simpan"> &nbsp; <input type="reset" name="batal" value="Batal"></td>
</tr>
</table>
</form>
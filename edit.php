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

$nis=$_GET['nis'];
$sqlsiswa=mysql_query("select * from siswa where nis='".$nis."'");
$datasiswa=mysql_fetch_array($sqlsiswa);

if(isset($_POST['edit'])) {
	$id=$_GET['id'];
	$nis=$_POST['nis'];
	$nama=$_POST['nama'];
	$alamat=$_POST['alamat'];
	$kelamin=$_POST['kelamin'];
	$sqledit=mysql_query("update siswa set nis='".$nis."',nama='".$nama."',alamat='".$alamat."',kelamin='".$kelamin."' where nis='".$id."'");
	echo "<center>Data siswa berhasil diedit</center>";
	echo "<meta http-equiv='refresh' content=3;url='./'>"; 
	}
?>
<form method="post" action="./edit.php?&id=<?=$datasiswa['nis'];?>">
<table width="600" cellpadding="0" cellspacing="0" align="center">
<tr>
<td colspan="3" align="center"><h2>Edit Data Siswa</h2></td>
</tr>
<tr>
<td>NIS</td>
<td>:</td>
<td><input type="text" name="nis" value="<?=$datasiswa['nis'];?>"></td>
</tr>
<tr>
<td>Nama</td>
<td>:</td>
<td><input type="text" name="nama" value="<?=$datasiswa['nama'];?>"></td>
</tr>
<tr>
<td>Alamat</td>
<td>:</td>
<td><textarea name="alamat"><?=$datasiswa['alamat'];?></textarea></td>
</tr>
<tr>
<td>Jenis Kelamin</td>
<td>:</td>
<td><select name="kelamin">
<option value="<?=$datasiswa['kelamin'];?>" selected><?=$datasiswa['kelamin'];?></option>
<option value="Laki - Laki">Laki - Laki</option>
<option value="Perempuan">Perempuan</option>
</select>
</td>
</tr>
<tr>
<td colspan="2">&nbsp;</td>
<td><input type="submit" name="edit" value="Edit"> &nbsp; <input type="reset" name="batal" value="Batal"></td>
</tr>
</table>
</form>
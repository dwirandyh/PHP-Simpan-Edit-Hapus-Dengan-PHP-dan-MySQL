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
<?php include "koneksi.php";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="600" cellpadding="0" cellspacing="0" align="center">
<tr>
<td colspan="7" align="center"><h3>Daftar Data Siswa</h3></td>
</tr>
<tr>
<td colspan="2"><a href="./tambah.php">Tambah Data</a></td>
</tr>

<tr>
<td width="52">No.</td>
<td width="73">NIS</td>
<td width="97">Nama</td>
<td width="161">Alamat</td>
<td width="105">Jenis Kelamin</td>
<td align="center" colspan="2">Action</td>
</tr>
<tr>
<?php
$sqlsiswa=mysql_query("select * from siswa order by nis asc");
while ($datasiswa=mysql_fetch_array($sqlsiswa)) {$a++;
?>
<td><?=$a;?></td>
<td><?=$datasiswa['nis'];?></td>
<td><?=$datasiswa['nama'];?></td>
<td><?=$datasiswa['alamat'];?></td>
<td><?=$datasiswa['kelamin'];?></td>
<td width="51"><a href="./edit.php?nis=<?=$datasiswa['nis'];?>">Edit</a></td>
<td width="59"><a href="./hapus.php?nis=<?=$datasiswa['nis'];?>">Hapus</a></td>
</tr>
<?php } ?>
</table>
</body>
</html>
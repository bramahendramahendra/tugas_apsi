<?php 
include 'koneksi.php';
$a = $_GET['id_guru'];
mysql_query("DELETE FROM penggajian WHERE id_guru='$id_guru'")or die(mysql_error());
 
header("location:index.php?pesan=hapus");
?>
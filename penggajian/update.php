<?php 

include 'koneksi.php';
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
$d = $_POST['d'];
$e = $_POST['e'];
$f = $_POST['f'];

mysql_query("UPDATE penggajian SET a='$a', b='$b', c='$c', d='$d', e='$e', f='$f' WHERE a='$a'");

header("location:index.php?pesan=update");
?>
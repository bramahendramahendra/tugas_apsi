<?php 
include 'koneksi.php';

if (isset($_POST['add'])) {
	$a = $_POST['id_guru'];
	$b = $_POST['id_gaji'];
	$c = $_POST['jam_kerja'];
	$d = $_POST['nama_guru'];
	$e = $_POST['total_gaji'];
	mysqli_query($con, "INSERT INTO penggajian1 VALUES('$a','$b','$c', '$d', '$e')");
} 
echo "<script>window.location='index.php';</script>";
?>
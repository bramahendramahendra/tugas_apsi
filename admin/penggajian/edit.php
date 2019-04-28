<!DOCTYPE html>
<html>
<head>
	<title>Penggajian</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="judul">		
		<h1>DATA PENGGAJIAN</h1>
		<h2>GAJI</h2>
	</div>
	<br/>
	
	<a class="tombol" href="index.php">Lihat Semua Data</a>
	
	<br/>
	<h3>Edit data</h3>

	<?php 
	include "koneksi.php";
	$id_guru = $_GET['id_guru'];
	$query_mysql = mysql_query("SELECT * FROM penggajian WHERE id_guru='$id_guru'")or die(mysqli_error());
	
	while($data = mysql_fetch_array($query_mysql)){
	?>
	<form action="update.php" method="post">		
		<table>
			<tr>
				<td>id_guru</td>
				<td>
					<input type="text" name="id_guru" value="<?php echo $data['id_guru'] ?>">
				</td>					
			</tr>
			<tr>
				<td>id_gaji</td>
				<td>
					<input type="text" name="id_gaji" value="<?php echo $data['id_gaji'] ?>">
				</td>					
			</tr>
			<tr>
				<td>jam_kerja</td>
				<td>
					<input type="text" name="jam_kerja" value="<?php echo $data['jam_kerja'] ?>">
				</td>					
			</tr>
			<tr>
				<td>nama_guru</td>
				<td>
					<input type="text" name="nama_guru" value="<?php echo $data['nama_guru'] ?>">
				</td>					
			</tr>
			<tr>
				<td>total_gaji</td>
				<td>
					<input type="text" name="total_gaji" value="<?php echo $data['total_gaji'] ?>">
				</td>					
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	<?php } ?>
</body>
</html>
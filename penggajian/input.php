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
	<h3>Input data baru</h3>
	<form action="input-aksi.php" method="post">		
		<table>
			<tr>
				<td>id_guru</td>
				<td><input type="text" name="id_guru"></td>					
			</tr>	
			<tr>
				<td>id_gaji</td>
				<td><input type="text" name="id_gaji"></td>					
			</tr>	
			<tr>
				<td>jam_kerja</td>
				<td><input type="text" name="jam_kerja"></td>					
			</tr>	
			<tr>
				<td>nama_guru</td>
				<td><input type="text" name="nama_guru"></td>					
			</tr>	
			<tr>
				<td>total_gaji</td>
				<td><input type="text" name="total_gaji"></td>					
			</tr>
			<tr>
				<td><input type="submit" name="add" value="Tambah"></td>
			</tr>					
		</table>
	</form>
</body>
</html>
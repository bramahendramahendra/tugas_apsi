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
 
	<?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?>
	<br/>
	<a class="tombol" href="input.php">+ Tambah Data Baru</a>
	<a class="tombol" href="#">Print</a>
 
	<h3>Data Penggajian</h3>
	<table border="1" class="table">
		<tr>
			<th>id_guru</th>
			<th>id_gaji</th>
			<th>jam_kerja</th>
			<th>nama_guru</th>
			<th>total_gaji</th>
			<th>Opsi</th>		
		</tr>
		<?php 
		include "koneksi.php";
		$query_mysql = mysqli_query($con, "SELECT * FROM penggajian1") or die(mysqli_error($con));
		//$sql_pasien = mysqli_query($con, "SELECT * FROM tb_pasien") or die (mysqli_error($con));
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $data['id_guru']; ?></td>
			<td><?php echo $data['id_gaji']; ?></td>
			<td><?php echo $data['jam_kerja']; ?></td>
			<td><?php echo $data['nama_guru']; ?></td>
			<td><?php echo $data['total_gaji']; ?></td>
			<td>
				<a class="edit" href="edit.php?a=<?php echo $data['id_guru']; ?>">Edit</a> |
				<a class="hapus" href="hapus.php?a=<?php echo $data['id_guru']; ?>">Hapus</a>					
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>
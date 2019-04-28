<?php 
// isi nama host, username mysql, dan password mysql anda
//$host = mysql_connect("localhost","root","");
 
// isikan dengan nama database yang akan di hubungkan
//$db = mysql_select_db("penggajian1");
 
$con = mysqli_connect('localhost','root','','pb_apsi_penggajian');
if (mysqli_connect_errno()) {
	echo mysqli_connect_error();
}
?>
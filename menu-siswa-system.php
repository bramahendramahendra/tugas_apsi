<?php 
    require_once("config.php");
    if(isset($_POST['pembayaran'])){
        header('location:pembayaran/pembayaran.php');
    }
    if(isset($_POST['siswa-absen'])){
        header('location:siswa/absent.php');
    }
    if(isset($_POST['siswa-jadwal'])){
        header('location:siswa/siswa/index-siswa.php');
    }
?>
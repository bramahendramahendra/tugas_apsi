<?php 
    require_once("config.php");
    if(isset($_POST['admin'])){
        header('location:admin/index.php');
    }
    if(isset($_POST['instruktur'])){
        header('location:instruktur/index.php');
    }
    if(isset($_POST['siswa'])){
        header('location:menu-siswa.php');
    }
    if(isset($_POST['pemilik'])){
        header('location:pemilik/menu-pemilik.php');
    }
?>


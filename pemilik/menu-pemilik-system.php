<?php 
    
    if(isset($_POST['keuangan'])){
        header('location:/pembayaran.php');
    }
    if(isset($_POST['instruktur'])){
        header('location:instruktur/index.php');
    }
?>
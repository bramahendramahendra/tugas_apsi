<?php 
    
    if(isset($_POST['keuangan'])){
        header('location:keuangan/index.php');
    }
    if(isset($_POST['instruktur'])){
        header('location:instruktur/index.php');
    }
?>
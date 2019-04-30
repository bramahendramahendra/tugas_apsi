<?php
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF

$pdf = new FPDF('l','mm','A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->Cell(190,10,'',0,1,'C');
$pdf->SetFont('Times','I',25);
// mencetak string 
$pdf->Cell(190,10,'CERTIFICATE OF COMPLETION',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'This is certify that',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat


$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,6,'NIM',1,0,'C');
$pdf->Cell(150,6,'NAMA MAHASISWA',1,1,'C');

include 'config.php';
$siswa = mysqli_query($db, "SELECT * FROM siswa");
while ($row = mysqli_fetch_array($siswa)){
    $pdf->Cell(40,6,$row['nis'],1,0,'C');
    $pdf->Cell(150,6,$row['nama_siswa'],1,1,'C');
  
}

$pdf->Output();
?>

<?php

@session_start();
// memanggil library FPDF
require('../fpdf/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A4');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string
$pdf->Cell(190,7,'Data Kuesioner Siswa',0,1,'C');
$pdf->SetFont('Arial','B',12);


// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);


$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,6,'Nis',1,0);
$pdf->Cell(85,6,'Nama Lengkap',1,0);
$pdf->Cell(27,6,'Rombel',1,0);
$pdf->Cell(25,6,'Rayon',1,1);

$pdf->SetFont('Arial','',10);

include '../config/koneksi.php';
$nis = $_GET['nis'];
$mahasiswa = mysqli_query($con, "select * from tbl_kuesioner WHERE nis = '$nis' order by id desc");
while ($row = mysqli_fetch_array($mahasiswa)){
    $pdf->Cell(20,6,$row['nis'],1,0);
    $pdf->Cell(85,6,$row['nama_lengkap'],1,0);
    $pdf->Cell(27,6,$row['rombel'],1,0);
    $pdf->Cell(25,6,$row['rayon'],1,1);
}


$pdf->Cell(190,7,'Laporan Kuesioner Siswa',0,1,'C');
$pdf->SetFont('Arial','B',12);

$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,6,'Pertanyaan',1,0);
$pdf->Cell(85,6,'Jawaban',1,0);



$pdf->Cell(20,6,$_SESSION['alergi'],1,0);
$pdf->Cell(20,6,$_SESSION['obat'],1,0);

$pdf->Output();

?>

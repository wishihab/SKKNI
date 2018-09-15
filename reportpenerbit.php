<?php
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A4');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(190,7,'APLIKASI TOKO BUKU',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'DAFTAR TABLE PENERBIT',0,1,'C');
 
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);
 
$pdf->SetFont('Arial','B',10);
$pdf->Cell(25,6,'ID PENERBIT',1,0);
$pdf->Cell(50,6,'NAMA',1,0);
$pdf->Cell(50,6,'NEGARA',1,0);
$pdf->Cell(25,6,'KOTA',1,1);

$pdf->SetFont('Arial','',10);
 
include 'config.php';
$sql = "SELECT *from table_penerit";
$result = $db->query($sql);
while ($row = mysqli_fetch_array($result)){
	
    $pdf->Cell(25,6,$row['id_penerbit'],1,0);
    $pdf->Cell(50,6,$row['nama'],1,0);
    $pdf->Cell(50,6,$row['negara'],1,0);
    $pdf->Cell(25,6,$row['kota'],1,1);

}
 
$pdf->Output();
?>
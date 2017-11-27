<?php
include "fpdf.php";
include "../conn.php";

$pdf = new FPDF();
$pdf->AddPage();

$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,5,'Perpustakaan Online','0','1','C', false);
$pdf->SetFont('Arial','i',8);
$pdf->Cell(0,5,'Alamat : Kelapa Dua, Depok','0','1','C', false);
$pdf->Cell(0,2,'Code By WeDusss','0','1','C', false);
$pdf->Ln(3);
$pdf->Cell(190,0,6,'','0','1','C', true);

$pdf->SetFont('Arial','B',9);
$pdf->Cell(50,5,'Laporan Data Anggota','0','1','L', false);
$pdf->Ln(3);

$pdf->SetFont('Arial','B',9);
$pdf->Cell(8,5,'ID Anggota','0','1','C', false);
$pdf->Cell(35,5,'No Induk','1','0','C', false);
$pdf->Cell(37,5,'Nama','1','0','C', false);
$pdf->Cell(35,5,'Jenis Kelamin','1','0','C', false);
$pdf->Cell(35,5,'Kelas','1','0','C', false);
$pdf->Cell(40,5,'Tempat dan Tanggal Lahir','1','0','C', false);
$pdf->Cell(35,5,'Alamat','1','0','C', false);
$pdf->Ln(2);
$no = 0;
$sql = mysql_query("select * from data_anggota order by id asc");
while($data = mysql_fetch_array($sql)){
    $no++;
    $pdf->Ln(4);
    $pdf->SetFont('Arial','',7);
    $pdf->Cell(8,4,$no.",",1,0,'C');
    $pdf->Cell(8,5,$data['id'],'0','1','L');
    $pdf->Cell(35,5,$data['no_induk'],'1','0','L');
    $pdf->Cell(37,5,$data['nama'],'1','0','L');
    $pdf->Cell(35,5,$data['jk'],'1','0','L');
    $pdf->Cell(35,5,$data['kelas'],'1','0','L');
    $pdf->Cell(40,5,$data['ttl'],'1','0','L');
    $pdf->Cell(35,5,$data['alamat'],'1','0','L');
}

$pdf->Output();
?>
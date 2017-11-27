<?php
include "../conn.php";
require('fpdf.php');

//Menampilkan data dari tabel di database
$result=mysql_query("SELECT * FROM data_buku ORDER BY id ASC") or die(mysql_error());

//Inisiasi untuk membuat header kolom
$column_id = "";
$column_judul = "";
$column_pengarang = "";
$column_th_terbit = "";
$column_penerbit = "";
$column_jumlah_buku = "";
$column_lokasi ="";


//For each row, add the field to the corresponding column
while($row = mysql_fetch_array($result))
{
    $id = $row["id"];
    $judul = $row["judul"];
    $pengarang = $row["pengarang"];
    $th_terbit = $row["th_terbit"];
    $penerbit = $row["penerbit"];
    $jumlah_buku = $row["jumlah_buku"];
    $lokasi = $row["lokasi"];
 
    

    $column_id = $column_id.$id."\n";
    $column_judul = $column_judul.$judul."\n";
    $column_pengarang = $column_pengarang.$pengarang."\n";
    $column_th_terbit = $column_th_terbit.$th_terbit."\n";
    $column_penerbit = $column_penerbit.$penerbit."\n";
    $column_jumlah_buku = $column_jumlah_buku.$jumlah_buku."\n";
    $column_lokasi = $column_lokasi.$lokasi."\n";
    

//Create a new PDF file
$pdf = new FPDF('L','mm',array(297,210)); //L For Landscape / P For Portrait
$pdf->AddPage();

//Menambahkan Gambar
//$pdf->Image('../foto/logo.png',10,10,-175);

$pdf->SetFont('Arial','B',13);
$pdf->Cell(125);
$pdf->Cell(30,10,'Data Buku',0,0,'C');
$pdf->Ln(4);
$pdf->Cell(125);
$pdf->Cell(30,10,'Coding By WeDusss',0,0,'C');
$pdf->Ln(1);

}
//Fields Name position
$Y_Fields_Name_position = 30;

//First create each Field Name
//Gray color filling each Field Name box
$pdf->SetFillColor(110,180,230);
//Bold Font for Field Name
$pdf->SetFont('Arial','B',10);
$pdf->SetY($Y_Fields_Name_position);
$pdf->SetX(5);
$pdf->Cell(20,8,'ID Buku',1,0,'C',1);
$pdf->SetX(25);
$pdf->Cell(92,8,'Judul',1,0,'C',1);
$pdf->SetX(117);
$pdf->Cell(35,8,'Pengarang',1,0,'C',1);
$pdf->SetX(152);
$pdf->Cell(25,8,'Tahun Terbit',1,0,'C',1);
$pdf->SetX(177);
$pdf->Cell(60,8,'Penerbit',1,0,'C',1);
$pdf->SetX(237);
$pdf->Cell(23,8,'Jumlah',1,0,'C',1);
$pdf->SetX(260);
$pdf->Cell(25,8,'Lokasi',1,0,'C',1);
$pdf->Ln();

//Table position, under Fields Name
$Y_Table_Position = 38;

//isbnw show the columns
$pdf->SetFont('Arial','',10);

$pdf->SetY($Y_Table_Position);
$pdf->SetX(5);
$pdf->MultiCell(20,6,$column_id,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(25);
$pdf->MultiCell(92,6,$column_judul,1,'L');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(117);
$pdf->MultiCell(35,6,$column_pengarang,1,'L');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(152);
$pdf->MultiCell(25,6,$column_th_terbit,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(177);
$pdf->MultiCell(60,6,$column_penerbit,1,'L');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(237);
$pdf->MultiCell(23,6,$column_jumlah_buku,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(260);
$pdf->MultiCell(25,6,$column_lokasi,1,'C');

$pdf->Output();
?>
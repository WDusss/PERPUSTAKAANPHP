<?php
include "../conn.php";
require('fpdf.php');

//Menampilkan data dari tabel di database
$result=mysql_query("SELECT * FROM trans_pinjam ORDER BY id ASC") or die(mysql_error());

//Inisiasi untuk membuat header kolom
$column_id = "";
$column_judul = "";
$column_nama_peminjam = "";
$column_tgl_pinjam = "";
$column_tgl_kembali = "";
$column_status = "";
$column_ket ="";


//For each row, add the field to the corresponding column
while($row = mysql_fetch_array($result))
{
    $id = $row["id"];
    $judul = $row["judul"];
    $nama_peminjam = $row["nama_peminjam"];
    $tgl_pinjam = $row["tgl_pinjam"];
    $tgl_kembali = $row["tgl_kembali"];
    $status = $row["status"];
    $ket = $row["ket"];
 
    

    $column_id = $column_id.$id."\n";
    $column_judul = $column_judul.$judul."\n";
    $column_nama_peminjam = $column_nama_peminjam.$nama_peminjam."\n";
    $column_tgl_pinjam = $column_tgl_pinjam.$tgl_pinjam."\n";
    $column_tgl_kembali = $column_tgl_kembali.$tgl_kembali."\n";
    $column_status = $column_status.$status."\n";
    $column_ket = $column_ket.$ket."\n";
    

//Create a new PDF file
$pdf = new FPDF('L','mm',array(297,210)); //L For Landscape / P For Portrait
$pdf->AddPage();

//Menambahkan Gambar
//$pdf->Image('../foto/logo.png',10,10,-175);

$pdf->SetFont('Arial','B',13);
$pdf->Cell(125);
$pdf->Cell(30,10,'Data Transaksi',0,0,'C');
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
$pdf->Cell(20,8,'ID',1,0,'C',1);
$pdf->SetX(25);
$pdf->Cell(85,8,'Judul',1,0,'C',1);
$pdf->SetX(110);
$pdf->Cell(35,8,'Nama Peminjam',1,0,'C',1);
$pdf->SetX(145);
$pdf->Cell(35,8,'Tanggal Pinjam',1,0,'C',1);
$pdf->SetX(180);
$pdf->Cell(35,8,'Tanggal Kembali',1,0,'C',1);
$pdf->SetX(215);
$pdf->Cell(35,8,'Status',1,0,'C',1);
$pdf->SetX(250);
$pdf->Cell(35,8,'Keterlambatan',1,0,'C',1);
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
$pdf->MultiCell(85,6,$column_judul,1,'L');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(110);
$pdf->MultiCell(35,6,$column_nama_peminjam,1,'L');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(145);
$pdf->MultiCell(35,6,$column_tgl_pinjam,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(180);
$pdf->MultiCell(35,6,$column_tgl_kembali,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(215);
$pdf->MultiCell(35,6,$column_status,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(250);
$pdf->MultiCell(35,6,$column_ket,1,'C');

$pdf->Output();
?>
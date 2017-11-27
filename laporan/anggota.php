<?php
include "../conn.php";
require('fpdf.php');

//Menampilkan data dari tabel di database

$result=mysql_query("SELECT * FROM data_anggota ORDER BY id ASC") or die(mysql_error());

//Inisiasi untuk membuat header kolom
$column_id = "";
$column_no_induk = "";
$column_nama = "";
$column_jk = "";
$column_kelas = "";
$column_alamat = "";


//For each row, add the field to the corresponding column
while($row = mysql_fetch_array($result))
{
    $id = $row["id"];
    $no_induk = $row["no_induk"];
    $nama = $row["nama"];
    $jk = $row["jk"];
    $kelas = $row["kelas"];
    $alamat = $row["alamat"];
    

    $column_id = $column_id.$id."\n";
    $column_no_induk = $column_no_induk.$no_induk."\n";
    $column_nama = $column_nama.$nama."\n";
    $column_jk = $column_jk.$jk."\n";
    $column_kelas = $column_kelas.$kelas."\n";
    $column_alamat = $column_alamat.$alamat."\n";
    

//Create a new PDF file
$pdf = new FPDF('L','mm',array(297,210)); //L For Landscape / P For Portrait
$pdf->AddPage();

//Menambahkan Gambar
//$pdf->Image('../foto/logo.png',10,10,-175);

$pdf->SetFont('Arial','B',13);
$pdf->Cell(125);
$pdf->Cell(30,10,'Data Anggota',0,0,'C');
$pdf->Ln(5);
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
$pdf->SetX(40);
$pdf->Cell(25,8,'ID Anggota',1,0,'C',1);
$pdf->SetX(65);
$pdf->Cell(25,8,'No Induk',1,0,'C',1);
$pdf->SetX(90);
$pdf->Cell(60,8,'Nama',1,0,'C',1);
$pdf->SetX(150);
$pdf->Cell(25,8,'Jenis Kelamin',1,0,'C',1);
$pdf->SetX(175);
$pdf->Cell(25,8,'Kelas',1,0,'C',1);
$pdf->SetX(200);
$pdf->Cell(60,8,'Alamat',1,0,'C',1);
$pdf->Ln();

//Table position, under Fields Name
$Y_Table_Position = 38;

//alamatw show the columns
$pdf->SetFont('Arial','',10);

$pdf->SetY($Y_Table_Position);
$pdf->SetX(40);
$pdf->MultiCell(25,6,$column_id,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(65);
$pdf->MultiCell(25,6,$column_no_induk,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(90);
$pdf->MultiCell(60,6,$column_nama,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(150);
$pdf->MultiCell(25,6,$column_jk,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(175);
$pdf->MultiCell(25,6,$column_kelas,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(200);
$pdf->MultiCell(60,6,$column_alamat,1,'C');

$pdf->Output();
?>

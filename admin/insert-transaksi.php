<?php
//mulai proses tambah data

//cek dahulu, jika tombol tambah di klik
if(isset($_POST['add'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('../conn.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
        $id = $_POST['id'];
        $judul = $_POST['judul'];
		$nama_peminjam= $_POST['nama_peminjam'];
		$tgl_pinjam=$_POST['tgl_pinjam'];
        $tgl_kembali = $_POST['tgl_kembali'];
        $status = $_POST['status'];
        $ket=$_POST['ket'];
	
	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$input = mysql_query("INSERT INTO trans_pinjam
(id,judul,nama_peminjam,tgl_pinjam,tgl_kembali,status,ket) VALUES('$id','$judul','$nama_peminjam','$tgl_pinjam','$tgl_kembali','$status','$ket')") or die(mysql_error());
	
	//jika query input sukses
	if($input){
		
		echo "<script>alert('Data Berhasil Disimpan'); window.location = 'transaksi.php'</script>";
		
	}else{
		
		echo "<script>alert('Data Gagal Disimpan'); window.location = 'input-transaksi.php'</script>";
		
	}
}
?>

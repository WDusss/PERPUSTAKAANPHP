<?php
//mulai proses tambah data

//cek dahulu, jika tombol tambah di klik
if(isset($_POST['add'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('../conn.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
        $id = $_POST['id'];
        $judul = $_POST['judul'];
		$pengarang= $_POST['pengarang'];
		$th_terbit=$_POST['th_terbit'];
        $penerbit = $_POST['penerbit'];
        $isbn = $_POST['isbn'];
        $kategori=$_POST['kategori'];
		$kode_klas=$_POST['kode_klas'];
        $jumlah_buku=$_POST['jumlah_buku'];
        $lokasi=$_POST['lokasi'];
        $asal=$_POST['asal'];
        $tgl_input=$_POST['tgl_input'];
	
	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$input = mysql_query("INSERT INTO data_buku
(id,judul,pengarang,th_terbit,penerbit,isbn,kategori,kode_klas,jumlah_buku,lokasi,asal,tgl_input) VALUES('$id','$judul','$pengarang','$th_terbit','$penerbit','$isbn','$kategori','$kode_klas','$jumlah_buku','$lokasi','$asal','$tgl_input')") or die(mysql_error());
	
	//jika query input sukses
	if($input){
		
		echo "<script>alert('Data Berhasil Disimpan'); window.location = 'buku.php'</script>";
		
	}else{
		
		echo "<script>alert('Data Gagal Disimpan'); window.location = 'input-buku.php'</script>";
		
	}
}
?>

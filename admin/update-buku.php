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
	
	//melakukan query dengan perintah UPDATE untuk memasukkan data ke database
	$update = mysql_query("UPDATE data_buku 
SET judul='$judul', pengarang='$pengarang',
th_terbit='$th_terbit',
penerbit='$penerbit',
isbn='$isbn',
kategori='$kategori',
kode_klas='$kode_klas',
jumlah_buku='$jumlah_buku',
lokasi='$lokasi',
asal='$asal',
tgl_input='$tgl_input' WHERE id='$id'") or die(mysql_error());
	
	//jika query input sukses
	if($update){
		
		echo "<script>alert('Data Berhasil Disimpan'); window.location = 'buku.php'</script>";
		
	}else{
		
		echo "<script>alert('Data Gagal Disimpan'); window.location = 'edit-buku.php'</script>";
		
	}
}
?>

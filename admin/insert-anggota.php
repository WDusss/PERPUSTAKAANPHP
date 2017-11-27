<?php
$namafolder="gambar_anggota/"; //tempat menyimpan file

include "../conn.php";

if (!empty($_FILES["nama_file"]["tmp_name"]))
{
	$jenis_gambar=$_FILES['nama_file']['type'];
        $id = $_POST['id'];
        $no_induk = $_POST['no_induk'];
		$nama= $_POST['nama'];
		$jk=$_POST['jk'];
        $kelas = $_POST['kelas'];
        $ttl = $_POST['ttl'];
        $alamat=$_POST['alamat'];
		
	if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/x-png")
	{			
		$gambar = $namafolder . basename($_FILES['nama_file']['name']);		
		if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambar)) {
			$sql="INSERT INTO data_anggota(id,no_induk,nama,jk,kelas,ttl,alamat,foto) VALUES
            ('$id','$no_induk','$nama','$jk','$kelas','$ttl','$alamat','$gambar')";
			$res=mysql_query($sql) or die (mysql_error());
			echo "<script>alert('Data Berhasil Ditambah!'); window.location = 'anggota.php'</script>".$gambar; 
		} else {
		   echo "<script>alert('Gambar gagal dikirim'); window.location = 'input-anggota.php'</script>";
		}
   } else {
		echo "<script>alert('Jenis gambar yang anda kirim salah. Harus .jpg .gif .png'); window.location = 'input-anggota.php'</script>";
   }
} else {
	echo "<script>alert('Anda belum memilih gambar'); window.location = 'input-anggota.php'</script>";
}

?>
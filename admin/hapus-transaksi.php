<?php
include "../conn.php";
$id = $_GET['kd'];

$query = mysql_query("DELETE FROM trans_pinjam WHERE id='$id'");
if ($query){
	echo "<script>alert('Data Berhasil dihapus!'); window.location = 'transaksi.php'</script>";	
} else {
	echo "<script>alert('Data Gagal dihapus!'); window.location = 'transaksi.php'</script>";	
}
?>
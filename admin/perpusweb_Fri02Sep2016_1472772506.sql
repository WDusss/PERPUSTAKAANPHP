DROP TABLE IF EXISTS admin;

CREATE TABLE `admin` (
  `user_id` int(2) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `gambar` varchar(30) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO admin VALUES("1","admin","admin","Firdaus Pandu Aji","gambar_admin/avatar5.png");
INSERT INTO admin VALUES("2","user","user","WeDusssGembel","gambar_admin/26115.jpg");



DROP TABLE IF EXISTS data_anggota;

CREATE TABLE `data_anggota` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `no_induk` varchar(5) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `jk` varchar(2) NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `foto` varchar(75) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO data_anggota VALUES("1","15901","AGUNG SANTOSO","L","X-1","Bogor, 4 Agustus 1997","Depok, Jawa Barat","gambar_anggota/26115.jpg");
INSERT INTO data_anggota VALUES("2","15902","AHMAD MUCHTADIN","L","XI-1","Bekasi, 27 Januari 1998","Bogor","gambar_anggota/Assy enggine.jpg");
INSERT INTO data_anggota VALUES("3","15903","HAMRI AJAH","L","XII-2","Cikarang, 30 Januari 1997","Rawa Bangkong, Cikarang Timur","gambar_anggota/009.jpg");
INSERT INTO data_anggota VALUES("4","15904","ANI ANILAH","P","X-4","Cikarang, 20 Januari 1992","Sasak Bali, Sukatani","gambar_anggota/c.jpg");
INSERT INTO data_anggota VALUES("5","15905","RYAN SUPRIATNA","L","XII-4","Depok, 9 Agustus 1995","Kalisari, Jakarta Timur","gambar_anggota/l.jpg");
INSERT INTO data_anggota VALUES("6","15906","LATHIFAH","P","XII-5","Bekasi, 26 Juli 1997","Tanggerang","gambar_anggota/1098.jpg");
INSERT INTO data_anggota VALUES("7","15907","CANTIKA PUJIASTUTI","P","XI-3","Karawang, 11 April 1998","Tambelang, Bekasi","gambar_anggota/user.jpg");
INSERT INTO data_anggota VALUES("8","15908","SEBASTIAN HADI PRASETYO","L","XI-2","Bekasi, 17 Agustus 1990","Tambelang, Bekasi","gambar_anggota/photo23.jpg");
INSERT INTO data_anggota VALUES("9","15909","RAMA AGUS SUPRIYADI","L","X-3","Bogor, 29 Juli 1994","Cikarang, Bekasi","gambar_anggota/l.jpg");
INSERT INTO data_anggota VALUES("10","15910","FIRDAUS PANDU","L","XII-1","Jakarta, 22 Maret 1996","Depok, Jawa Barat","gambar_anggota/26115.jpg");



DROP TABLE IF EXISTS data_buku;

CREATE TABLE `data_buku` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `judul` varchar(250) NOT NULL,
  `pengarang` varchar(250) NOT NULL,
  `th_terbit` varchar(4) NOT NULL,
  `penerbit` varchar(250) NOT NULL,
  `isbn` varchar(25) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `kode_klas` varchar(20) NOT NULL,
  `jumlah_buku` int(2) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `asal` varchar(50) NOT NULL,
  `tgl_input` varchar(75) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `judul` (`judul`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO data_buku VALUES("1","Membangun Toko Online Dengan PHP dan MySQL","Hakko ","2015"," Sukses Media","QWERT122345566","1300","X-TAMBAHAN","10","Rak A1","Pembelian","2015-10-10");
INSERT INTO data_buku VALUES("2","Aplikasi Penggajian Karyawan dengan PHP","Richard","2015","Sukses media","QWERT1232446","1300","-- Pilih Salah Satu ","10","Rak A2","-- Pilih Salah Satu --","2015-10-10");
INSERT INTO data_buku VALUES("3","Membangun Aplikasi Perpustakaan Berbasis Web","Richard","2015","Sukses media","QWERT12234985","1300","XII-TAMBAHAN","10","Rak A2","Pembelian","2015-10-10");
INSERT INTO data_buku VALUES("4","Cara Belajar PHP dan MySQLi","WeDusss","2015","Firdaus Pandu","QWERT812471275127","Education","X-UTAMA","2","Rak A2","Pembelian","2016-08-30");



DROP TABLE IF EXISTS pengunjung;

CREATE TABLE `pengunjung` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `jk` varchar(2) NOT NULL,
  `kelas` varchar(17) NOT NULL,
  `perlu1` varchar(50) NOT NULL,
  `cari` varchar(255) NOT NULL,
  `saran` varchar(255) NOT NULL,
  `tgl_kunjung` date NOT NULL,
  `jam_kunjung` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO pengunjung VALUES("1","Firdaus Pandu Aji","L","XII-1","Mencari Buku","Buku tentang PHP","Sudah Baik","2016-09-02","05:57:59");
INSERT INTO pengunjung VALUES("2","Rio Heryanto","L","X-1","Ingin Membaca Buku","Pelajaran MySQL","Tidak ada","2016-09-02","05:58:52");
INSERT INTO pengunjung VALUES("3","Reni Rahma","P","XI-4","Mencari Buku","PHP dan MySQLi","Tidak ada","2016-09-02","06:03:22");
INSERT INTO pengunjung VALUES("4","Gita Nursabila","P","XI-5","Pinjam Buku","Boostrap","Tidak ada","2016-09-02","06:04:14");



DROP TABLE IF EXISTS trans_pinjam;

CREATE TABLE `trans_pinjam` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `judul` varchar(250) NOT NULL,
  `nama_peminjam` varchar(100) NOT NULL,
  `tgl_pinjam` varchar(15) NOT NULL,
  `tgl_kembali` varchar(15) NOT NULL,
  `status` varchar(20) NOT NULL,
  `ket` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `judul` (`judul`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO trans_pinjam VALUES("1","Cara Belajar PHP dan MySQLi","WeDusss","18 Agustus 2016","25 Agustus 2016","Kembali","2 Hari");
INSERT INTO trans_pinjam VALUES("2","Membangun Toko Online Dengan PHP dan MySQL","Firdaus Pandu","20 Agustus 2016","27 Agustus 2016","Belum Kembali","0 Hari");
INSERT INTO trans_pinjam VALUES("3"," Aplikasi Penggajian Karyawan dengan PHP","John","20 Agustus 2016","27 Agustus 2016","Belum Kembali","2 Hari");




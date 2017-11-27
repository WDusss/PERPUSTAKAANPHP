-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2016 at 06:40 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpusweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(2) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `gambar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `username`, `password`, `fullname`, `gambar`) VALUES
(1, 'admin', 'admin', 'Firdaus Pandu Aji', 'gambar_admin/avatar5.png'),
(2, 'user', 'user', 'WeDusssGembel', 'gambar_admin/26115.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `data_anggota`
--

CREATE TABLE `data_anggota` (
  `id` int(4) NOT NULL,
  `no_induk` varchar(5) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `jk` varchar(2) NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `foto` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_anggota`
--

INSERT INTO `data_anggota` (`id`, `no_induk`, `nama`, `jk`, `kelas`, `ttl`, `alamat`, `foto`) VALUES
(1, '15901', 'AGUNG SANTOSO', 'L', 'X-1', 'Bogor, 4 Agustus 1997', 'Depok, Jawa Barat', 'gambar_anggota/26115.jpg'),
(2, '15902', 'AHMAD MUCHTADIN', 'L', 'XI-1', 'Bekasi, 27 Januari 1998', 'Bogor', 'gambar_anggota/Assy enggine.jpg'),
(3, '15903', 'HAMRI AJAH', 'L', 'XII-2', 'Cikarang, 30 Januari 1997', 'Rawa Bangkong, Cikarang Timur', 'gambar_anggota/009.jpg'),
(4, '15904', 'ANI ANILAH', 'P', 'X-4', 'Cikarang, 20 Januari 1992', 'Sasak Bali, Sukatani', 'gambar_anggota/c.jpg'),
(5, '15905', 'RYAN SUPRIATNA', 'L', 'XII-4', 'Depok, 9 Agustus 1995', 'Kalisari, Jakarta Timur', 'gambar_anggota/l.jpg'),
(6, '15906', 'LATHIFAH', 'P', 'XII-5', 'Bekasi, 26 Juli 1997', 'Tanggerang', 'gambar_anggota/1098.jpg'),
(7, '15907', 'CANTIKA PUJIASTUTI', 'P', 'XI-3', 'Karawang, 11 April 1998', 'Tambelang, Bekasi', 'gambar_anggota/user.jpg'),
(8, '15908', 'SEBASTIAN HADI PRASETYO', 'L', 'XI-2', 'Bekasi, 17 Agustus 1990', 'Tambelang, Bekasi', 'gambar_anggota/photo23.jpg'),
(9, '15909', 'RAMA AGUS SUPRIYADI', 'L', 'X-3', 'Bogor, 29 Juli 1994', 'Cikarang, Bekasi', 'gambar_anggota/l.jpg'),
(10, '15910', 'FIRDAUS PANDU', 'L', 'XII-1', 'Jakarta, 22 Maret 1996', 'Depok, Jawa Barat', 'gambar_anggota/26115.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `data_buku`
--

CREATE TABLE `data_buku` (
  `id` int(5) NOT NULL,
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
  `tgl_input` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_buku`
--

INSERT INTO `data_buku` (`id`, `judul`, `pengarang`, `th_terbit`, `penerbit`, `isbn`, `kategori`, `kode_klas`, `jumlah_buku`, `lokasi`, `asal`, `tgl_input`) VALUES
(1, 'Membangun Toko Online Dengan PHP dan MySQL', 'Hakko ', '2015', ' Sukses Media', 'QWERT122345566', '1300', 'X-TAMBAHAN', 10, 'Rak A1', 'Pembelian', '2015-10-10'),
(2, 'Aplikasi Penggajian Karyawan dengan PHP', 'Richard', '2015', 'Sukses media', 'QWERT1232446', '1300', '-- Pilih Salah Satu ', 10, 'Rak A2', '-- Pilih Salah Satu --', '2015-10-10'),
(3, 'Membangun Aplikasi Perpustakaan Berbasis Web', 'Richard', '2015', 'Sukses media', 'QWERT12234985', '1300', 'XII-TAMBAHAN', 10, 'Rak A2', 'Pembelian', '2015-10-10'),
(4, 'Cara Belajar PHP dan MySQLi', 'WeDusss', '2015', 'Firdaus Pandu', 'QWERT812471275127', 'Education', 'X-UTAMA', 2, 'Rak A2', 'Pembelian', '2016-08-30');

-- --------------------------------------------------------

--
-- Table structure for table `pengunjung`
--

CREATE TABLE `pengunjung` (
  `id` int(6) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jk` varchar(2) NOT NULL,
  `kelas` varchar(17) NOT NULL,
  `perlu1` varchar(50) NOT NULL,
  `cari` varchar(255) NOT NULL,
  `saran` varchar(255) NOT NULL,
  `tgl_kunjung` date NOT NULL,
  `jam_kunjung` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengunjung`
--

INSERT INTO `pengunjung` (`id`, `nama`, `jk`, `kelas`, `perlu1`, `cari`, `saran`, `tgl_kunjung`, `jam_kunjung`) VALUES
(1, 'Firdaus Pandu Aji', 'L', 'XII-1', 'Mencari Buku', 'Buku tentang PHP', 'Sudah Baik', '2016-09-02', '05:57:59'),
(2, 'Rio Heryanto', 'L', 'X-1', 'Ingin Membaca Buku', 'Pelajaran MySQL', 'Tidak ada', '2016-09-02', '05:58:52'),
(3, 'Reni Rahma', 'P', 'XI-4', 'Mencari Buku', 'PHP dan MySQLi', 'Tidak ada', '2016-09-02', '06:03:22'),
(4, 'Gita Nursabila', 'P', 'XI-5', 'Pinjam Buku', 'Boostrap', 'Tidak ada', '2016-09-02', '06:04:14');

-- --------------------------------------------------------

--
-- Table structure for table `trans_pinjam`
--

CREATE TABLE `trans_pinjam` (
  `id` int(5) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `nama_peminjam` varchar(100) NOT NULL,
  `tgl_pinjam` varchar(15) NOT NULL,
  `tgl_kembali` varchar(15) NOT NULL,
  `status` varchar(20) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trans_pinjam`
--

INSERT INTO `trans_pinjam` (`id`, `judul`, `nama_peminjam`, `tgl_pinjam`, `tgl_kembali`, `status`, `ket`) VALUES
(1, 'Cara Belajar PHP dan MySQLi', 'WeDusss', '18 Agustus 2016', '25 Agustus 2016', 'Kembali', '2 Hari'),
(2, 'Membangun Toko Online Dengan PHP dan MySQL', 'Firdaus Pandu', '20 Agustus 2016', '27 Agustus 2016', 'Belum Kembali', '0 Hari'),
(3, ' Aplikasi Penggajian Karyawan dengan PHP', 'John', '20 Agustus 2016', '27 Agustus 2016', 'Belum Kembali', '2 Hari');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `data_anggota`
--
ALTER TABLE `data_anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_buku`
--
ALTER TABLE `data_buku`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `judul` (`judul`);

--
-- Indexes for table `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trans_pinjam`
--
ALTER TABLE `trans_pinjam`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `judul` (`judul`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `data_anggota`
--
ALTER TABLE `data_anggota`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `data_buku`
--
ALTER TABLE `data_buku`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pengunjung`
--
ALTER TABLE `pengunjung`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `trans_pinjam`
--
ALTER TABLE `trans_pinjam`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

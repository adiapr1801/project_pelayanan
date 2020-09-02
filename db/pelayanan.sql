-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 29, 2020 at 10:37 AM
-- Server version: 5.7.31-0ubuntu0.18.04.1
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pelayanan`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE `daftar` (
  `id` int(50) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `harga` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar`
--

INSERT INTO `daftar` (`id`, `nama`, `harga`) VALUES
(4, 'Pasang Infus Printer', 150000),
(5, 'service cartridge', 60000),
(6, 'Refill Tinta (Harga Mulai)', 35000),
(7, 'Ganti Cartridge (Harga Mulai)', 235000),
(8, 'Service Reset', 85000);

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id` int(11) NOT NULL,
  `nama_gambar` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id`, `nama_gambar`) VALUES
(14, '1.jpg'),
(15, '2.jpg'),
(16, '3.jpg'),
(17, '4.jpg'),
(18, 'ii.jpg'),
(19, 'KOMUNIKASI EFEKTIF 2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `no_identitas` varchar(225) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `no_hp` varchar(225) NOT NULL,
  `barang` varchar(20) NOT NULL,
  `keteragan` varchar(30) NOT NULL,
  `status` int(1) NOT NULL,
  `teknisi` varchar(20) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `biaya` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`no_identitas`, `nama`, `alamat`, `no_hp`, `barang`, `keteragan`, `status`, `teknisi`, `tanggal`, `biaya`) VALUES
('123344', 'agus', 'sragen', '089777366', '', '', 0, '', '', 0),
('3222111', 'mustofa', 'jebres', '0897777666888', '', '', 0, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pelangganhadir`
--

CREATE TABLE `pelangganhadir` (
  `id` int(3) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `barang` varchar(20) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `status` varchar(25) NOT NULL,
  `teknisi` varchar(20) NOT NULL,
  `tanggal` varchar(11) NOT NULL,
  `biaya` int(10) NOT NULL,
  `invoice` varchar(20) NOT NULL,
  `tglkeluar` varchar(20) NOT NULL,
  `service` int(10) NOT NULL,
  `sukucadang` int(10) NOT NULL,
  `diskon` int(10) NOT NULL,
  `total` int(10) NOT NULL,
  `pengambil` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelangganhadir`
--

INSERT INTO `pelangganhadir` (`id`, `nama`, `alamat`, `no_hp`, `barang`, `keterangan`, `status`, `teknisi`, `tanggal`, `biaya`, `invoice`, `tglkeluar`, `service`, `sukucadang`, `diskon`, `total`, `pengambil`) VALUES
(11, 'Maria', 'Jepang', '087715417986', 'kkkk', 'jkk', 'Selesai', 'SOPINGI', '23-08-2020 ', 90000, '10301120200823', '2020-08-28', 10000, 540000, 12000, 538000, 'suhar'),
(12, 'fuhadin', 'jogja tengah', '09655432134', 'Epson777', 'Hilang dicuri', 'Diambil', 'oki', '24-08-2020 ', 90000, '05011720200824', '2020-08-28', 89000, 77, 88, 88989, 'ppp'),
(16, 'lkkk', 'kkk', '999', 'oiopii', '99l;', 'Selesai', 'oki', '28-08-2020', 10000, '09004620200828', '', 0, 0, 0, 0, ''),
(18, 'Sugiman', 'JogjaTengah', '082214655851', 'LaptopPrint', 'Hilang Dicuri', 'Diambil', 'SOPINGI', '29-08-2020', 10000, '09392920200829', '2020-08-29', 10000, 5000, 2000, 13000, 'Sugimin'),
(19, 'marinem', 'Jalan merdeka', '0987654433212', 'Aqua', 'Pecah', 'Proses', 'SOPINGI', '29-08-2020', 10000, '09441520200829', '', 0, 0, 0, 0, ''),
(20, 'Apriliyo', 'Wonogiri', '123456678', 'gelas', 'pecah', 'Dalam Antrean', 'Adi', '29-08-2020', 10000, '10261220200829', '', 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `id_riwayat` int(10) NOT NULL,
  `no_pelanggan` varchar(225) NOT NULL,
  `no_transaksi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `riwayat`
--

INSERT INTO `riwayat` (`id_riwayat`, `no_pelanggan`, `no_transaksi`) VALUES
(9, '3222111', '20200630231834'),
(10, '123344', '20200704195249'),
(11, '123344', '20200722031848'),
(12, '123344', '20200723205538'),
(13, '123344', '20200821225604'),
(14, '123344', '20200821225718'),
(15, '123344', '20200821225722'),
(16, '123344', '20200821225747'),
(17, '3222111', '20200822164944');

-- --------------------------------------------------------

--
-- Table structure for table `st_user`
--

CREATE TABLE `st_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `st_user`
--

INSERT INTO `st_user` (`id`, `nama`, `username`, `password`) VALUES
(2, 'Sigit', 'staff', 'staff');

-- --------------------------------------------------------

--
-- Table structure for table `sup_user`
--

CREATE TABLE `sup_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sup_user`
--

INSERT INTO `sup_user` (`id`, `nama`, `username`, `password`) VALUES
(9, 'Ary Syahfrudin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(4) NOT NULL,
  `invoice` varchar(30) NOT NULL,
  `tanggal_masuk` varchar(11) NOT NULL,
  `tanggal_keluar` varchar(11) NOT NULL,
  `servis` int(9) NOT NULL,
  `sukucadang` int(9) NOT NULL,
  `diskon` int(9) NOT NULL,
  `total` int(9) NOT NULL,
  `pengambil` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teknisi`
--

CREATE TABLE `teknisi` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teknisi`
--

INSERT INTO `teknisi` (`id`, `nama`, `username`, `password`) VALUES
(1, 'oki', 'teknisi1', 'teknisi1'),
(2, 'SOPINGI', 'teknisi', 'teknisi'),
(3, 'Adi', 'adi', 'adi');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `invoice` varchar(50) NOT NULL,
  `tanggal_masuk` date DEFAULT NULL,
  `nama_barang` varchar(50) DEFAULT NULL,
  `estimasi` varchar(50) DEFAULT NULL,
  `nama_pemilik` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `no_hp` varchar(50) DEFAULT NULL,
  `keluhan` varchar(100) DEFAULT NULL,
  `kelengkapan` varchar(100) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `biaya` int(25) DEFAULT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `nama_pengambil` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`invoice`, `tanggal_masuk`, `nama_barang`, `estimasi`, `nama_pemilik`, `alamat`, `no_hp`, `keluhan`, `kelengkapan`, `keterangan`, `status`, `biaya`, `tanggal_selesai`, `nama_pengambil`) VALUES
('20200630231834', '2020-06-30', 'Epson L210', '4 hari', 'mustofa', 'jebres', '0897777666888', 'Hasil Bergaris', 'kardus dan kabel power', 'lama tidak dipakai', 'perlu ganti printhead', 850000, '2020-08-21', 'adi'),
('20200704195249', '2020-07-04', 'epson l120', '7 hari', 'agus', 'sragen', '089777366', 'cek hasil', 'kardus dan kabel power', '-', 'Pemeriksaan Awal', 90000, '2020-07-22', 'doni'),
('20200722031848', '2020-07-22', 'mp287', '3 hari', 'agus', 'sragen', '089777366', 'hasil', 'Kabel power', 'habis isi tinta', 'menunggu', 90000, '2020-08-23', 'adi'),
('20200723205538', '2020-07-23', 'mp287', '3 hari', 'agus', 'sragen', '089777366', 'hasil', 'Kabel power', 'habis isi tinta', 'Pemeriksaan Awal', 90000, '2020-07-23', 'andi'),
('20200821225604', '2020-08-21', 'Koirul', '5 hari', 'agus', 'sragen', '089777366', 'Sakit kepala', 'Fullset no hf', 'Mati mendadak', 'Pemeriksaan Awal', 10000, '0000-00-00', ''),
('20200821225718', '2020-08-21', 'opop', 'kkk', 'agus', 'sragen', '089777366', 'kkk', 'kkk', 'kkk', 'Pemeriksaan Awal', 99999, '0000-00-00', ''),
('20200821225722', '2020-08-21', 'opop', 'kkk', 'agus', 'sragen', '089777366', 'kkk', 'kkk', 'kkk', 'Pemeriksaan Awal', 99999, '0000-00-00', ''),
('20200821225747', '2020-08-21', 'ppp', 'uuu', 'agus', 'sragen', '089777366', 'iii', 'uuu', 'uuu', 'Pemeriksaan Awal', 888, '0000-00-00', ''),
('20200822164944', '2020-08-22', 'meja', '9', 'mustofa', 'jebres', '0897777666888', 'sakit', 'hhh', 'hhh', 'Pemeriksaan Awal', 9999, '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tulisan`
--

CREATE TABLE `tulisan` (
  `id` int(5) NOT NULL,
  `nama_web` varchar(25) DEFAULT NULL,
  `url` varchar(25) DEFAULT NULL,
  `telepon` varchar(25) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tulisan`
--

INSERT INTO `tulisan` (`id`, `nama_web`, `url`, `telepon`, `alamat`) VALUES
(1, 'Manxi Printer', 'www.tokoprintermurah.com', '085100512541', 'Jl. Petoran 18, Jebres, Surakarta');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`no_identitas`);

--
-- Indexes for table `pelangganhadir`
--
ALTER TABLE `pelangganhadir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`id_riwayat`),
  ADD KEY `no_pelanggan` (`no_pelanggan`),
  ADD KEY `no_transaksi` (`no_transaksi`);

--
-- Indexes for table `st_user`
--
ALTER TABLE `st_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sup_user`
--
ALTER TABLE `sup_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `teknisi`
--
ALTER TABLE `teknisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`invoice`);

--
-- Indexes for table `tulisan`
--
ALTER TABLE `tulisan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar`
--
ALTER TABLE `daftar`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `pelangganhadir`
--
ALTER TABLE `pelangganhadir`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `id_riwayat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `st_user`
--
ALTER TABLE `st_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sup_user`
--
ALTER TABLE `sup_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_transaksi` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teknisi`
--
ALTER TABLE `teknisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tulisan`
--
ALTER TABLE `tulisan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD CONSTRAINT `riwayat_ibfk_1` FOREIGN KEY (`no_pelanggan`) REFERENCES `pelanggan` (`no_identitas`),
  ADD CONSTRAINT `riwayat_ibfk_2` FOREIGN KEY (`no_transaksi`) REFERENCES `transaksi` (`invoice`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2023 at 05:47 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trouble_ticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `permintaan`
--

CREATE TABLE `permintaan` (
  `No_Permintaan` varchar(20) NOT NULL,
  `Tanggal` date NOT NULL,
  `Level_Urgency` varchar(20) NOT NULL,
  `Jenis_Permintaan` varchar(50) NOT NULL,
  `Uraian_Kebutuhan` varchar(200) NOT NULL,
  `Benefit` text NOT NULL,
  `Lampiran` text NOT NULL,
  `Gambar_Lampiran` varchar(100) NOT NULL,
  `Nama_User` varchar(50) NOT NULL,
  `Divisi` text NOT NULL,
  `NPK` varchar(20) NOT NULL,
  `Business_Impact` varchar(10) DEFAULT NULL,
  `Kesulitan_Pengerjaan` varchar(10) DEFAULT NULL,
  `Estimasi_Waktu1` date DEFAULT NULL,
  `Estimasi_Waktu2` date DEFAULT NULL,
  `Dikerjakan_Oleh` varchar(50) DEFAULT NULL,
  `Analisa_Dampak` varchar(500) DEFAULT NULL,
  `Status_Permintaan` varchar(10) DEFAULT NULL,
  `Keterangan_Diterima` varchar(500) DEFAULT NULL,
  `ulasan_implementasi` varchar(20) DEFAULT NULL,
  `Penilaian_pengerjaan` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `permintaan`
--

INSERT INTO `permintaan` (`No_Permintaan`, `Tanggal`, `Level_Urgency`, `Jenis_Permintaan`, `Uraian_Kebutuhan`, `Benefit`, `Lampiran`, `Gambar_Lampiran`, `Nama_User`, `Divisi`, `NPK`, `Business_Impact`, `Kesulitan_Pengerjaan`, `Estimasi_Waktu1`, `Estimasi_Waktu2`, `Dikerjakan_Oleh`, `Analisa_Dampak`, `Status_Permintaan`, `Keterangan_Diterima`, `ulasan_implementasi`, `Penilaian_pengerjaan`) VALUES
('00001/HELP/2020', '2020-10-19', 'Tinggi', 'Hardware', 'PC mati hdd nya rusak', 'kalo komputer mati tim kami tidak bisa melanjutkan pekerjaan', 'Sfesifikasi/Gambar Desain', '191020151147.jpg', 'user', 'mis', '123', 'Tinggi', 'Sedang', '2020-10-20', '2020-10-22', 'Jaenal Aripin', 'Tes aja', 'Diterima', 'oke kerjakan', 'Lumayan lah', 'Sedang'),
('00002/HELP/2023', '2023-03-08', 'Sedang', 'Software', 'update software', 'agar aplikasi kompatibel', 'Lain-lain', '070323202249', 'user', 'IT', '123', 'Sedang', 'Sedang', '2023-03-08', '2023-03-09', 'ikhsan', 'berdampak ringan terhadap pekerjaan karyawan', 'Diterima', 'Accepted', 'Mantap', 'Puas'),
('00003/HELP/2023', '2023-03-08', 'Tinggi', 'Aplikasi (Pembuatan/Customize)', 'upgrade hardware', 'lebih lancar bermain game', 'Budget/Circulait', '070323202321', 'user', 'IT', '123', 'Rendah', 'Rendah', '2023-03-08', '2023-03-08', 'ikhsan', 'tidak ada sangkut pautnya dengan pekerjaan kantor', 'Ditolak', NULL, 'Karyawan tidak Hepii', 'Tidak '),
('00004/HELP/2023', '2023-03-08', 'Sedang', 'Acessories', 'kabel usb', 'memindahkan data ', 'Sfesifikasi/Gambar Desain', '070323211606', 'user', 'SDM', '123', 'Sedang', 'Rendah', '2023-03-06', '2023-03-07', 'omar', 'membantu mempercepat transfer file', 'Ditolak', NULL, NULL, NULL),
('00005/HELP/2023', '2023-03-08', 'Tinggi', 'Software', 'update aplikasi 3d desain', 'membantu pekerjaan', 'Lain-lain', '070323211643', 'user', 'Asset', '123', 'Tinggi', 'Rendah', '2023-03-02', '2023-03-02', 'abdul', 'user tidak bisa bekerja jika tidak segera ditanggapi', 'Diterima', 'Accepted', 'Terimakasih', 'Puas'),
('00006/HELP/2023', '2023-03-08', 'Tinggi', 'Hardware', 'upgrade ram', 'meringankan kinerja komputer', 'Proposal', '070323211713', 'user', 'SDM', '123', 'Sedang', 'Sedang', '2023-03-05', '2023-03-05', 'abdul', 'mempercepat kinerja komputer karyawan', 'Ditolak', NULL, 'kurang ramah', 'Sedang'),
('00007/HELP/2023', '2023-03-08', 'Tinggi', 'Hardware', 'mouse berkendala perlu ganti baru', 'meneruskan pekerjaan', 'Proposal', '070323211801', 'user', 'SDM', '123', 'Sedang', 'Rendah', '2023-02-28', '2023-03-02', 'abdul', 'mouse yang lama memperlambat kinerja user', 'Diterima', 'Accepted', 'Terima Kasih', 'Puas'),
('00008/HELP/2023', '2023-03-08', 'Sedang', 'Aplikasi (Pembuatan/Customize)', 'update aplikasi pemetaan', 'kebutuhan kerja', 'Memo', '070323212002', 'user', 'Asset', '123', 'Sedang', 'Sedang', '2023-03-06', '2023-03-06', 'ikhsan', 'aplikasi perlu diupdate berkala karena kebutuhan mendesak', 'Diterima', 'Accepted', 'Terima Kasih', 'Puas'),
('00009/HELP/2023', '2023-03-08', 'Tinggi', 'Hardware', 'ganti monitor', 'monitor lama bermasalah dan bergaris', 'Budget/Circulait', '070323212031', 'user', 'IT', '123', 'Sedang', 'Rendah', '2023-03-01', '2023-03-02', 'omar', 'setelah pengecekan ternyata monitor masih berfungsi dengan semestinya', 'Ditolak', NULL, 'saya harap dapat dip', 'Sedang'),
('00010/HELP/2023', '2023-03-08', 'Sedang', 'Acessories', 'kipas pendingin laptop', 'mendinginkan laptop yang sering panas ketika digunakan', 'Sfesifikasi/Gambar Desain', '070323212135', 'user', 'IT', '123', 'Rendah', 'Rendah', '2023-03-04', '2023-03-06', 'abdul', '', 'Ditolak', NULL, 'tetapi hal ini berka', 'Tidak '),
('00011/HELP/2023', '2023-03-08', 'Sedang', 'Hardware', 'ganti komputer', 'komputer lama lemot', 'Sfesifikasi/Gambar Desain', '070323213619', 'user', 'IT', '123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('00012/HELP/2023', '2023-03-08', 'Sedang', 'Software', 'update aplikasi', 'melancarkan kerjaan', 'Memo', '080323015619', 'user', 'IT', '123', 'Sedang', 'Sedang', '2023-03-08', '2023-03-08', 'khalish', 'berdampak ringan', 'Diterima', 'sesuai', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permintaan_diterima`
--

CREATE TABLE `permintaan_diterima` (
  `No_Permintaan` varchar(20) NOT NULL,
  `Tanggal` date NOT NULL,
  `Level_Urgency` varchar(20) NOT NULL,
  `Jenis_Permintaan` varchar(50) NOT NULL,
  `Uraian_Kebutuhan` varchar(200) NOT NULL,
  `Benefit` text NOT NULL,
  `Lampiran` text NOT NULL,
  `Gambar_Lampiran` varchar(50) NOT NULL,
  `Nama_User` varchar(50) NOT NULL,
  `Divisi` text NOT NULL,
  `NPK` varchar(20) NOT NULL,
  `Business_Impact` varchar(10) DEFAULT NULL,
  `Kesulitan_Pengerjaan` varchar(10) DEFAULT NULL,
  `Estimasi_Waktu1` date DEFAULT NULL,
  `Estimasi_Waktu2` date DEFAULT NULL,
  `Dikerjakan_Oleh` varchar(50) DEFAULT NULL,
  `Analisa_Dampak` varchar(500) DEFAULT NULL,
  `Status_Permintaan` varchar(10) DEFAULT NULL,
  `Keterangan_Diterima` varchar(500) DEFAULT NULL,
  `Penilaian_pengerjaan` varchar(10) DEFAULT NULL,
  `ulasan_implementasi` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `permintaan_diterima`
--

INSERT INTO `permintaan_diterima` (`No_Permintaan`, `Tanggal`, `Level_Urgency`, `Jenis_Permintaan`, `Uraian_Kebutuhan`, `Benefit`, `Lampiran`, `Gambar_Lampiran`, `Nama_User`, `Divisi`, `NPK`, `Business_Impact`, `Kesulitan_Pengerjaan`, `Estimasi_Waktu1`, `Estimasi_Waktu2`, `Dikerjakan_Oleh`, `Analisa_Dampak`, `Status_Permintaan`, `Keterangan_Diterima`, `Penilaian_pengerjaan`, `ulasan_implementasi`) VALUES
('00001/HELP/2020', '2020-10-19', 'Tinggi', 'Hardware', 'PC mati hdd nya rusak', 'kalo komputer mati tim kami tidak bisa melanjutkan pekerjaan', 'Sfesifikasi/Gambar Desain', '', 'user', 'mis', '123', 'Tinggi', 'Sedang', '2020-10-20', '2020-10-22', 'Jaenal Aripin', 'Tes aja', 'Diterima', 'oke kerjakan', NULL, NULL),
('00002/HELP/2023', '2023-03-08', 'Sedang', 'Software', 'update software', 'agar aplikasi kompatibel', 'Lain-lain', '', 'user', 'IT', '123', 'Sedang', 'Sedang', '2023-03-08', '2023-03-09', 'ikhsan', 'berdampak ringan terhadap pekerjaan karyawan', 'Diterima', 'Accepted', NULL, NULL),
('00005/HELP/2023', '2023-03-08', 'Tinggi', 'Software', 'update aplikasi 3d desain', 'membantu pekerjaan', 'Lain-lain', '', 'user', 'Asset', '123', 'Tinggi', 'Rendah', '2023-03-02', '2023-03-02', 'abdul', 'user tidak bisa bekerja jika tidak segera ditanggapi', 'Diterima', 'Accepted', NULL, NULL),
('00007/HELP/2023', '2023-03-08', 'Tinggi', 'Hardware', 'mouse berkendala perlu ganti baru', 'meneruskan pekerjaan', 'Proposal', '', 'user', 'SDM', '123', 'Sedang', 'Rendah', '2023-02-28', '2023-03-02', 'abdul', 'mouse yang lama memperlambat kinerja user', 'Diterima', 'Accepted', NULL, NULL),
('00008/HELP/2023', '2023-03-08', 'Sedang', 'Aplikasi (Pembuatan/Customize)', 'update aplikasi pemetaan', 'kebutuhan kerja', 'Memo', '', 'user', 'Asset', '123', 'Sedang', 'Sedang', '2023-03-06', '2023-03-06', 'ikhsan', 'aplikasi perlu diupdate berkala karena kebutuhan mendesak', 'Diterima', 'Accepted', NULL, NULL),
('00012/HELP/2023', '2023-03-08', 'Sedang', 'Software', 'update aplikasi', 'melancarkan kerjaan', 'Memo', '', 'user', 'IT', '123', 'Sedang', 'Sedang', '2023-03-08', '2023-03-08', 'khalish', 'berdampak ringan', 'Diterima', 'sesuai', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permintaan_ditolak`
--

CREATE TABLE `permintaan_ditolak` (
  `No_Permintaan` varchar(20) NOT NULL,
  `Tanggal` date NOT NULL,
  `Level_Urgency` varchar(20) NOT NULL,
  `Jenis_Permintaan` varchar(50) NOT NULL,
  `Uraian_Kebutuhan` varchar(200) NOT NULL,
  `Benefit` text NOT NULL,
  `Lampiran` text NOT NULL,
  `Gambar_Lampiran` varchar(50) NOT NULL,
  `Nama_User` varchar(50) NOT NULL,
  `Divisi` text NOT NULL,
  `NPK` varchar(20) NOT NULL,
  `Business_Impact` varchar(10) DEFAULT NULL,
  `Kesulitan_Pengerjaan` varchar(10) DEFAULT NULL,
  `Estimasi_Waktu1` date DEFAULT NULL,
  `Estimasi_Waktu2` date DEFAULT NULL,
  `Dikerjakan_Oleh` varchar(50) DEFAULT NULL,
  `Analisa_Dampak` varchar(500) DEFAULT NULL,
  `Status_Permintaan` varchar(10) DEFAULT NULL,
  `Keterangan_Diterima` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `permintaan_ditolak`
--

INSERT INTO `permintaan_ditolak` (`No_Permintaan`, `Tanggal`, `Level_Urgency`, `Jenis_Permintaan`, `Uraian_Kebutuhan`, `Benefit`, `Lampiran`, `Gambar_Lampiran`, `Nama_User`, `Divisi`, `NPK`, `Business_Impact`, `Kesulitan_Pengerjaan`, `Estimasi_Waktu1`, `Estimasi_Waktu2`, `Dikerjakan_Oleh`, `Analisa_Dampak`, `Status_Permintaan`, `Keterangan_Diterima`) VALUES
('00003/HELP/2023', '2023-03-08', 'Tinggi', 'Aplikasi (Pembuatan/Customize)', 'upgrade hardware', 'lebih lancar bermain game', 'Budget/Circulait', '', 'user', 'IT', '123', 'Rendah', 'Rendah', '2023-03-08', '2023-03-08', 'ikhsan', 'tidak ada sangkut pautnya dengan pekerjaan kantor', 'Ditolak', NULL),
('00004/HELP/2023', '2023-03-08', 'Sedang', 'Acessories', 'kabel usb', 'memindahkan data ', 'Sfesifikasi/Gambar Desain', '', 'user', 'SDM', '123', 'Sedang', 'Rendah', '2023-03-06', '2023-03-07', 'omar', 'membantu mempercepat transfer file', 'Ditolak', NULL),
('00006/HELP/2023', '2023-03-08', 'Tinggi', 'Hardware', 'upgrade ram', 'meringankan kinerja komputer', 'Proposal', '', 'user', 'SDM', '123', 'Sedang', 'Sedang', '2023-03-05', '2023-03-05', 'abdul', 'mempercepat kinerja komputer karyawan', 'Ditolak', NULL),
('00009/HELP/2023', '2023-03-08', 'Tinggi', 'Hardware', 'ganti monitor', 'monitor lama bermasalah dan bergaris', 'Budget/Circulait', '', 'user', 'IT', '123', 'Sedang', 'Rendah', '2023-03-01', '2023-03-02', 'omar', 'setelah pengecekan ternyata monitor masih berfungsi dengan semestinya', 'Ditolak', NULL),
('00010/HELP/2023', '2023-03-08', 'Sedang', 'Acessories', 'kipas pendingin laptop', 'mendinginkan laptop yang sering panas ketika digunakan', 'Sfesifikasi/Gambar Desain', '', 'user', 'IT', '123', 'Rendah', 'Rendah', '2023-03-04', '2023-03-06', 'abdul', '', 'Ditolak', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `Nama_User` varchar(50) NOT NULL,
  `NPK` varchar(20) NOT NULL,
  `Divisi` text NOT NULL,
  `level` int(11) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `Nama_User`, `NPK`, `Divisi`, `level`, `status`) VALUES
('admin', '123', 'Jaenal Aripin', '123456', 'mis', 2, '1'),
('approve', '123', 'approver', '21', 'mis', 1, '1'),
('user', '123', 'user', '123', 'mis', 3, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `permintaan`
--
ALTER TABLE `permintaan`
  ADD PRIMARY KEY (`No_Permintaan`),
  ADD KEY `Nama_Pemohon` (`Nama_User`),
  ADD KEY `NPK` (`NPK`);

--
-- Indexes for table `permintaan_diterima`
--
ALTER TABLE `permintaan_diterima`
  ADD KEY `No_Permintaan` (`No_Permintaan`);

--
-- Indexes for table `permintaan_ditolak`
--
ALTER TABLE `permintaan_ditolak`
  ADD KEY `No_Permintaan` (`No_Permintaan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`),
  ADD KEY `Nama_Pemohon` (`Nama_User`),
  ADD KEY `NPK` (`NPK`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permintaan`
--
ALTER TABLE `permintaan`
  ADD CONSTRAINT `permintaan_ibfk_1` FOREIGN KEY (`NPK`) REFERENCES `user` (`NPK`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permintaan_diterima`
--
ALTER TABLE `permintaan_diterima`
  ADD CONSTRAINT `permintaan_diterima_ibfk_1` FOREIGN KEY (`No_Permintaan`) REFERENCES `permintaan` (`No_Permintaan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permintaan_ditolak`
--
ALTER TABLE `permintaan_ditolak`
  ADD CONSTRAINT `permintaan_ditolak_ibfk_1` FOREIGN KEY (`No_Permintaan`) REFERENCES `permintaan` (`No_Permintaan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2020 at 12:56 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smkm6`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galeri`
--

CREATE TABLE `tbl_galeri` (
  `id_galeri` int(11) NOT NULL,
  `gambar` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`id_galeri`, `gambar`) VALUES
(14, 0x2d344b2d47414d494e472d57414c4c50415045522d574631443030362e6a7067),
(15, 0x2d6d6f74686572626f6172642d77616c6c70617065722d636f6d7075746572732d77616c6c7061706572732e6a7067),
(16, 0x2d696d616765732e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tav`
--

CREATE TABLE `tbl_tav` (
  `id_tav` int(15) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tav`
--

INSERT INTO `tbl_tav` (`id_tav`, `deskripsi`, `gambar`) VALUES
(2, 'tes', 0x2d445343303033382e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tentang`
--

CREATE TABLE `tbl_tentang` (
  `id_tentang` int(15) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tentang`
--

INSERT INTO `tbl_tentang` (`id_tentang`, `deskripsi`, `gambar`) VALUES
(1, 'Era globalisasi dengan segala implikasinya menjadi salah satu pemicu cepatnya perubahan yang terjadi pada berbagai aspek kehidupan masyarakat, dan bila tidak ada upaya sungguh-sungguh untuk mengantisipasinya maka hal tersebut akan menjadi maslah', 0x3339302d626177616e675f6d657261682e4a5047),
(2, 'sekolah menengah atas kejuruan muhammadiyah 6 karanganyar merupakan wadah untuk menentukan masadepan siswa lewat bakat dan kemampuan di bidang otomotif,komputer dan elektronik', 0x2d74756d6e656c20494d372e6a7067),
(5, 'tes', 0x2d3535312d445343303033382e6a7067),
(6, 'tes', 0x2d37343431313437375f323534363235393631323131393331345f323234393039343432353039373330313436395f6e2e6a7067),
(7, 'tes lagi', 0x2d445343303033382e6a7067),
(8, 'tes upload lagi', 0x2d44534330303338202832292e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tkj`
--

CREATE TABLE `tbl_tkj` (
  `id_tkj` int(15) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tkj`
--

INSERT INTO `tbl_tkj` (`id_tkj`, `deskripsi`, `gambar`) VALUES
(126, 'coba 1', 0x3339302d626177616e675f6d657261682e4a5047),
(130, 'coba 2', 0x3137372d333134353134313036372e6a7067),
(133, 'tes', 0x3732312d72652e504e47),
(134, 'tes lagi', 0x32392d436972692d436972692054656c7572204179616d204e65676572692e6a7067),
(137, 'tes lagi', 0x3535312d445343303033382e6a7067),
(139, 'tes', 0x2d445343303033382e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tkr`
--

CREATE TABLE `tbl_tkr` (
  `id_tkr` int(15) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tkr`
--

INSERT INTO `tbl_tkr` (`id_tkr`, `deskripsi`, `gambar`) VALUES
(2, 'tes coba', 0x2d77616c6c70617065722d677265792d322e706e67);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_visimisi`
--

CREATE TABLE `tbl_visimisi` (
  `id_visi` int(15) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_visimisi`
--

INSERT INTO `tbl_visimisi` (`id_visi`, `visi`, `misi`) VALUES
(23, '1.berakhlak  ismali\r\n2. budi pekerti\r\n3. sopan', '1. mejadikan sekolah berbasis islami\r\n2. membentuk karakter');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', '123', 'admin'),
(3, 'petugas', 'petugas', '11', 'petugas'),
(37, 'ojol', 'ojol', 'ojol12', 'admin'),
(42, 'petugas1', 'abdul', '134', 'petugas'),
(43, 'petugas13', 'abdul', '134', 'petugas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `tbl_tav`
--
ALTER TABLE `tbl_tav`
  ADD PRIMARY KEY (`id_tav`);

--
-- Indexes for table `tbl_tentang`
--
ALTER TABLE `tbl_tentang`
  ADD PRIMARY KEY (`id_tentang`);

--
-- Indexes for table `tbl_tkj`
--
ALTER TABLE `tbl_tkj`
  ADD PRIMARY KEY (`id_tkj`);

--
-- Indexes for table `tbl_tkr`
--
ALTER TABLE `tbl_tkr`
  ADD PRIMARY KEY (`id_tkr`);

--
-- Indexes for table `tbl_visimisi`
--
ALTER TABLE `tbl_visimisi`
  ADD PRIMARY KEY (`id_visi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_tav`
--
ALTER TABLE `tbl_tav`
  MODIFY `id_tav` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_tentang`
--
ALTER TABLE `tbl_tentang`
  MODIFY `id_tentang` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_tkj`
--
ALTER TABLE `tbl_tkj`
  MODIFY `id_tkj` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `tbl_tkr`
--
ALTER TABLE `tbl_tkr`
  MODIFY `id_tkr` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_visimisi`
--
ALTER TABLE `tbl_visimisi`
  MODIFY `id_visi` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

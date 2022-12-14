-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2022 at 08:22 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_homecare`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chat`
--

CREATE TABLE `tbl_chat` (
  `id` int(11) NOT NULL,
  `id_userid_` int(11) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `chat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dokter`
--

CREATE TABLE `tbl_dokter` (
  `id` int(11) NOT NULL,
  `id_login` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `spesialis` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_info_homecare`
--

CREATE TABLE `tbl_info_homecare` (
  `id` int(11) NOT NULL,
  `label` varchar(100) NOT NULL,
  `tgl_informasi` date NOT NULL,
  `informasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_info_homecare`
--

INSERT INTO `tbl_info_homecare` (`id`, `label`, `tgl_informasi`, `informasi`) VALUES
(1, 'Penyebab Gigi Berjumlah Lebih dari Normal, Berbahayakah?\r\n', '2022-10-26', 'Gigi merupakan salah satu bagian tubuh yang memiliki peran penting. Fungsinya adalah untuk membantu seseorang dalam mengunyah dan menelan makanan serta berbicara. \r\n\r\nNormalnya, jumlah gigi orang dewasa adalah 32 buah. Namun, pada sebagian orang, jumlah gigi yang muncul melebihi dari 32 buah.  \r\n\r\nDalam dunia kedokteran, jumlah gigi yang berlebih disebut juga dengan supernumerary teeth atau hyperdontia. Kondisi ini biasanya lebih banyak ditemukan pada pria dibandingkan wanita. \r\n\r\nDi dalam rongga mulut, gigi yang berlebih ini dapat muncul di manapun dan bisa berjumlah lebih dari satu. Letaknya pun dapat ditemukan pada satu atau kedua sisi rahang. \r\n\r\nDi samping itu, gigi tersebut dapat tumbuh secara sempurna dalam rongga mulut atau hanya ‘terbenam’ dalam tulang dan tidak tumbuh. '),
(2, 'Ibu Hamil, Jangan Sepelekan Sinusitis', '2022-01-01', 'Kehamilan memiliki tantangannya sendiri. Berbagai perubahan terjadi pada tubuh ibu hamil termasuk sistem imun yang melemah sehingga mudah terinfeksi.   Selain itu, hormon kehamilan membuat aliran darah pada pembuluh darah dan membran tubuh meningkat. Akibatnya banyak bagian tubuh yang membengkak, termasuk pada membran mukosa hidung.   Mama pun akan sering merasakan hidung tersumbat dan adanya cairan pada hidung. Apabila hal ini disertai dengan infeksi pada sinus atau sinusitis, gejalanya akan semakin berat dibandingkan dengan sinusitis pada umumnya.    Bagaimana bisa terjadi sinusitis pada ibu hamil? Apa yang mesti dilakukan untuk mencegahnya? Simak penjelasan berikut ini.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `username`, `password`, `status`) VALUES
(1, 'admin', 'admin', 'admin'),
(7, 'emhyl', '123', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_obat`
--

CREATE TABLE `tbl_obat` (
  `id` int(11) NOT NULL,
  `nama_obat` varchar(20) NOT NULL,
  `jumlah` int(2) NOT NULL,
  `status_obat` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_obat`
--

INSERT INTO `tbl_obat` (`id`, `nama_obat`, `jumlah`, `status_obat`) VALUES
(1, 'paramex', 20, 'Tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `jenis_perawatan` varchar(20) NOT NULL,
  `tgl_order` date NOT NULL,
  `sts_order` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `id_user`, `jenis_perawatan`, `tgl_order`, `sts_order`) VALUES
(1, 1, 'cek darah', '2022-10-04', 'selesai');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `id_login` int(11) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `nik` int(20) NOT NULL,
  `no_hp` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `id_login`, `alamat`, `nama`, `nik`, `no_hp`) VALUES
(1, 7, 'bangsal', 'emhylstar', 2147483647, 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_chat`
--
ALTER TABLE `tbl_chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_dokter`
--
ALTER TABLE `tbl_dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_info_homecare`
--
ALTER TABLE `tbl_info_homecare`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_obat`
--
ALTER TABLE `tbl_obat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_chat`
--
ALTER TABLE `tbl_chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_dokter`
--
ALTER TABLE `tbl_dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_info_homecare`
--
ALTER TABLE `tbl_info_homecare`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_obat`
--
ALTER TABLE `tbl_obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

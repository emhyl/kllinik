-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 16, 2023 at 08:51 PM
-- Server version: 10.2.44-MariaDB-cll-lve
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emhy1337_db_homecare`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chat`
--

CREATE TABLE `tbl_chat` (
  `id` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_perawat` int(11) NOT NULL,
  `chat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_chat`
--

INSERT INTO `tbl_chat` (`id`, `status`, `id_user`, `id_perawat`, `chat`) VALUES
(1, 'user', 1, 1, 'Hallow dokter'),
(2, 'user', 2, 1, 'manki dok'),
(3, 'user', 1, 1, 'kapan ada jadwal dok\r\n'),
(4, 'perawat', 2, 1, 'ada jha'),
(5, 'perawat', 2, 1, 'kenapai ka'),
(6, 'perawat', 1, 1, 'ada hari ini'),
(7, 'perawat', 1, 1, 'bisa besok'),
(9, 'user', 1, 2, 'p'),
(10, 'user', 1, 2, 'manaki dok'),
(11, 'user', 1, 1, 'serius?'),
(12, 'perawat', 1, 1, 'mmm kita jhi'),
(13, 'perawat', 2, 1, 'mauki gorengan'),
(14, 'perawat', 2, 1, 'Kalau mauki belliki'),
(15, 'user', 2, 3, 'p'),
(16, 'user', 7, 13, 'p'),
(17, 'perawat', 7, 13, 'iye'),
(18, 'apa', 7, 13, 'apa'),
(19, 'user', 9, 15, 'adakah'),
(20, 'user', 12, 15, 'oi'),
(21, 'user', 8, 15, 'sakitka ka dok'),
(22, 'user', 13, 15, 'ass'),
(23, 'user', 11, 15, 'nbv'),
(24, 'user', 10, 15, 'jhgf'),
(25, 'perawat', 9, 15, 'ada'),
(26, 'perawat', 9, 15, 'tidak ada'),
(27, 'perawat', 12, 15, 'oi'),
(28, 'perawat', 8, 15, 'terus'),
(29, 'perawat', 13, 15, 'wass'),
(30, 'perawat', 11, 15, 'hgfd'),
(31, 'perawat', 10, 15, 'gfd');

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
-- Table structure for table `tbl_list_pelayanan`
--

CREATE TABLE `tbl_list_pelayanan` (
  `id` int(11) NOT NULL,
  `nm_pelayanan` varchar(50) NOT NULL,
  `harga` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_list_pelayanan`
--

INSERT INTO `tbl_list_pelayanan` (`id`, `nm_pelayanan`, `harga`) VALUES
(1, 'Pemeriksaan kesehatan +(tensi dan obat)', '60.000'),
(2, 'bekam + terapi infra merah', '120000'),
(3, 'Pemasangan infus', '95.000'),
(4, 'Pemerikasaan gula darah,asam urat dan kolestrol di', '100.000'),
(6, 'sunat modern tanpa jarum suntik anak gemuk+jahit', '520.000'),
(7, 'Pemasangan kateter urine', '120000'),
(8, 'Pelepasan katater urine', '40.000'),
(9, 'Pelepasan infus', ' 35.000'),
(10, 'sunat modern anak tanpa suntik+tanpa jahit', '820.000'),
(11, 'Sunat modern tanpa jarum suntik anak+jahit', '370.000'),
(12, 'sunat modern anak gemuk tanpa jarum+ tanpa jahi', '1.220.000'),
(13, 'Perawatan Luka Diabetes Melitus (terapi ozone+obat', '170.000');

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
(19, 'H.gulo', '123', 'user'),
(38, 'Dr Suaebah Rebbah', '0987', 'perawat'),
(39, 'Dr Resti Amalia', '0987', 'perawat'),
(40, 'Muh Ishak Zulkarnain S.Kep', '0987', 'perawat'),
(41, 'jumrah', '123', 'user'),
(42, 'Ratnah S.Kep', 'Ratnah S.Kep', 'perawat'),
(43, 'H.Kamaria', 'H.Kamaria', 'user'),
(44, 'Ani', 'Ani', 'user'),
(45, 'Suarni', 'Suarni', 'user'),
(46, 'Rini', 'Rini', 'user'),
(47, 'bacce', 'bacce', 'user'),
(48, 'neni', 'neni', 'user'),
(49, 'rida', 'rida', 'user'),
(50, 'jum', 'jum', 'perawat'),
(51, '070820', '070820', 'user'),
(52, 'juniarti', '223311', 'user'),
(53, 'awq', '12', 'user'),
(54, 'erwin', '111', 'user'),
(55, 'Db', '999', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_obat`
--

CREATE TABLE `tbl_obat` (
  `id` int(11) NOT NULL,
  `nama_obat` varchar(20) NOT NULL,
  `status_obat` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_obat`
--

INSERT INTO `tbl_obat` (`id`, `nama_obat`, `status_obat`) VALUES
(1, 'paramex', 'Tersedia'),
(2, 'konindng', 'Tersedia'),
(3, 'Balsem lan', 'Tersedia'),
(4, 'Polysilane', 'Tersedia'),
(5, 'Lodecon', 'Habis'),
(6, 'Kuatidex', 'Tersedia'),
(7, 'Calcifar', 'Habis'),
(8, 'Flucadex', 'Tersedia'),
(9, 'L-bio', 'Habis'),
(10, 'Insto', 'Tersedia'),
(11, 'Cessa merah', 'Habis'),
(12, 'Pagoda salep', 'Tersedia'),
(14, 'Noverviox', 'Tersedia'),
(15, 'Albothyl', 'Tersedia'),
(16, 'Etabion', 'Tersedia'),
(17, 'Hufabion', 'Tersedia'),
(18, 'Etalagin', 'Tersedia'),
(19, 'Hufagrip', 'Habis'),
(20, 'Fluansa', 'Habis'),
(21, 'Grantusive', 'Tersedia'),
(22, 'Grafalin', 'Tersedia'),
(23, 'Salbron', 'Habis'),
(24, 'Erlamyciatin', 'Tersedia'),
(25, 'Neotep vorte', 'Tersedia'),
(26, 'Huhadexta-m', 'Habis'),
(27, 'Licodexson', 'Tersedia'),
(28, 'Magmeta plus', 'Tersedia'),
(29, 'Cendo xtrol', 'Habis'),
(30, 'Bioplacentrom', 'Tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_perawat` int(11) DEFAULT NULL,
  `jenis_perawatan` varchar(20) NOT NULL,
  `tgl_order` date NOT NULL,
  `jadwal` time DEFAULT NULL,
  `harga` varchar(10) NOT NULL,
  `sts_order` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `id_user`, `id_perawat`, `jenis_perawatan`, `tgl_order`, `jadwal`, `harga`, `sts_order`) VALUES
(16, 1, 1, 'bekam', '2022-11-12', '03:27:00', '100000', 'selesai'),
(17, 1, 1, 'bekam', '2022-11-12', '16:29:00', '100000', 'selesai'),
(18, 1, 2, 'cek darah', '2022-11-13', '12:15:00', '120000', 'proses'),
(19, 3, 2, 'ganti infush', '2022-11-13', '16:55:00', '50000', 'selesai'),
(20, 2, 1, 'ganti infush', '2022-11-17', '13:24:00', '50000', 'selesai'),
(21, 5, 2, 'Injeksi', '2022-12-14', '12:00:00', '50.000', 'selesai'),
(22, 5, 13, 'Injeksi', '2022-12-23', '12:54:00', '50.000', 'selesai'),
(23, 9, 15, 'sunat modern tanpa j', '2023-01-01', '12:06:00', '520.000', 'selesai'),
(24, 12, 15, 'Pemeriksaan kesehata', '2023-01-01', '23:05:00', '60.000', 'selesai'),
(25, 8, 15, 'Pemeriksaan kesehata', '2023-01-01', '03:25:00', '60.000', 'proses'),
(26, 8, 15, 'Pemeriksaan kesehata', '2023-01-01', '21:04:00', '60.000', 'proses'),
(27, 13, 15, 'sunat modern anak ta', '2023-01-01', '03:24:00', '820.000', 'proses'),
(28, 11, 15, 'Pelepasan infus', '2023-01-01', '21:03:00', ' 35.000', 'proses'),
(29, 10, 15, 'sunat modern anak ta', '2023-01-01', '21:03:00', '820.000', 'proses'),
(30, 15, 14, 'Pemasangan infus', '2023-01-04', '23:44:00', '95.000', 'proses'),
(31, 5, NULL, 'sunat modern anak ge', '2023-01-08', NULL, '1.220.000', 'order'),
(32, 5, NULL, 'Pemeriksaan kesehata', '2023-01-13', NULL, '60.000', 'order'),
(33, 7, NULL, 'Sunat modern tanpa j', '2023-01-13', NULL, '370.000', 'order'),
(34, 5, NULL, 'bekam + terapi infra', '2023-01-16', NULL, '120000', 'order');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_perawat`
--

CREATE TABLE `tbl_perawat` (
  `id` int(11) NOT NULL,
  `id_login` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `spesialis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_perawat`
--

INSERT INTO `tbl_perawat` (`id`, `id_login`, `nama`, `spesialis`) VALUES
(13, 38, 'Dr Suaebah Rebbah', 'umum'),
(14, 39, 'Dr Resti Amalia', 'umum'),
(15, 40, 'Muh Ishak Zulkarnain S.Kep', 'perawat'),
(16, 42, 'Ratnah S.Kep', 'perawat'),
(17, 50, 'fatimah assahra', 'perangsang');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `id_login` int(11) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `no_hp` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `id_login`, `alamat`, `nama`, `nik`, `no_hp`) VALUES
(1, 7, 'bangsal', 'emhylstar', '2147483647', 2147483647),
(2, 9, 'jkt', 'user saja', '1029219839', 862423546),
(3, 17, 'bangsalayya', 'emhylstar', '2147483647', 788787787),
(4, 18, 'Kaloling', 'Faisal', '2147483647', 2147483647),
(5, 19, 'Pa\'lingang', 'H.gulo', '2147483647', 2147483647),
(6, 22, 'Jeneponto', 'RANDI', '2147483647', 2147483647),
(7, 41, 'balibo', 'jumrah', '42683893', 836353778),
(8, 43, 'pa\'lingang', 'H.Kamaria', '1234567890', 2147483647),
(9, 44, 'bantaeng ', 'Ani', '2147483647', 2147483647),
(10, 45, 'lembang', 'Suarni', '2147483647', 2147483647),
(11, 46, 'pa;lingang', 'Rini', '2147483647', 2147483647),
(12, 47, 'borong inru', 'bacce', '1654667', 2147483647),
(13, 48, 'borong inru', 'neni', '9', 2147483647),
(14, 49, '09', 'rida', '2147483647', 2147483647),
(15, 51, 'Jl. Imam Bonjol', 'Adi Candra', '2147483647', 2147483647),
(16, 52, 'Ujung bulu', 'Juju', '2147483647', 2147483647),
(17, 53, 'asa', 'as', '2147483647', 121),
(18, 54, 'sas', 'a', '2147483647', 788787787),
(19, 55, 'Kindang', 'Db', '0987654321680987', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_chat`
--
ALTER TABLE `tbl_chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_info_homecare`
--
ALTER TABLE `tbl_info_homecare`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_list_pelayanan`
--
ALTER TABLE `tbl_list_pelayanan`
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
-- Indexes for table `tbl_perawat`
--
ALTER TABLE `tbl_perawat`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_info_homecare`
--
ALTER TABLE `tbl_info_homecare`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_list_pelayanan`
--
ALTER TABLE `tbl_list_pelayanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `tbl_obat`
--
ALTER TABLE `tbl_obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tbl_perawat`
--
ALTER TABLE `tbl_perawat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

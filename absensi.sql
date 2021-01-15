-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2021 at 05:09 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absensi`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `guru` varchar(128) NOT NULL,
  `nrp` varchar(25) NOT NULL,
  `mata_pelajaran` varchar(50) NOT NULL,
  `foto` varchar(128) NOT NULL,
  `waktu` varchar(128) NOT NULL,
  `deleted_at` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `aktivitas`
--

CREATE TABLE `aktivitas` (
  `id` int(11) NOT NULL,
  `id_user` int(3) NOT NULL,
  `aktivitas` varchar(128) NOT NULL,
  `icon` varchar(25) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(11) NOT NULL,
  `jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `jurusan`) VALUES
(1, 'Animasi'),
(2, 'Akuntansi'),
(3, 'Perbankan Syariah'),
(4, 'OTKP 1'),
(5, 'OTKP 2');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `kelas` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `kelas`) VALUES
(1, 'X'),
(2, 'XI'),
(3, 'XII');

-- --------------------------------------------------------

--
-- Table structure for table `list_absensi`
--

CREATE TABLE `list_absensi` (
  `id` int(11) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `nrp` varchar(6) NOT NULL,
  `link` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `list_absensi`
--

INSERT INTO `list_absensi` (`id`, `nama_guru`, `nrp`, `link`) VALUES
(1, 'Dra. Hj. Tati Mulyanih	', '060851', '060851'),
(2, 'Dra. Mas Mimin, M.M	', '910311', '910311'),
(3, 'Bambang Ismayanto, M.Pd	', '030750', '030750'),
(4, 'Halimah, S.Pd	', '151175', '151175'),
(5, 'Indah Hoirunnisah, S.Si	', '171293', '171293'),
(6, 'Rini Permatasari, S.Pd	', '171294', '171294'),
(7, 'Ahyar Hailani, S.Sn	', '191352', '191352'),
(8, 'Rokhmatunnisa Febrian, S.Pd	', '191382', '191382'),
(9, 'Dinar Sarah, S.E	', '191386', '191386'),
(10, 'Rahmawati, S.Pd	', '201394', '201394'),
(11, 'Kurnia Wiyanti, S.Pd	', '201416', '201416'),
(12, 'Fisi Liana Aziza, S.Pd	', '201417', '201417'),
(13, 'Fajar Alkan Joesuli, A.Md	', '201419', '201419'),
(14, 'Dra. Hj. Ikah Atikah, M.M	', '870211', '870211'),
(15, 'Sri Susilaningsih, SE, M.M	', '060850', '060850'),
(16, 'Aris Setiawan, S.Pd	', '100998', '100998'),
(17, 'Sudarsono, S.Pd	', '880234', '880234'),
(18, 'Dra. Siti Murtasilatun, M.M	', '980543', '980543'),
(19, 'Dartim, S.Pd	', '020725', '020725'),
(20, 'Novi Mardalini, SE	', '030751', '030751'),
(21, 'Suhari, S.Pd	', '080937', '080937'),
(22, 'Jebel Firdaus, S.EI	', '080947', '080947'),
(23, 'Dwi Setyo Rini, S.Pd	', '100994', '100994'),
(24, 'Ana Fitrianingtias, S.Pd	', '101002', '101002'),
(25, 'Lulut Andri Iswari, S.Pd	', '101004', '101004'),
(26, 'Ihsan Mustaqim, S.Pd	', '161209', '161209'),
(27, 'Zaenuddin Fahri, S.Pd.I	', '161210', '161210'),
(28, 'Faidhatul Atiyah, S.Pd	', '201414', '201414'),
(29, 'Vira Awalitawati Siregar, S.Pd	', '201415', '201415'),
(30, 'Arif Nur Rachman, S.Pd	', '201418', '201418');

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `id` int(11) NOT NULL,
  `nrp` varchar(10) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `pelajaran` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`id`, `nrp`, `nama`, `pelajaran`) VALUES
(1, '060851', 'Dra. Hj. Tati Mulyanih', 'Pendidikan-Agama-dan-Budi-Pekerti'),
(2, '910311', 'Dra. Mas Mimin, M.M', 'Otomatisasi-Tata-Kelola-Sarpras'),
(3, '910311', 'Dra. Mas Mimin, M.M', 'Etika-Profesi'),
(4, '910311', 'Dra. Mas Mimin, M.M', 'Adm-Umum'),
(5, '030750', 'Bambang Ismayanto, M.Pd', 'Matematika'),
(6, '030750', 'Bambang Ismayanto, M.Pd', 'IPA'),
(7, '151175', 'Halimah, S.Pd', 'Bahasa-Indonesia'),
(8, '171293', 'Indah Hoirunnisah, S.Si', 'Matematika'),
(9, '171293', 'Indah Hoirunnisah, S.Si', 'Produk-Kreatif-dan-Kewirausahaan'),
(11, '171294', 'Rini Permatasari, S.Pd', 'OTK-Humas-dan-Keprotokolan'),
(12, '171294', 'Rini Permatasari, S.Pd', 'Teknologi-Perkantoran'),
(13, '171294', 'Rini Permatasari, S.Pd', 'OTK-Kepegawaian'),
(14, '191352', 'Ahyar Hailani, S.Sn', 'Dasar-Dasar-Seni-Rupa'),
(15, '191352', 'Ahyar Hailani, S.Sn', 'Tinjauan-Seni'),
(16, '191352', 'Ahyar Hailani, S.Sn', 'Seni-Budaya'),
(17, '191352', 'Ahyar Hailani, S.Sn', 'Produk-Kreatif-dan-Kewirausahaan'),
(18, '191382', 'Rokhmatunnisa Febrian, S.Pd', 'Sejarah'),
(19, '191382', 'Rokhmatunnisa Febrian, S.Pd', 'PPKN'),
(20, '191386', 'Dinar Sarah, S.E', 'Lembaga-Keuangan-Syariah'),
(21, '191386', 'Dinar Sarah, S.E', 'Pengelolaan-Kas'),
(22, '191386', 'Dinar Sarah, S.E', 'Komp-Akuntansi-Perbankan-SY'),
(23, '191386', 'Dinar Sarah, S.E', 'Ekonomi-Bisnis'),
(24, '191386', 'Dinar Sarah, S.E', 'Produk-Kreatif-dan-Kewirausahaan'),
(25, '201416', 'Kurnia Wiyanti, S.Pd', 'Bahasa-Indonesia'),
(26, '201417', 'Fisi Liana Aziza, S.Pd', 'Produk-Kreatif-dan-Kewirausahaan'),
(27, '201419', 'Fajar Alkan Joesuli, A.Md', 'Animasi-2D'),
(28, '201419', 'Fajar Alkan Joesuli, A.Md', 'Proses-Digital'),
(29, '201419', 'Fajar Alkan Joesuli, A.Md', 'Videograpy'),
(30, '201419', 'Fajar Alkan Joesuli, A.Md', 'Gambar'),
(31, '201419', 'Fajar Alkan Joesuli, A.Md', 'Dasar-Dasar-Kreatifitas-Sketsa'),
(32, '060850', 'Sri Susilaningsih, SE, M.M', 'Akuntansi-Syariah'),
(33, '060850', 'Sri Susilaningsih, SE, M.M', 'Produk-Kreatif-dan-Kewirausahaan'),
(34, '100998', 'Aris Setiawan, S.Pd', 'OTK-Keuangan'),
(35, '100998', 'Aris Setiawan, S.Pd', 'Kearsipan'),
(36, '880234', 'Sudarsono, S.Pd', 'Akuntansi-Dasar'),
(37, '880234', 'Sudarsono, S.Pd', 'Praktikum-Akt-Prsh-Jasa-Dagang-Manufaktur'),
(38, '980543', 'Dra. Siti Murtasilatun, M.M', 'BK'),
(39, '020725', 'Dartim, S.Pd', 'Bahasa-Inggris'),
(40, '030751', 'Novi Mardalini, SE', 'Komputer-Akuntansi-MYOB'),
(41, '030751', 'Novi Mardalini, SE', 'Adm-Pajak'),
(42, '030751', 'Novi Mardalini, SE', 'Prak-Akt-Lembaga-Instansi-Pemerintah'),
(43, '030751', 'Novi Mardalini, SE', 'Aplikasi-Pengolah-Angka-Spreadsheet'),
(44, '080937', 'Suhari, S.Pd', 'PPKN'),
(45, '080937', 'Suhari, S.Pd', 'Animasi-3D'),
(46, '080937', 'Suhari, S.Pd', 'Dasar-Dasar-Kreatifitas'),
(47, '080947', 'Jebel Firdaus, S.EI', 'Fiqih'),
(48, '080947', 'Jebel Firdaus, S.EI', 'Perbankan-Dasar'),
(49, '080947', 'Jebel Firdaus, S.EI', 'Ekonomi-Islam'),
(50, '100994', 'Dwi Setyo Rini, S.Pd', 'Akuntansi-Keuangan'),
(51, '100994', 'Dwi Setyo Rini, S.Pd', 'Komp-Akuntansi-MYOB'),
(52, '100994', 'Dwi Setyo Rini, S.Pd', 'Prak-Akt-Persh-Jasa-Dagang-Manufaktur'),
(53, '100994', 'Dwi Setyo Rini, S.Pd', 'Prak-Akt-Lembaga-Instansi-Pemerintah'),
(54, '100994', 'Dwi Setyo Rini, S.Pd', 'Ekobis'),
(55, '101002', 'Ana Fitrianingtias, S.Pd', 'OTK-Kepegawaian'),
(56, '101002', 'Ana Fitrianingtias, S.Pd', 'Otomatisasi-Tata-Kelola-Keuangan'),
(57, '101002', 'Ana Fitrianingtias, S.Pd', 'Korespondensi'),
(58, '101004', 'Lulut Andri Iswari, S.Pd', 'Matematika'),
(59, '161209', 'Ihsan Mustaqim, S.Pd', 'Penjasorkes'),
(60, '161210', 'Zaenuddin Fahri, S.Pd.I', 'Al-Quran'),
(61, '161210', 'Zaenuddin Fahri, S.Pd.I', 'Fiqih'),
(62, '201414', 'Faidhatul Atiyah, S.Pd', 'Bahasa-Inggris'),
(63, '201415', 'Vira Awalitawati Siregar, S.Pd', 'BK'),
(64, '201418', 'Arif Nur Rachman, S.Pd', 'Komp-Perkantoran-Mulok'),
(65, '201418', 'Arif Nur Rachman, S.Pd', 'Simulasi-dan-Komunikasi-Digital'),
(66, '201394', 'Rahmawati, S.Pd', 'Bahasa-Jepang');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `login_date` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `login_date`) VALUES
(1, 'Admin', 'admin', '$2y$12$LTSN.vQtvekjAZPpKHwWHe7h39QCa17WYe6hMvepH3i71/piCPHqO', 'Jumat, 15 Januari 2021 pukul 10.13'),
(2, 'Dra. Hj. Tati Mulyanih', '060851', '$2y$12$duGMi5oJRy6iC448dtNBSu6YMaSR8mbz8LxTwBSXjvXndIym3UTQq', 'Jumat, 15 Januari 2021 pukul 10.12'),
(3, 'Dra. Mas Mimin, M.M', '910311', '$2y$12$duGMi5oJRy6iC448dtNBSu6YMaSR8mbz8LxTwBSXjvXndIym3UTQq', 'Jumat, 15 Januari 2021 pukul 09.16'),
(4, 'Bambang Ismayanto, M.Pd', '030750', '$2y$12$duGMi5oJRy6iC448dtNBSu6YMaSR8mbz8LxTwBSXjvXndIym3UTQq', 'Selasa, 5 Januari 2021 pukul 09.27'),
(5, 'Halimah, S.Pd', '151175', '$2y$12$duGMi5oJRy6iC448dtNBSu6YMaSR8mbz8LxTwBSXjvXndIym3UTQq', 'Senin, 23 November 2020 pukul 06.50'),
(6, 'Indah Hoirunnisah, S.Si', '171293', '$2y$12$duGMi5oJRy6iC448dtNBSu6YMaSR8mbz8LxTwBSXjvXndIym3UTQq', 'Jumat, 8 Januari 2021 pukul 08.55'),
(7, 'Rini Permatasari, S.Pd', '171294', '$2y$12$duGMi5oJRy6iC448dtNBSu6YMaSR8mbz8LxTwBSXjvXndIym3UTQq', 'Jumat, 15 Januari 2021 pukul 07.22'),
(8, 'Ahyar Hailani, S.Sn', '191352', '$2y$12$duGMi5oJRy6iC448dtNBSu6YMaSR8mbz8LxTwBSXjvXndIym3UTQq', 'Kamis, 14 Januari 2021 pukul 10.04'),
(9, 'Rokhmatunnisa Febrian, S.Pd', '191382', '$2y$12$duGMi5oJRy6iC448dtNBSu6YMaSR8mbz8LxTwBSXjvXndIym3UTQq', 'Jumat, 15 Januari 2021 pukul 07.55'),
(10, 'Dinar Sarah, S.E', '191386', '$2y$12$duGMi5oJRy6iC448dtNBSu6YMaSR8mbz8LxTwBSXjvXndIym3UTQq', 'Selasa, 12 Januari 2021 pukul 10.12'),
(11, 'Rahmawati, S.Pd', '201394', '$2y$12$duGMi5oJRy6iC448dtNBSu6YMaSR8mbz8LxTwBSXjvXndIym3UTQq', 'Jumat, 15 Januari 2021 pukul 08.02'),
(12, 'Kurnia Wiyanti, S.Pd', '201416', '$2y$12$duGMi5oJRy6iC448dtNBSu6YMaSR8mbz8LxTwBSXjvXndIym3UTQq', 'Jumat, 15 Januari 2021 pukul 07.00'),
(13, 'Fisi Liana Aziza, S.Pd', '201417', '$2y$12$duGMi5oJRy6iC448dtNBSu6YMaSR8mbz8LxTwBSXjvXndIym3UTQq', 'Jumat, 15 Januari 2021 pukul 07.23'),
(14, 'Fajar Alkan Joesuli, A.Md', '201419', '$2y$12$duGMi5oJRy6iC448dtNBSu6YMaSR8mbz8LxTwBSXjvXndIym3UTQq', 'Kamis, 14 Januari 2021 pukul 11.29'),
(15, 'Dra. Hj. Ikah Atikah, M.M', '870211', '$2y$12$duGMi5oJRy6iC448dtNBSu6YMaSR8mbz8LxTwBSXjvXndIym3UTQq', 'Minggu, 13 September 2020 pukul 19.37'),
(16, 'Sri Susilaningsih, SE, M.M', '060850', '$2y$12$duGMi5oJRy6iC448dtNBSu6YMaSR8mbz8LxTwBSXjvXndIym3UTQq', 'Jumat, 15 Januari 2021 pukul 08.53'),
(17, 'Aris Setiawan, S.Pd', '100998', '$2y$12$duGMi5oJRy6iC448dtNBSu6YMaSR8mbz8LxTwBSXjvXndIym3UTQq', 'Kamis, 22 Oktober 2020 pukul 12.34'),
(18, 'Sudarsono, S.Pd', '880234', '$2y$12$duGMi5oJRy6iC448dtNBSu6YMaSR8mbz8LxTwBSXjvXndIym3UTQq', 'Selasa, 3 November 2020 pukul 12.02'),
(19, 'Dra. Siti Murtasilatun, M.M', '980543', '$2y$12$duGMi5oJRy6iC448dtNBSu6YMaSR8mbz8LxTwBSXjvXndIym3UTQq', '-'),
(20, 'Dartim, S.Pd', '020725', '$2y$12$duGMi5oJRy6iC448dtNBSu6YMaSR8mbz8LxTwBSXjvXndIym3UTQq', 'Kamis, 19 November 2020 pukul 09.36'),
(21, 'Novi Mardalini, SE', '030751', '$2y$12$duGMi5oJRy6iC448dtNBSu6YMaSR8mbz8LxTwBSXjvXndIym3UTQq', 'Kamis, 22 Oktober 2020 pukul 10.12'),
(22, 'Suhari, S.Pd', '080937', '$2y$12$duGMi5oJRy6iC448dtNBSu6YMaSR8mbz8LxTwBSXjvXndIym3UTQq', 'Selasa, 5 Januari 2021 pukul 09.56'),
(23, 'Jebel Firdaus, S.EI', '080947', '$2y$12$duGMi5oJRy6iC448dtNBSu6YMaSR8mbz8LxTwBSXjvXndIym3UTQq', 'Jumat, 2 Oktober 2020 pukul 10.30'),
(24, 'Dwi Setyo Rini, S.Pd', '100994', '$2y$12$duGMi5oJRy6iC448dtNBSu6YMaSR8mbz8LxTwBSXjvXndIym3UTQq', 'Jumat, 15 Januari 2021 pukul 07.05'),
(25, 'Ana Fitrianingtias, S.Pd', '101002', '$2y$12$duGMi5oJRy6iC448dtNBSu6YMaSR8mbz8LxTwBSXjvXndIym3UTQq', 'Senin, 9 November 2020 pukul 10.00'),
(26, 'Lulut Andri Iswari, S.Pd', '101004', '$2y$12$duGMi5oJRy6iC448dtNBSu6YMaSR8mbz8LxTwBSXjvXndIym3UTQq', 'Selasa, 10 November 2020 pukul 15.49'),
(27, 'Ihsan Mustaqim, S.Pd', '161209', '$2y$12$duGMi5oJRy6iC448dtNBSu6YMaSR8mbz8LxTwBSXjvXndIym3UTQq', 'Jumat, 15 Januari 2021 pukul 08.50'),
(28, 'Zaenuddin Fahri, S.Pd.I', '161210', '$2y$12$duGMi5oJRy6iC448dtNBSu6YMaSR8mbz8LxTwBSXjvXndIym3UTQq', 'Jumat, 15 Januari 2021 pukul 08.49'),
(29, 'Faidhatul Atiyah, S.Pd', '201414', '$2y$12$duGMi5oJRy6iC448dtNBSu6YMaSR8mbz8LxTwBSXjvXndIym3UTQq', 'Kamis, 14 Januari 2021 pukul 08.40'),
(30, 'Vira Awalitawati Siregar, S.Pd', '201415', '$2y$12$duGMi5oJRy6iC448dtNBSu6YMaSR8mbz8LxTwBSXjvXndIym3UTQq', '-'),
(31, 'Arif Nur Rachman, S.Pd', '201418', '$2y$12$duGMi5oJRy6iC448dtNBSu6YMaSR8mbz8LxTwBSXjvXndIym3UTQq', 'Jumat, 15 Januari 2021 pukul 07.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aktivitas`
--
ALTER TABLE `aktivitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_absensi`
--
ALTER TABLE `list_absensi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `aktivitas`
--
ALTER TABLE `aktivitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `list_absensi`
--
ALTER TABLE `list_absensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

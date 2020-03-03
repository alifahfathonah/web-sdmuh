-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2020 at 02:32 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdmuh`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal` varchar(120) DEFAULT NULL,
  `gambar` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `nama`, `deskripsi`, `tanggal`, `gambar`) VALUES
(1, 'Outing Class', 'Minggu kemarin siswa kelas 6 melakukan outing class ke buper delingan, disana anak anak belajar kepemimpinan dan bersenang senang bersama', '19, November 2002', 'outingclass.jpg'),
(2, 'Jeda Semester', 'Jeda semester 1 setelah PAS, para siswa mengikuti serangkaian kegiatan olahraga, seperti sepak bola, basket, volley', '12, Desember 2019', 'jeda.jpg'),
(3, 'Kerja Bakti', 'Kerja bakti dalam rangka bersih campus pada tanggal 13 Oktober 2019, para siswa tampak antusias dan senang ketika melakukannya', '13 Oktober 2019', 'kerjabakti.jpg'),
(4, 'Diesnatalis', 'Diesnatalis dalam rangka memperingati hari jadi SD Muh yang Ke-40 Thn. Diesnatalis tahun ini dimeriahkan oleh banyak band band ternama', '23 Mei 2019', 'diesnatalis.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` int(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id`, `nama`, `deskripsi`, `gambar`) VALUES
(1, 'Parkiran', 'Disini kami menyediakan parkiran yang cukup luas untuk para siswa yang membawa sepeda modor', 'parkiran.jpg'),
(2, 'Lapangan Sepakbola', 'Kami disini juga mempunyai lapangan sepak bola yang lumayan luas, yang bisa digunakan anak untuk bermain', 'lap.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `nama_guru` varchar(128) NOT NULL,
  `ttl` varchar(120) NOT NULL,
  `mapel` varchar(120) NOT NULL,
  `kelas` varchar(120) NOT NULL,
  `gambar` varchar(255) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `id_guru`, `nama_guru`, `ttl`, `mapel`, `kelas`, `gambar`) VALUES
(5, 1234, 'Suwandi, S.Pd.I', 'kra, 19 Des 1980', 'Pendidikan Agama', '2', 'default.jpg'),
(7, 5555, 'Surini, S.Pd', 'Kra, 24 Maret 1973', 'IPA', '6', 'default.jpg'),
(8, 13412, 'Qumil L, S,Pd.I', 'Kra, 24 Juni 1980', 'Pendidikan Agama', '6', 'default.jpg'),
(9, 124124, 'Rista S,S.Pd', 'Jtpr, 12 Maret 1989', 'Bahasa Inggris', '6', 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id` int(11) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `deskripsi` text NOT NULL,
  `kelas` varchar(120) NOT NULL,
  `nama_guru` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id`, `nama`, `deskripsi`, `kelas`, `nama_guru`) VALUES
(7, 'Pendidikan Agama', 'Mengajarkan tentang pendidikan agama, dan membina anak lewat keagamaan', '6', 'Qumil Laila, S.Pd.I'),
(8, 'Matematika', 'Mengajarkan matematika dasar, dan lanjutan dengan standar nasional', '6', 'Khusnul Mubarokah, S,Pd'),
(9, 'IPA', 'Ilmu Pengetahuan Alam yang megajarkan anak didik, untuk lebih dekat mengenal alam sekitarnya', '6', 'Surini, S.Pd'),
(10, 'Bahasa Inggris', 'Mengenalkan dan mengajarkan Bahasa Inggris kepada anak sebagai bekal untuk masa yang akan datang', '6', 'Rista Sari Mulandari, S.Pd');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `jenis_kelamin` varchar(120) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telp` int(18) NOT NULL,
  `kelas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `jenis_kelamin`, `alamat`, `telp`, `kelas`) VALUES
(1, 'Syifaul', 'Laki- laki', 'Ngadiluwih', 2147483647, '12'),
(2, 'Ama', 'Perempuan', 'Mojogedang', 893274923, '12'),
(3, 'Bocil', 'Perempuan', 'Kali', 949813423, '11'),
(4, 'amul', 'Perempuan', 'Mjg', 2147483647, '11'),
(6, 'Bagus', 'Perempuan', 'Macanan', 91387598, '10');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `image` varchar(120) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Shiva', 'syifaulqolbi32@gmail.com', 'default.jpg', '$2y$10$vfsNAzx7XYHTPIW05fDTmO1qag2.YJ1rsLv0GPkRXxoXw95guNZYS', 2, 1, 1570499433),
(2, 'Syifaul Qolbi', 'syifaulqolbi33@gmail.com', 'default.jpg', '$2y$10$p2VUVPEpckyP5Qp7Z2RfwOhTK/QL50H2AQWmbaXoRpPKi0QnBoKgq', 1, 1, 1570502731),
(3, 'KepSek', 'kepsek@gmail.com', 'default.jpg', '$2y$10$SsYMIuyOwPW9MP0n3SpIj.Out01lQXoBIMr4OpYSQMDRDj9Ef/nYa', 3, 1, 1578328750);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(43, 1, 3),
(53, 2, 4),
(55, 1, 2),
(58, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(4, 'Report');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(120) NOT NULL,
  `url` varchar(120) NOT NULL,
  `icon` varchar(120) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'Profile', 'user', 'fas fa-fw fa-users', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(7, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(9, 2, 'Data Guru', 'guru/dataGuru', 'fas fa-chalkboard-teacher', 1),
(10, 2, 'Data Siswa', 'siswa/dataSiswa', 'fas fa-chalkboard-teacher', 1),
(11, 2, 'Data Mata Pelajaran', 'mapel/dataMapel', 'fas fa-chalkboard-teacher', 1),
(12, 2, 'Data Fasilitas', 'fasilitas/dataFasilitas', 'fas fa-chalkboard-teacher', 1),
(13, 2, 'Data Event', 'event/dataEvent', 'fas fa-chalkboard-teacher', 1),
(14, 4, 'Data Guru', 'report/guru', 'fas fa-chalkboard-teacher', 1),
(15, 4, 'Data Siswa', 'report/siswa', 'fas fa-chalkboard-teacher', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

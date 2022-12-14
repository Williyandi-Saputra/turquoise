-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Nov 2022 pada 05.27
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_turquoise`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_komentar`
--

CREATE TABLE `tbl_komentar` (
  `id_komentar` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_komentar`
--

INSERT INTO `tbl_komentar` (`id_komentar`, `username`, `deskripsi`) VALUES
(8, 'tegar', 'Tampilan websitenya sangat menarik '),
(9, 'chiko', 'Rasa kuenya sangat enak dan tampilannya sesuai gambar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(30) NOT NULL,
  `jenis_produk` enum('kue','roti','pie','pastry') NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_produk`
--

INSERT INTO `tbl_produk` (`id_produk`, `nama_produk`, `jenis_produk`, `deskripsi_produk`, `harga_produk`, `image`) VALUES
(2, 'Matcha Cake', 'kue', '', 160000, '1669271606_58fa95b1cdc123b701eb.png'),
(3, 'Red Velvet Cake', 'kue', '', 150000, '1669271708_469ec8290cbf2d3c2829.png'),
(4, 'Chocolate Cake', 'kue', '', 165000, '1669271792_0465fc3e058b9d9c7129.png'),
(5, 'Apple Pie', 'pie', '', 260000, '1669271844_bf3fdb5f9fb17e739fab.png'),
(6, 'Cheese Bread', 'roti', '', 27000, '1669271924_2c4712d58b46bdc74d80.png'),
(7, 'Blueberry Pie', 'pie', '', 230000, '1669271965_8791928340d107512410.png'),
(8, 'Crepe Blueberry Cake', 'kue', '', 27000, '1669272028_efcf8be91400033b1013.png'),
(9, 'Vanilla Cupcake', 'kue', '', 9000, '1669272083_e40ec40edae03c3b85ce.png'),
(10, 'Matcha Bread', 'roti', '', 28000, '1669272138_476ee0594519c4513c2f.png'),
(11, 'Strawberry Croffle', 'pastry', '', 20000, '1669272196_61894bc6191fa3b8c3af.png'),
(12, 'Chocolate Bread', 'roti', '', 25000, '1669272265_ef42f3d332ef3365a16e.png'),
(13, 'Chocolate Brownies', 'kue', '', 7000, '1669272299_68bd1b24ad2cd4ed5d8e.png'),
(14, 'Crepe Chocolate Cake', 'kue', '', 25000, '1669272365_08e1b764f1ec40db4480.png'),
(15, 'Strawberry Donut', 'roti', '', 5000, '1669272430_439b1c53cd0c24f633db.png'),
(16, 'Oreo Cupcake', 'kue', '', 10000, '1669272465_38215c10df318eb3d649.png'),
(17, 'Chocolate Donut', 'roti', '', 5000, '1669272498_ff5575e0b20c464a473e.png'),
(18, 'Red Velvet Cupcake', 'kue', '', 10000, '1669289754_27ede3eb614c82e7a848.png'),
(19, 'Strawberry Cake', 'kue', '', 130000, '1669289828_4c9ff1427c1b2e50fb03.png'),
(20, 'Strawberry Pie', 'pie', '', 180000, '1669289935_464a4e2c33b99d9f9f87.png'),
(21, 'Chocolate Cake', 'kue', '', 120000, '1669290002_ef7729a7f1436d605529.png'),
(22, 'Tiramisu Donut', 'roti', '', 4000, '1669290079_b31fc54d52b68b81f88d.png'),
(23, 'Crepe Matcha Cake', 'kue', '', 27000, '1669290119_4f381ffb09140f705414.png'),
(24, 'Chococlate Cupcake', 'kue', '', 10000, '1669290176_7a1b23b266ba80f350e1.png'),
(25, 'Oreo Brownies', 'kue', '', 8000, '1669290237_6a3514e44ed9d2eb62d5.png'),
(26, 'Crepe Taro Cake', 'kue', '', 25000, '1669290289_6eaa2a3b8cb8de7fba62.png'),
(27, 'Purple Sweet Potato Cake', 'kue', '', 130000, '1669290349_6408d36ffc35d358069e.png'),
(28, 'Crepe Blueberry Cake', 'kue', '', 25000, '1669290439_858fbac93bc66650cfef.png'),
(29, 'Avocado Cupcake', 'kue', '', 12000, '1669290474_73fc0b43003d98009ca2.png'),
(30, 'Strawberry Bread', 'roti', '', 25000, '1669290535_b7e21fd34898617da9a8.png'),
(31, 'Matcha Croffle', 'pastry', '', 22000, '1669290605_a50cbeb987750976708f.png'),
(32, 'Vanilla Donut', 'roti', '', 4000, '1669290648_0dcfff28b78e213de239.png'),
(33, 'Banana Almond Croffle', 'pastry', '', 22000, '1669290722_b8f88cc4861e6c362cde.png'),
(34, 'Red Velvet Macaron', 'kue', '', 9000, '1669290855_135d92705205d4fe5aa0.png'),
(35, 'Strawberry Pastry', 'pastry', '', 8000, '1669290908_fe34d757452a2faeab33.png'),
(36, 'Matcha Macaron', 'kue', '', 10000, '1669290947_b12d5066fa997576358a.png'),
(37, 'Lemon Macaron', 'kue', '', 7000, '1669291004_999f92481f7532389123.png'),
(38, 'Matcha Cheesecake Oreo Pie', 'pie', '', 160000, '1669291067_5739de712ffafc7f0b43.png'),
(39, 'Lemon Pie', 'pie', '', 160000, '1669291103_8b2ce52d306e729540b6.png'),
(40, 'Taro Macaron ', 'kue', '', 8000, '1669291165_29f0e5c6cc551f7ad72c.png'),
(41, 'Cherry Pie', 'pie', '', 170000, '1669291206_74362569857dc335f0a5.png'),
(42, 'Crepe Rainbow Cake', 'kue', '', 25000, '1669293004_22149a2668240e7ce06d.png'),
(43, 'Blueberry Croffle', 'pastry', '', 25000, '1669293039_10e60d225459d72582fd.png'),
(44, 'Chocolate Croffle', 'pastry', '', 20000, '1669293079_557921cb80187289d306.png'),
(45, 'Egg Pastry', 'pastry', '', 6000, '1669293116_694d32d43ecb664e2874.png'),
(46, 'Cherry Pastry', 'pastry', '', 10000, '1669293157_4ab9fa6efa91c9bf0631.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(35) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `alamat` varchar(75) NOT NULL,
  `type` enum('admin','user','penjual') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indeks untuk tabel `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

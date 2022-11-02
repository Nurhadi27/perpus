-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01 Des 2020 pada 06.48
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` varchar(8) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `no_hp` char(13) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_agama`
--

CREATE TABLE `tb_agama` (
  `id_agama` int(2) NOT NULL,
  `agama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_agama`
--

INSERT INTO `tb_agama` (`id_agama`, `agama`) VALUES
(2, 'Islam'),
(3, 'Konghucu'),
(4, 'Budha'),
(5, 'Katholik'),
(6, 'Hindu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `id_anggota` varchar(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `id_kelas` int(2) NOT NULL,
  `id_agama` int(2) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `hp` varchar(15) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_anggota`
--

INSERT INTO `tb_anggota` (`id_anggota`, `nama`, `id_kelas`, `id_agama`, `jenis_kelamin`, `hp`, `nim`, `ket`) VALUES
('ANGG000001', 'Hazli Al Fadli', 4, 2, 'L', '0888', '1177', ''),
('ANGG000002', 'Ladeg', 4, 2, 'L', '08', '12', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_buku`
--

CREATE TABLE `tb_buku` (
  `id_buku` char(15) NOT NULL,
  `ISBN` varchar(20) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `id_kategori` int(3) NOT NULL,
  `id_penerbit` int(3) NOT NULL,
  `id_pengarang` int(3) NOT NULL,
  `no_rak` int(2) NOT NULL,
  `thn_terbit` year(4) NOT NULL,
  `stok` int(3) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_buku`
--

INSERT INTO `tb_buku` (`id_buku`, `ISBN`, `judul`, `id_kategori`, `id_penerbit`, `id_pengarang`, `no_rak`, `thn_terbit`, `stok`, `ket`) VALUES
('000001', '0', 'Bidasari Jewel Of Malay Muslim Culture', 10, 16, 12, 11, 2004, 1, ''),
('000003', '', 'Metodologi Rearch Jilid III', 13, 19, 15, 14, 1989, 5, ''),
('000006', '', 'Metodologi Rearch Jilid II', 13, 19, 15, 13, 1989, 1, ''),
('000008', '', 'Metogologi Research Jilid 4', 13, 19, 15, 13, 1989, 7, ''),
('000015', '', 'Metodologi Penelitian Filsafat', 13, 20, 16, 13, 2002, 1, ''),
('000016', '', 'Metode Penelitian Pendekatan Kualitatif', 13, 21, 17, 13, 1999, 1, ''),
('000017', '', 'Prosedur Penelitian Edisi V', 13, 22, 18, 13, 2004, 1, ''),
('000018', '', 'Statistika Terapan Untuk Penelitian', 13, 23, 19, 13, 2004, 1, ''),
('000030', '', 'Encyclopedia Of Knowledge Vol 1 a-ana', 16, 28, 29, 17, 2000, 1, ''),
('000031', '', 'Encyclopedia Of Knowledge Vol 2 Ano-Bas', 16, 28, 29, 17, 1991, 1, ''),
('000032', '', 'Encyclopedia Of Knowledge Vol 3 Bat-Bayz', 16, 28, 29, 17, 1991, 1, ''),
('000033', '', 'Encyclopedia Of Knowledge Vol 4 C-Cit', 16, 28, 29, 17, 1991, 1, ''),
('000034', '', 'Encyclopedia Of Knowledge Vol 5 Ciu-Dan', 16, 28, 29, 17, 1991, 1, ''),
('000035', '', 'Encyclopedia Of Knowledge Vol 6 Dan-Ele', 16, 28, 29, 17, 1991, 1, ''),
('000036', '', 'Encyclopedia Of Knowledge Vol 7 Elf-For', 16, 28, 29, 17, 1991, 1, ''),
('000037', '', 'Encyclopedia Of Knowledge Vol 8 Fos-Gra', 16, 28, 29, 17, 1991, 1, ''),
('000038', '', 'Encyclopedia Of Knowledge Vol 9 Gre-Hys', 16, 28, 29, 17, 1991, 1, ''),
('000039', '', 'Encyclopedia Of Knowledge Vol 10 I-J', 16, 28, 29, 17, 1991, 1, ''),
('000040', '', 'Encyclopedia Of Knowledge Vol 11 K-L', 16, 28, 29, 17, 1991, 1, ''),
('000041', '', 'Encyclopedia Of Knowledge Vol 12 M-Nac', 16, 28, 29, 17, 1991, 1, ''),
('000042', '', 'Encyclopedia Of Knowledge Vol 13 Mod-Nuc', 16, 28, 29, 17, 1991, 1, ''),
('000043', '', 'Encyclopedia Of Knowledge Vol 14 Noe-pia', 16, 28, 29, 17, 1991, 1, ''),
('000250', '', 'Statistika Terapan Untuk Penelitian', 14, 23, 19, 15, 2004, 1, ''),
('001805', '', 'Memadu Metode Penelitian Kualitatif&Kuantitatif', 11, 17, 13, 12, 2005, 1, ''),
('001874', '', 'Metode Penelitian ', 13, 24, 20, 13, 2005, 1, ''),
('001875', '', 'Metodologi Research Jilid 4', 13, 19, 21, 13, 1994, 1, ''),
('002970', '', 'Metodologi Penelitian Kualitatif', 13, 25, 22, 13, 2006, 3, ''),
('003014', '', 'Cara Meneliti', 12, 18, 14, 14, 1995, 3, ''),
('003122', '', 'Prosedur Penelitian Suatu Pendekatan Praktis', 13, 22, 23, 13, 2006, 1, ''),
('003125', '', 'Metode Penelitian Kuantitatif dan Kualitatif', 13, 23, 24, 13, 2008, 1, ''),
('003126', '', 'Pengantar Penelitian Ilmiah', 13, 26, 25, 13, 2006, 1, ''),
('003162', '', 'Prosedur Penelitian', 13, 22, 26, 13, 2010, 1, ''),
('003176', '', 'Metode Penelitian Dakwah', 13, 27, 27, 13, 2003, 2, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_denda`
--

CREATE TABLE `tb_denda` (
  `id_denda` int(6) NOT NULL,
  `denda` int(6) NOT NULL,
  `status` enum('A','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_denda`
--

INSERT INTO `tb_denda` (`id_denda`, `denda`, `status`) VALUES
(6, 500, 'N'),
(7, 1000, 'N'),
(8, 50000, 'N'),
(9, 250, 'A');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_detail_buku`
--

CREATE TABLE `tb_detail_buku` (
  `id_detail_buku` int(11) NOT NULL,
  `id_buku` char(15) NOT NULL,
  `no_buku` int(4) NOT NULL,
  `status` char(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_detail_buku`
--

INSERT INTO `tb_detail_buku` (`id_detail_buku`, `id_buku`, `no_buku`, `status`) VALUES
(301, '003014', 3014, '1'),
(302, '003014', 3015, '1'),
(303, '003014', 3016, '1'),
(305, '000001', 1, '1'),
(306, '000006', 6, '1'),
(307, '001805', 1805, '1'),
(308, '000003', 3, '1'),
(309, '000003', 4, '1'),
(310, '000003', 5, '1'),
(311, '000003', 6, '1'),
(312, '000003', 7, '1'),
(313, '000008', 8, '1'),
(314, '000008', 9, '1'),
(315, '000008', 10, '1'),
(316, '000008', 11, '1'),
(317, '000008', 12, '1'),
(318, '000008', 13, '1'),
(319, '000008', 14, '1'),
(320, '000015', 15, '1'),
(321, '000016', 16, '1'),
(322, '000017', 17, '1'),
(323, '001874', 1874, '1'),
(324, '000018', 18, '1'),
(325, '001875', 1875, '1'),
(326, '002970', 2970, '1'),
(327, '002970', 2971, '1'),
(328, '002970', 2972, '1'),
(329, '003122', 3122, '1'),
(330, '003125', 3125, '1'),
(331, '003126', 3126, '1'),
(332, '003162', 3162, '1'),
(334, '003176', 3176, '1'),
(335, '003176', 3177, '1'),
(336, '000030', 30, '1'),
(337, '000031', 31, '1'),
(338, '000032', 32, '1'),
(339, '000041', 41, '1'),
(340, '000040', 40, '1'),
(341, '000039', 39, '1'),
(342, '000038', 38, '1'),
(343, '000037', 37, '1'),
(344, '000036', 36, '1'),
(345, '000034', 34, '1'),
(346, '000035', 35, '1'),
(347, '000033', 33, '1'),
(348, '000250', 250, '1'),
(349, '000043', 43, '1'),
(350, '000042', 42, '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_detail_pinjam`
--

CREATE TABLE `tb_detail_pinjam` (
  `id_detail_pinjam` int(11) NOT NULL,
  `id_pinjam` int(11) NOT NULL,
  `id_buku` char(15) NOT NULL,
  `no_buku` int(4) NOT NULL,
  `flag` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(3) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `kategori`) VALUES
(10, '001'),
(11, '001..4'),
(12, '001.41'),
(13, '001.42'),
(14, '001.422'),
(15, '001.9'),
(16, '0030');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` int(2) NOT NULL,
  `kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `kelas`) VALUES
(4, 'Mahasiswa'),
(5, 'Dosen');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kembali`
--

CREATE TABLE `tb_kembali` (
  `id_kembali` int(11) NOT NULL,
  `id_pinjam` int(11) NOT NULL,
  `tgl_dikembalikan` date NOT NULL,
  `terlambat` int(2) NOT NULL,
  `id_denda` int(6) NOT NULL,
  `denda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kembali`
--

INSERT INTO `tb_kembali` (`id_kembali`, `id_pinjam`, `tgl_dikembalikan`, `terlambat`, `id_denda`, `denda`) VALUES
(213, 105, '2020-06-30', 0, 9, 0),
(214, 106, '2020-07-02', 0, 9, 0),
(215, 107, '2020-07-29', 29, 9, 7250),
(216, 108, '2020-08-25', 54, 9, 13500),
(217, 109, '2020-07-02', 2, 9, 500),
(218, 110, '2020-06-30', 0, 9, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

CREATE TABLE `tb_login` (
  `username` varchar(15) NOT NULL,
  `password` varchar(75) NOT NULL,
  `stts` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_login`
--

INSERT INTO `tb_login` (`username`, `password`, `stts`) VALUES
('1177050050', '71e410717a51628f3fdc534635c248c6', 'petugas'),
('1177050051', '71e410717a51628f3fdc534635c248c6', 'petugas'),
('1630511', 'afb91ef692fd08c445e8cb1bab2ccf9c', 'petugas'),
('admin', '49cea16c133ffef83271e9bf4f747831', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penerbit`
--

CREATE TABLE `tb_penerbit` (
  `id_penerbit` int(3) NOT NULL,
  `nama_penerbit` varchar(50) NOT NULL,
  `id_kota` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_penerbit`
--

INSERT INTO `tb_penerbit` (`id_penerbit`, `nama_penerbit`, `id_kota`) VALUES
(16, 'Kit LV Press', 22),
(17, 'Pustaka pelajar', 23),
(18, 'ITB', 24),
(19, 'Andi Off Set', 23),
(20, 'PT Raja Grafindo P', 7),
(21, 'Primaco Akademika', 24),
(22, 'Rineka Cipta', 7),
(23, 'Alfabeta', 24),
(24, 'Ghalia Indonesia', 25),
(25, 'PT Remaja Rosda Karya', 24),
(26, 'Tarsito', 24),
(27, 'Pustaka Setia', 24),
(28, 'Grolier Incarparated', 26);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengarang`
--

CREATE TABLE `tb_pengarang` (
  `id_pengarang` int(3) NOT NULL,
  `nama_pengarang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pengarang`
--

INSERT INTO `tb_pengarang` (`id_pengarang`, `nama_pengarang`) VALUES
(12, 'Julian Mill'),
(13, 'Julia Brannen'),
(14, 'Nick Moore'),
(15, 'Hadi Sutrisno'),
(16, 'Sudarto'),
(17, 'Garna Judistira K'),
(18, 'Arikunto Suharni'),
(19, 'Furqon'),
(20, 'Moh Nazir'),
(21, 'Sutrisno Hadi'),
(22, 'Deddy Mulyana'),
(23, 'Prof Dr Suharsini Arikunto'),
(24, 'Prof Dr Sugiyono'),
(25, 'Prof Dr Winarno Surakhmad'),
(26, 'Suharsini Arikunto'),
(27, 'Asep Saeful Muhtadi'),
(28, 'Furqon'),
(29, '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_petugas`
--

CREATE TABLE `tb_petugas` (
  `id_petugas` char(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `img` varchar(50) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `alamat` text NOT NULL,
  `password` varchar(50) NOT NULL,
  `id_agama` int(2) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_petugas`
--

INSERT INTO `tb_petugas` (`id_petugas`, `nama`, `img`, `jenis_kelamin`, `alamat`, `password`, `id_agama`, `hp`, `ket`) VALUES
('1177050050', 'Ladeg', 'AU6GHX9D1MKRWQNY2O4EPL85SJF37ZBCI0TV.jpg', 'L', 'asd', 'h01470258', 2, '0888', 'asd'),
('1177050051', 'Hazli Al Fadli', '', 'L', 'Cibiru', 'h01470258', 2, '085279457495', ''),
('1630511', 'Puja', '4HSGCR1UIMJKQP03ZLEWT6YN7D2XB98OFAV5.JPG', 'L', 'Wada', 'petugas', 2, '08', ''),
('admin', 'Hazli Al Fadli', '7GF8CEY4VJU52TWQ6LMOA3DS01BPINHRKZ9X.jpg', 'L', 'UIN', 'pascapascaperpus', 2, '0808', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pinjam`
--

CREATE TABLE `tb_pinjam` (
  `id_pinjam` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `id_anggota` varchar(11) NOT NULL,
  `tgl_kembali` date NOT NULL,
  `total_buku` int(4) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pinjam`
--

INSERT INTO `tb_pinjam` (`id_pinjam`, `tgl_pinjam`, `id_anggota`, `tgl_kembali`, `total_buku`, `status`) VALUES
(105, '2020-06-29', 'ANGG000001', '2020-06-30', 2, 1),
(106, '2020-06-29', 'ANGG000002', '2020-07-02', 2, 1),
(107, '2020-07-20', 'ANGG000001', '2020-06-30', 1, 1),
(108, '2020-07-20', 'ANGG000002', '2020-07-02', 1, 1),
(109, '2020-08-25', 'ANGG000001', '2020-06-30', 1, 1),
(110, '2020-08-25', 'ANGG000001', '2020-06-30', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_provinsi`
--

CREATE TABLE `tb_provinsi` (
  `id_kota` int(2) NOT NULL,
  `nama_kota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_provinsi`
--

INSERT INTO `tb_provinsi` (`id_kota`, `nama_kota`) VALUES
(4, 'Jambi'),
(6, 'Pekan Baru'),
(7, 'Jakarta'),
(8, 'Jawa Barat'),
(9, 'Lampung'),
(22, 'London'),
(23, 'Yogyakarta'),
(24, 'Bandung'),
(25, 'Bogor'),
(26, 'Amerika');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rak`
--

CREATE TABLE `tb_rak` (
  `no_rak` int(2) NOT NULL,
  `nama_rak` varchar(50) NOT NULL,
  `id_kategori` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_rak`
--

INSERT INTO `tb_rak` (`no_rak`, `nama_rak`, `id_kategori`) VALUES
(11, '001', 10),
(12, '001..4', 11),
(13, '001.42', 13),
(14, '001.41', 12),
(15, '001.422', 14),
(16, '001.9', 15),
(17, '0030', 16);

-- --------------------------------------------------------

--
-- Struktur dari tabel `test`
--

CREATE TABLE `test` (
  `kode` varchar(12) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `mboh` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `test`
--

INSERT INTO `test` (`kode`, `nama`, `mboh`) VALUES
('', 'ari', ''),
('Kode000001', 'ari2', ''),
('Kode000002', 'ari2', ''),
('Kode000003', 'Ariandi AS', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `id_admin` (`id_admin`,`password`,`nama`,`alamat`,`no_hp`),
  ADD KEY `id_admin_2` (`id_admin`,`password`,`nama`,`alamat`,`no_hp`,`img`);

--
-- Indexes for table `tb_agama`
--
ALTER TABLE `tb_agama`
  ADD PRIMARY KEY (`id_agama`);

--
-- Indexes for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`id_anggota`),
  ADD KEY `id_agama` (`id_agama`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`id_buku`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_penerbit` (`id_penerbit`),
  ADD KEY `id_pengarang` (`id_pengarang`),
  ADD KEY `no_rak` (`no_rak`),
  ADD KEY `id_buku` (`id_buku`,`ISBN`,`judul`,`id_kategori`,`id_penerbit`,`id_pengarang`,`no_rak`,`thn_terbit`,`stok`);

--
-- Indexes for table `tb_denda`
--
ALTER TABLE `tb_denda`
  ADD PRIMARY KEY (`id_denda`);

--
-- Indexes for table `tb_detail_buku`
--
ALTER TABLE `tb_detail_buku`
  ADD KEY `id_detail_buku` (`id_detail_buku`,`id_buku`,`no_buku`,`status`),
  ADD KEY `id_buku` (`id_buku`);

--
-- Indexes for table `tb_detail_pinjam`
--
ALTER TABLE `tb_detail_pinjam`
  ADD PRIMARY KEY (`id_detail_pinjam`),
  ADD KEY `id_anggota` (`id_pinjam`),
  ADD KEY `id_detail_pinjam` (`id_detail_pinjam`,`id_pinjam`,`id_buku`,`no_buku`),
  ADD KEY `id_buku` (`id_buku`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tb_kembali`
--
ALTER TABLE `tb_kembali`
  ADD PRIMARY KEY (`id_kembali`),
  ADD KEY `id_detail` (`id_pinjam`),
  ADD KEY `id_kembali` (`id_kembali`,`id_pinjam`,`tgl_dikembalikan`,`terlambat`,`id_denda`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`username`),
  ADD KEY `username` (`username`,`password`,`stts`);

--
-- Indexes for table `tb_penerbit`
--
ALTER TABLE `tb_penerbit`
  ADD PRIMARY KEY (`id_penerbit`),
  ADD KEY `id_penerbit` (`id_penerbit`,`nama_penerbit`,`id_kota`),
  ADD KEY `id_kota` (`id_kota`) USING BTREE;

--
-- Indexes for table `tb_pengarang`
--
ALTER TABLE `tb_pengarang`
  ADD PRIMARY KEY (`id_pengarang`);

--
-- Indexes for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD PRIMARY KEY (`id_petugas`),
  ADD KEY `id_agama` (`id_agama`);

--
-- Indexes for table `tb_pinjam`
--
ALTER TABLE `tb_pinjam`
  ADD PRIMARY KEY (`id_pinjam`),
  ADD KEY `id_detail` (`tgl_kembali`),
  ADD KEY `id_buku` (`id_anggota`),
  ADD KEY `id_pinjam` (`id_pinjam`,`tgl_pinjam`,`id_anggota`,`tgl_kembali`,`total_buku`);

--
-- Indexes for table `tb_provinsi`
--
ALTER TABLE `tb_provinsi`
  ADD PRIMARY KEY (`id_kota`);

--
-- Indexes for table `tb_rak`
--
ALTER TABLE `tb_rak`
  ADD PRIMARY KEY (`no_rak`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_agama`
--
ALTER TABLE `tb_agama`
  MODIFY `id_agama` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_denda`
--
ALTER TABLE `tb_denda`
  MODIFY `id_denda` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tb_detail_buku`
--
ALTER TABLE `tb_detail_buku`
  MODIFY `id_detail_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=351;
--
-- AUTO_INCREMENT for table `tb_detail_pinjam`
--
ALTER TABLE `tb_detail_pinjam`
  MODIFY `id_detail_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;
--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id_kelas` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_kembali`
--
ALTER TABLE `tb_kembali`
  MODIFY `id_kembali` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=219;
--
-- AUTO_INCREMENT for table `tb_penerbit`
--
ALTER TABLE `tb_penerbit`
  MODIFY `id_penerbit` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `tb_pengarang`
--
ALTER TABLE `tb_pengarang`
  MODIFY `id_pengarang` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `tb_pinjam`
--
ALTER TABLE `tb_pinjam`
  MODIFY `id_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
--
-- AUTO_INCREMENT for table `tb_provinsi`
--
ALTER TABLE `tb_provinsi`
  MODIFY `id_kota` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `tb_rak`
--
ALTER TABLE `tb_rak`
  MODIFY `no_rak` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD CONSTRAINT `tb_anggota_ibfk_1` FOREIGN KEY (`id_agama`) REFERENCES `tb_agama` (`id_agama`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_anggota_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `tb_kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD CONSTRAINT `tb_buku_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_buku_ibfk_2` FOREIGN KEY (`id_penerbit`) REFERENCES `tb_penerbit` (`id_penerbit`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_buku_ibfk_3` FOREIGN KEY (`id_pengarang`) REFERENCES `tb_pengarang` (`id_pengarang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_buku_ibfk_4` FOREIGN KEY (`no_rak`) REFERENCES `tb_rak` (`no_rak`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_detail_buku`
--
ALTER TABLE `tb_detail_buku`
  ADD CONSTRAINT `tb_detail_buku_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `tb_buku` (`id_buku`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_detail_pinjam`
--
ALTER TABLE `tb_detail_pinjam`
  ADD CONSTRAINT `tb_detail_pinjam_ibfk_1` FOREIGN KEY (`id_pinjam`) REFERENCES `tb_pinjam` (`id_pinjam`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_detail_pinjam_ibfk_2` FOREIGN KEY (`id_buku`) REFERENCES `tb_buku` (`id_buku`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_kembali`
--
ALTER TABLE `tb_kembali`
  ADD CONSTRAINT `tb_kembali_ibfk_1` FOREIGN KEY (`id_pinjam`) REFERENCES `tb_pinjam` (`id_pinjam`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_penerbit`
--
ALTER TABLE `tb_penerbit`
  ADD CONSTRAINT `tb_penerbit_ibfk_1` FOREIGN KEY (`id_kota`) REFERENCES `tb_provinsi` (`id_kota`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD CONSTRAINT `tb_petugas_ibfk_1` FOREIGN KEY (`id_agama`) REFERENCES `tb_agama` (`id_agama`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_pinjam`
--
ALTER TABLE `tb_pinjam`
  ADD CONSTRAINT `tb_pinjam_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `tb_anggota` (`id_anggota`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_rak`
--
ALTER TABLE `tb_rak`
  ADD CONSTRAINT `tb_rak_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
